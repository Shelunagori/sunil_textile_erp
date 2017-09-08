<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IntraLocationStockTransferVouchers Controller
 *
 * @property \App\Model\Table\IntraLocationStockTransferVouchersTable $IntraLocationStockTransferVouchers
 *
 * @method \App\Model\Entity\IntraLocationStockTransferVoucher[] paginate($object = null, array $settings = [])
 */
class IntraLocationStockTransferVouchersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Locations']
        ];
        $intraLocationStockTransferVouchers = $this->paginate($this->IntraLocationStockTransferVouchers);

        $this->set(compact('intraLocationStockTransferVouchers'));
        $this->set('_serialize', ['intraLocationStockTransferVouchers']);
    }

    /**
     * View method
     *
     * @param string|null $id Intra Location Stock Transfer Voucher id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->get($id, [
            'contain' => ['Companies', 'Locations', 'IntraLocationStockTransferVoucherRows']
        ]);

        $this->set('intraLocationStockTransferVoucher', $intraLocationStockTransferVoucher);
        $this->set('_serialize', ['intraLocationStockTransferVoucher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->newEntity();
        if ($this->request->is('post')) {
            $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->patchEntity($intraLocationStockTransferVoucher, $this->request->getData());
            if ($this->IntraLocationStockTransferVouchers->save($intraLocationStockTransferVoucher)) {
                $this->Flash->success(__('The intra location stock transfer voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intra location stock transfer voucher could not be saved. Please, try again.'));
        }
        $companies = $this->IntraLocationStockTransferVouchers->Companies->find('list', ['limit' => 200]);
        $locations = $this->IntraLocationStockTransferVouchers->Locations->find('list', ['limit' => 200]);
        $this->set(compact('intraLocationStockTransferVoucher', 'companies', 'locations'));
        $this->set('_serialize', ['intraLocationStockTransferVoucher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Intra Location Stock Transfer Voucher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->patchEntity($intraLocationStockTransferVoucher, $this->request->getData());
            if ($this->IntraLocationStockTransferVouchers->save($intraLocationStockTransferVoucher)) {
                $this->Flash->success(__('The intra location stock transfer voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intra location stock transfer voucher could not be saved. Please, try again.'));
        }
        $companies = $this->IntraLocationStockTransferVouchers->Companies->find('list', ['limit' => 200]);
        $locations = $this->IntraLocationStockTransferVouchers->Locations->find('list', ['limit' => 200]);
        $this->set(compact('intraLocationStockTransferVoucher', 'companies', 'locations'));
        $this->set('_serialize', ['intraLocationStockTransferVoucher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Intra Location Stock Transfer Voucher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $intraLocationStockTransferVoucher = $this->IntraLocationStockTransferVouchers->get($id);
        if ($this->IntraLocationStockTransferVouchers->delete($intraLocationStockTransferVoucher)) {
            $this->Flash->success(__('The intra location stock transfer voucher has been deleted.'));
        } else {
            $this->Flash->error(__('The intra location stock transfer voucher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
