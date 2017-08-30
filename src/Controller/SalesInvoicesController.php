<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalesInvoices Controller
 *
 * @property \App\Model\Table\SalesInvoicesTable $SalesInvoices
 *
 * @method \App\Model\Entity\SalesInvoice[] paginate($object = null, array $settings = [])
 */
class SalesInvoicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$this->viewBuilder()->layout('index_layout');
		 $this->paginate = [
            'contain' => ['Companies']
        ];
		$salesInvoice = $this->SalesInvoices->find();
		$salesInvoices = $this->paginate($salesInvoice);
        $this->set(compact('salesInvoices'));
        $this->set('_serialize', ['salesInvoices']);
    }

    /**
     * View method
     *
     * @param string|null $id Sales Invoice id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesInvoice = $this->SalesInvoices->get($id, [
            'contain' => ['Companies', 'Customers', 'GstFigures', 'SalesInvoiceRows']
        ]);

        $this->set('salesInvoice', $salesInvoice);
        $this->set('_serialize', ['salesInvoice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('index_layout');
        $salesInvoice = $this->SalesInvoices->newEntity();
		$company_id=$this->Auth->User('session_company_id');
		$stateDetails=$this->Auth->User('session_company');
		$state_id=$stateDetails->state_id;
		$Voucher_no = $this->SalesInvoices->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
		if($Voucher_no)
		{
			$voucher_no=$Voucher_no->voucher_no+1;
		}
		else
		{
			$voucher_no=1;
		} 		
		
        if ($this->request->is('post')) {
		    $transaction_date=date('Y-m-d', strtotime($this->request->data['transaction_date']));
            $salesInvoice = $this->SalesInvoices->patchEntity($salesInvoice, $this->request->getData());
            $salesInvoice->transaction_date=$transaction_date;
			if($salesInvoice->cash_or_credit=='cash')
			{
			$salesInvoice->customer_id=0;
			}
			
		   if ($this->SalesInvoices->save($salesInvoice)) {
                $this->Flash->success(__('The sales invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
        }
		$customers = $this->SalesInvoices->Customers->find()
					->where(['company_id'=>$company_id,'freeze'=>0]);
						$customerOptions=[];
		foreach($customers as $customer){
			$customerOptions[]=['text' =>$customer->name, 'value' => $customer->id ,'customer_state_id'=>$customer->state_id];
		}
		
		$items = $this->SalesInvoices->Items->find()
					->where(['Items.company_id'=>$company_id,'freeze'=>0])
					->contain(['GstFigures']);
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text' =>$item->name, 'value' => $item->id ,'gst_figure_id'=>$item->gst_figure_id, 'gst_figure_tax_percentage'=>$item->gst_figure->tax_percentage,'gst_figure_tax_name'=>$item->gst_figure->name, 'output_cgst_ledger_id'=>$item->output_cgst_ledger_id, 'output_sgst_ledger_id'=>$item->output_sgst_ledger_id, 'output_igst_ledger_id'=>$item->output_igst_ledger_id];
		}
		
        $gstFigures = $this->SalesInvoices->GstFigures->find('list', ['limit' => 200])
						->where(['company_id'=>$company_id]);
						
        $this->set(compact('salesInvoice', 'companies', 'customerOptions', 'gstFigures', 'voucher_no','company_id','itemOptions','state_id'));
        $this->set('_serialize', ['salesInvoice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Invoice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
	$this->viewBuilder()->layout('index_layout');
        $salesInvoice = $this->SalesInvoices->get($id, [
            'contain' => (['SalesInvoiceRows'=>['Items', 'GstFigures']])
        ]);
		
		$company_id=$this->Auth->User('session_company_id');
		$stateDetails=$this->Auth->User('session_company');
		$state_id=$stateDetails->state_id;
		$Voucher_no = $this->SalesInvoices->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
		if($Voucher_no)
		{
			$voucher_no=$Voucher_no->voucher_no+1;
		}
		else
		{
			$voucher_no=1;
		} 	
        if ($this->request->is(['patch', 'post', 'put'])) {
		    $transaction_date=date('Y-m-d', strtotime($this->request->data['transaction_date']));
            $salesInvoice = $this->SalesInvoices->patchEntity($salesInvoice, $this->request->getData());
            $salesInvoice->transaction_date=$transaction_date;
			if($salesInvoice->cash_or_credit=='cash')
			{
			$salesInvoice->customer_id=0;
			}
			if ($this->SalesInvoices->save($salesInvoice)) {
			
                $this->Flash->success(__('The sales invoice has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
        }

        $companies = $this->SalesInvoices->Companies->find('list', ['limit' => 200]);
        $customers = $this->SalesInvoices->Customers->find('list')->where(['freeze'=>0]);
        $gstFigures = $this->SalesInvoices->GstFigures->find('list', ['limit' => 200]);
        $this->set(compact('salesInvoice', 'companies', 'customers', 'gstFigures'));

		
		$customers = $this->SalesInvoices->Customers->find()
					->where(['company_id'=>$company_id,'freeze'=>0]);
						$customerOptions=[];
		foreach($customers as $customer){
			$customerOptions[]=['text' =>$customer->name, 'value' => $customer->id ,'customer_state_id'=>$customer->state_id];
		}
		
		$items = $this->SalesInvoices->Items->find()
					->where(['Items.company_id'=>$company_id,'freeze'=>0])
					->contain(['GstFigures']);
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text' =>$item->name, 'value' => $item->id ,'gst_figure_id'=>$item->gst_figure_id, 'gst_figure_tax_percentage'=>$item->gst_figure->tax_percentage,'gst_figure_tax_name'=>$item->gst_figure->name, 'output_cgst_ledger_id'=>$item->output_cgst_ledger_id, 'output_sgst_ledger_id'=>$item->output_sgst_ledger_id, 'output_igst_ledger_id'=>$item->output_igst_ledger_id];
		}
		
        $gstFigures = $this->SalesInvoices->GstFigures->find('list', ['limit' => 200])
						->where(['company_id'=>$company_id]);
        $this->set(compact('salesInvoice', 'companies', 'customerOptions', 'gstFigures', 'voucher_no','company_id','itemOptions','state_id'));

        $this->set('_serialize', ['salesInvoice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Invoice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesInvoice = $this->SalesInvoices->get($id);
        if ($this->SalesInvoices->delete($salesInvoice)) {
            $this->Flash->success(__('The sales invoice has been deleted.'));
        } else {
            $this->Flash->error(__('The sales invoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
