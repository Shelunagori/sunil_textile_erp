<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SecondTampGrnRecords Controller
 *
 * @property \App\Model\Table\SecondTampGrnRecordsTable $SecondTampGrnRecords
 *
 * @method \App\Model\Entity\SecondTampGrnRecord[] paginate($object = null, array $settings = [])
 */
class SecondTampGrnRecordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $secondTampGrnRecords = $this->paginate($this->SecondTampGrnRecords);

        $this->set(compact('secondTampGrnRecords'));
        $this->set('_serialize', ['secondTampGrnRecords']);
    }

    /**
     * View method
     *
     * @param string|null $id Second Tamp Grn Record id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secondTampGrnRecord = $this->SecondTampGrnRecords->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('secondTampGrnRecord', $secondTampGrnRecord);
        $this->set('_serialize', ['secondTampGrnRecord']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secondTampGrnRecord = $this->SecondTampGrnRecords->newEntity();
        if ($this->request->is('post')) {
            $secondTampGrnRecord = $this->SecondTampGrnRecords->patchEntity($secondTampGrnRecord, $this->request->getData());
            if ($this->SecondTampGrnRecords->save($secondTampGrnRecord)) {
                $this->Flash->success(__('The second tamp grn record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The second tamp grn record could not be saved. Please, try again.'));
        }
        $users = $this->SecondTampGrnRecords->Users->find('list', ['limit' => 200]);
        $this->set(compact('secondTampGrnRecord', 'users'));
        $this->set('_serialize', ['secondTampGrnRecord']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Second Tamp Grn Record id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secondTampGrnRecord = $this->SecondTampGrnRecords->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secondTampGrnRecord = $this->SecondTampGrnRecords->patchEntity($secondTampGrnRecord, $this->request->getData());
            if ($this->SecondTampGrnRecords->save($secondTampGrnRecord)) {
                $this->Flash->success(__('The second tamp grn record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The second tamp grn record could not be saved. Please, try again.'));
        }
        $users = $this->SecondTampGrnRecords->Users->find('list', ['limit' => 200]);
        $this->set(compact('secondTampGrnRecord', 'users'));
        $this->set('_serialize', ['secondTampGrnRecord']);
    }
	
	
    /**
     * Delete method
     *
     * @param string|null $id Second Tamp Grn Record id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secondTampGrnRecord = $this->SecondTampGrnRecords->get($id);
        if ($this->SecondTampGrnRecords->delete($secondTampGrnRecord)) {
            $this->Flash->success(__('The second tamp grn record has been deleted.'));
        } else {
            $this->Flash->error(__('The second tamp grn record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function progress()
	{
		$this->viewBuilder()->layout('index_layout');
		$SecondTampGrnRecords = $this->SecondTampGrnRecords->newEntity();
		$this->set(compact('SecondTampGrnRecords'));
        $this->set('_serialize', ['SecondTampGrnRecords']);
	}
	
	public function ProcessData()
	{
		$user_id=$this->Auth->User('id');
		$company_id=$this->Auth->User('session_company_id');
		$SecondTampGrnRecords = $this->SecondTampGrnRecords->find()
								->where(['user_id'=>$user_id,'company_id'=>$company_id,'processed'=>'no']);
		
		foreach($SecondTampGrnRecords as $SecondTampGrnRecords)
		{
			$items=$this->SecondTampGrnRecords->Companies->Items->find()
			->where(['Items.item_code'=>$SecondTampGrnRecords->item_code])->first();
			if($items)
			{
				$query = $this->SecondTampGrnRecords->query();
				$query->update()
					->set(['item_id' => $items->id])
					->where(['item_code' =>$SecondTampGrnRecords->item_code, 'company_id' => $company_id])
					->execute();
					
				$query->update()
					->set(['processed' => 'Yes'])
					->where(['SecondTampGrnRecords.id' =>$SecondTampGrnRecords->id])
					->execute();
			}
			else{
				$units=$this->SecondTampGrnRecords->Units->find()
				->where(['Units.name'=>$SecondTampGrnRecords->unit])->first();
				$unit_id=$units->id;
			
				$new_items = $this->SecondTampGrnRecords->Companies->Items->newEntity();
				$new_items->name=$SecondTampGrnRecords->item_name ;
				$new_items->item_code=$SecondTampGrnRecords->item_code ;
				$new_items->hsn_code=$SecondTampGrnRecords->hsn_code ;
				$new_items->unit_id=$unit_id;
				/* 
				$items->first_gst_figure_id=$SecondTampGrnRecords->hsn_code ;
				$items->gst_amount=$SecondTampGrnRecords->item_code ;
				$items->second_gst_figure_id=$SecondTampGrnRecords->hsn_code ; */
				$new_items->company_id=$company_id;
				$this->SecondTampGrnRecords->Companies->Items->save($new_items);
				
				$query = $this->SecondTampGrnRecords->query();
				$query->update()
					->set(['item_id' => $new_items->id])
					->where(['item_code' =>$SecondTampGrnRecords->item_code, 'company_id' => $company_id])
					->execute();
					
				$query->update()
					->set(['processed' => 'Yes'])
					->where(['SecondTampGrnRecords.id' =>$SecondTampGrnRecords->id])
					->execute();
			
			}
		}
		 exit;
		
	}
}

