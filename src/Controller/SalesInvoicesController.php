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
        $this->paginate = [
            'contain' => ['Companies', 'Customers', 'GstFigures']
        ];
        $salesInvoices = $this->paginate($this->SalesInvoices);

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
		$Voucher_no = $this->SalesInvoices->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
		if($Voucher_no)
		{
			$voucher_no=$Voucher_no->voucher_no+1;
		}
		else
		{
			$voucher_no=1;
		} 
		
		$Items = $this->SalesInvoices->Items->find('list', ['limit' => 200])
		->where(['company_id'=>$company_id]);
		
		
        if ($this->request->is('post')) {
            $salesInvoice = $this->SalesInvoices->patchEntity($salesInvoice, $this->request->getData());
            if ($this->SalesInvoices->save($salesInvoice)) {
                $this->Flash->success(__('The sales invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
        }
        $companies = $this->SalesInvoices->Companies->find('list', ['limit' => 200]);
        $customers = $this->SalesInvoices->Customers->find('list', ['limit' => 200])
		->where(['company_id'=>$company_id]);
        $gstFigures = $this->SalesInvoices->GstFigures->find('list', ['limit' => 200]);
        $this->set(compact('salesInvoice', 'companies', 'customers', 'gstFigures', 'voucher_no','company_id','Items'));
        $this->set('_serialize', ['salesInvoice'],'voucher_no','company_id','Items');
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
        $salesInvoice = $this->SalesInvoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesInvoice = $this->SalesInvoices->patchEntity($salesInvoice, $this->request->getData());
            if ($this->SalesInvoices->save($salesInvoice)) {
                $this->Flash->success(__('The sales invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
        }
        $companies = $this->SalesInvoices->Companies->find('list', ['limit' => 200]);
        $customers = $this->SalesInvoices->Customers->find('list', ['limit' => 200]);
        $gstFigures = $this->SalesInvoices->GstFigures->find('list', ['limit' => 200]);
        $this->set(compact('salesInvoice', 'companies', 'customers', 'gstFigures'));
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
