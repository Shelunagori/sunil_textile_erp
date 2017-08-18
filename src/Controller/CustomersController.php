<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 *
 * @method \App\Model\Entity\Customer[] paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
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
            'contain' => ['States']
        ];
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));
        $this->set('_serialize', ['customers']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => ['States', 'Ledgers']
        ]);

        $this->set('customer', $customer);
        $this->set('_serialize', ['customer']);
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
        $customer = $this->Customers->newEntity();
		$this->request->data['company_id'] = $company_id;
        if ($this->request->is('post')) {
			
			$customer = $this->Customers->patchEntity($customer, $this->request->data);
			
			if ($this->Customers->save($customer)) {
				
				//Create Ledger//
			$accounting_group = $this->Customers->Ledgers->AccountingGroups->find()->where(['company_id'=>$company_id,'customer'=>1])->first();
			
				$ledger = $this->Customers->Ledgers->newEntity();
				$ledger->name = $customer->name;
				$ledger->accounting_group_id = $accounting_group->id;
				$ledger->company_id =$company_id;
				$ledger->customer_id=$customer->id;
				
				$this->Customers->Ledgers->save($ledger);
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
			$this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $states = $this->Customers->States->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'states'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $customer = $this->Customers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
				$query = $this->Customers->Ledgers->query();
					$query->update()
						->set(['name' => $customer->name])
						->where(['customer_id' => $id])
						->execute();
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $states = $this->Customers->States->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'states'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
