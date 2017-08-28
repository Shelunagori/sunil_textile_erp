<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[] paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
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
            'contain' => ['Units', 'StockGroups']
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Units', 'StockGroups']
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('index_layout');
        $item = $this->Items->newEntity();
		$company_id=$this->Auth->User('session_company_id');
		$this->request->data['company_id'] =$company_id;
		if ($this->request->is('post')) {
			$item = $this->Items->patchEntity($item, $this->request->getData());
			//item code Increment
			$last_item_code=$this->Items->find()->select(['item_code'])->order(['item_code' => 'DESC'])->first();
			if($last_item_code){
				$item->item_code=$last_item_code->item_code+1;
			}else{
				$item->item_code=1;
			} 
			$quantity = $this->request->data['quantity'];
            if ($this->Items->save($item)) {
				$transaction_date=$this->Auth->User('session_company')->books_beginning_from;
				if($quantity>0)
				{
					$itemLedger = $this->Items->ItemLedgers->newEntity();
					$itemLedger->item_id            = $item->id;
					$itemLedger->transaction_date   = date("Y-m-d",strtotime($transaction_date));
					$itemLedger->quantity           = $this->request->data['quantity'];
					$itemLedger->rate               = $this->request->data['rate'];
					$itemLedger->amount             = $this->request->data['amount'];
					$itemLedger->status             = 'in';
					$itemLedger->is_opening_balance = 'yes';
					$itemLedger->company_id         = $company_id;
					$this->Items->ItemLedgers->save($itemLedger);
				}
				
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $units = $this->Items->Units->find('list');
        $stockGroups = $this->Items->StockGroups->find('list');
        $shades = $this->Items->Shades->find('list');
        $sizes = $this->Items->Sizes->find('list');
        $this->set(compact('item', 'units', 'stockGroups','sizes','shades'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $item = $this->Items->get($id, [
            'contain' => ['ItemLedgers' => function($q) {
				return $q->where(['ItemLedgers.is_opening_balance'=>'yes']);
			}]
        ]);
		$company_id=$this->Auth->User('session_company_id');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
				if($item->quantity>0)
				{
					$transaction_date=$this->Auth->User('session_company')->books_beginning_from;
					$query_delete = $this->Items->ItemLedgers->query();
						$query_delete->delete()
						->where(['item_id' => $id,'is_opening_balance'=>'yes','company_id'=>$company_id])
						->execute();
						
					$itemLedger = $this->Items->ItemLedgers->newEntity();
					$itemLedger->item_id            = $item->id;
					$itemLedger->transaction_date   = date("Y-m-d",strtotime($transaction_date));
					$itemLedger->quantity           = $this->request->data['quantity'];
					$itemLedger->rate               = $this->request->data['rate'];
					$itemLedger->amount             = $this->request->data['amount'];
					$itemLedger->status             = 'in';
					$itemLedger->is_opening_balance = 'yes';
					$itemLedger->company_id         = $company_id;
					$this->Items->ItemLedgers->save($itemLedger);
				}
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $units = $this->Items->Units->find('list');
        $stockGroups = $this->Items->StockGroups->find('list');
		$shades = $this->Items->Shades->find('list');
        $sizes = $this->Items->Sizes->find('list');
        $this->set(compact('item', 'units', 'stockGroups','sizes','shades'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
