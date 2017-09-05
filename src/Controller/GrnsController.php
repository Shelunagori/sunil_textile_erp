<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grns Controller
 *
 * @property \App\Model\Table\GrnsTable $Grns
 *
 * @method \App\Model\Entity\Grn[] paginate($object = null, array $settings = [])
 */
class GrnsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$this->viewBuilder()->layout('index_layout');
		$company_id=$this->Auth->User('session_company_id');
        $this->paginate = [
            'contain' => ['Companies']
        ];
        $grns = $this->paginate($this->Grns);

        $this->set(compact('grns'));
        $this->set('_serialize', ['grns']);
    }

    /**
     * View method
     *
     * @param string|null $id Grn id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
		$company_id=$this->Auth->User('session_company_id');
        $grn = $this->Grns->get($id, [
            'contain' => ['Companies', 'GrnRows'=>['Items']]
        ]);
		
        $this->set('grn', $grn);
        $this->set('_serialize', ['grn']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('index_layout');
		$company_id=$this->Auth->User('session_company_id');
        $grn = $this->Grns->newEntity();
		$this->request->data['company_id'] =$company_id;
        if ($this->request->is('post')) {
			$grn = $this->Grns->patchEntity($grn, $this->request->getData());
			$grn->transaction_date = date("Y-m-d",strtotime($this->request->getData()['transaction_date']));
			$Voucher_no = $this->Grns->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
			if($Voucher_no)
			{
				$grn->voucher_no = $Voucher_no->voucher_no+1;
			}
			else
			{
				$grn->voucher_no = 1;
			} 
			
            if ($this->Grns->save($grn)) 
			{
				//Create Item_Ledger//
				
				foreach($grn->grn_rows as $grn_row)
				{
					
					$item_ledger = $this->Grns->ItemLedgers->newEntity();
					$item_ledger->transaction_date = $grn->transaction_date;
					$item_ledger->grn_id = $grn->id;
					$item_ledger->grn_row_id = $grn_row->id;
					$item_ledger->item_id = $grn_row->item_id;
					$item_ledger->quantity = $grn_row->quantity;
					$item_ledger->rate = $grn_row->purchase_rate;
					$item_ledger->sale_rate = $grn_row->sale_rate;
					$item_ledger->company_id =$company_id;
					$item_ledger->status ='in';
					$item_ledger->amount=$grn_row->quantity*$grn_row->purchase_rate;
					$this->Grns->ItemLedgers->save($item_ledger);
				}
				
				
                $this->Flash->success(__('The grn has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grn could not be saved. Please, try again.'));
        }
		$items = $this->Grns->GrnRows->Items->find()
					->where(['Items.company_id'=>$company_id])
					->contain(['GstFigures']);
				
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text' =>$item->name, 'value' => $item->id ,'gst_figure_id'=>$item->gst_figure_id, 'gst_figure_tax_percentage'=>$item->gst_figure->tax_percentage,'gst_figure_tax_name'=>$item->gst_figure->name, 'output_cgst_ledger_id'=>$item->output_cgst_ledger_id, 'output_sgst_ledger_id'=>$item->output_sgst_ledger_id, 'output_igst_ledger_id'=>$item->output_igst_ledger_id];
		}
		$Voucher_no = $this->Grns->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
		
		if($Voucher_no)
		{
			$voucher_no=$Voucher_no->voucher_no+1;
		}
		else
		{ 
			$voucher_no=1;
			
		} 
		 
        //$locations = $this->Grns->Locations->find('list', ['limit' => 200]);
        $companies = $this->Grns->Companies->find('list');
        $this->set(compact('grn','companies','voucher_no','itemOptions'));
        $this->set('_serialize', ['grn']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grn id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
		$company_id=$this->Auth->User('session_company_id');
        $grn = $this->Grns->get($id, [
            'contain' => ['GrnRows']
        ]);
	
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grn = $this->Grns->patchEntity($grn, $this->request->getData());
			$grn->transaction_date = date("Y-m-d",strtotime($this->request->getData()['transaction_date']));
            if ($this->Grns->save($grn)) {
				$query = $this->Grns->ItemLedgers->query();
				$query->delete()->where(['grn_id'=> $id,'company_id'=>$company_id])->execute();
				foreach($grn->grn_rows as $grn_row)
				{
					
					$item_ledger = $this->Grns->ItemLedgers->newEntity();
					$item_ledger->transaction_date = $grn->transaction_date;
					$item_ledger->grn_id = $grn->id;
					$item_ledger->grn_row_id = $grn_row->id;
					$item_ledger->item_id = $grn_row->item_id;
					$item_ledger->quantity = $grn_row->quantity;
					$item_ledger->rate = $grn_row->purchase_rate;
					$item_ledger->sale_rate = $grn_row->sale_rate;
					$item_ledger->company_id =$company_id;
					$item_ledger->status ='in';
					$item_ledger->amount=$grn_row->quantity*$grn_row->purchase_rate;
					$this->Grns->ItemLedgers->save($item_ledger);
				
					
				
				}
				
				$this->Flash->success(__('The grn has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grn could not be saved. Please, try again.'));
        }
		$items = $this->Grns->GrnRows->Items->find()
					->where(['Items.company_id'=>$company_id])
					->contain(['GstFigures']);
				
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text' =>$item->name, 'value' => $item->id ,'gst_figure_id'=>$item->gst_figure_id, 'gst_figure_tax_percentage'=>$item->gst_figure->tax_percentage,'gst_figure_tax_name'=>$item->gst_figure->name, 'output_cgst_ledger_id'=>$item->output_cgst_ledger_id, 'output_sgst_ledger_id'=>$item->output_sgst_ledger_id, 'output_igst_ledger_id'=>$item->output_igst_ledger_id];
		}
        //$locations = $this->Grns->Locations->find('list', ['limit' => 200]);
        $companies = $this->Grns->Companies->find('list');
        $this->set(compact('grn','companies','itemOptions'));
        $this->set('_serialize', ['grn']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grn id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $this->request->allowMethod(['post', 'delete']);
        $grn = $this->Grns->get($id);
        if ($this->Grns->delete($grn)) {
            $this->Flash->success(__('The grn has been deleted.'));
        } else {
            $this->Flash->error(__('The grn could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function importCsv()
	{
		$this->viewBuilder()->layout('index_layout');
		$import_csv = $this->Grns->newEntity();
		$this->set(compact('import_csv'));
        $this->set('_serialize', ['import_csv']);
	}
	
	public function import()
	{
		$this->viewBuilder()->layout('index_layout');
		$grn = $this->Grns->newEntity();
		/* if ($this->request->is('post')) 
		{
			
			$csv = $this->request->data['csv'];
			if(!empty($csv['tmp_name']))
			{
				
				$ext = substr(strtolower(strrchr($csv['name'], '.')), 1); //get the extension 
				
				$arr_ext = array('csv'); 									   
				if (in_array($ext, $arr_ext)) 
				{
								
					$f = fopen($csv['tmp_name'], 'r') or die("ERROR OPENING DATA");
					$batchcount=0;
					$records=0;
					while (($line = fgetcsv($f, 4096, ';')) !== false) 
					{
						$numcols = count($line);
						$test[]=$line;
						++$records;
					}
					foreach($test as $test1)
					{ 
					
						 $data = explode(",",$test1[0]);
						 $item = $this->Items->newEntity();
						 $item->name           = $data[0];
						 $item->item_code      = $data[1]; 
						 $item->hsn_code       = $data[2];
						 $item->unit_id        = $data[3];
						 $item->stock_group_id = $data[4];
						 $item->company_id     = $data[5];
						 $this->Items->save($item);
					} 
					fclose($f);
					$records;

					move_uploaded_file($csv['tmp_name'], WWW_ROOT . '/csv/csv_'.date("d-m-Y").'.'.$ext);
				}
			   
				
			}
		} */
		$this->set(compact('import'));
        $this->set('_serialize', ['import']);
	}
}
