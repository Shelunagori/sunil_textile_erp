<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PurchaseVouchers Controller
 *
 * @property \App\Model\Table\PurchaseVouchersTable $PurchaseVouchers
 *
 * @method \App\Model\Entity\PurchaseVoucher[] paginate($object = null, array $settings = [])
 */
class PurchaseVouchersController extends AppController
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
        $purchaseVouchers = $this->paginate($this->PurchaseVouchers);

        $this->set(compact('purchaseVouchers'));
        $this->set('_serialize', ['purchaseVouchers']);
    }

    /**
     * View method
     *
     * @param string|null $id Purchase Voucher id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $purchaseVoucher = $this->PurchaseVouchers->get($id, [
            'contain' => ['Companies', 'PurchaseVoucherRows']
        ]);

        $this->set('purchaseVoucher', $purchaseVoucher);
        $this->set('_serialize', ['purchaseVoucher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('index_layout');
        $purchaseVoucher = $this->PurchaseVouchers->newEntity();
		$company_id=$this->Auth->User('session_company_id');
        if ($this->request->is('post')) {
            $purchaseVoucher = $this->PurchaseVouchers->patchEntity($purchaseVoucher, $this->request->getData());
			$this->request->data['supplier_invoice_date'] = date("Y-m-d",strtotime($this->request->data['supplier_invoice_date']));
			$this->request->data['transaction_date'] = date("Y-m-d",strtotime($this->request->data['transaction_date']));
            if ($this->PurchaseVouchers->save($purchaseVoucher)) {
                $this->Flash->success(__('The purchase voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase voucher could not be saved. Please, try again.'));
        }
		$Voucher_no = $this->PurchaseVouchers->find()->select(['voucher_no'])->where(['company_id'=>$company_id])->order(['voucher_no' => 'DESC'])->first();
		if($Voucher_no){
			$voucher_no=$Voucher_no->voucher_no+1;
		}else{
			$voucher_no=1;
		} 
		
		$ledgers = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->find('list');
		$accountGroupCredit = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->AccountingGroups->find()->where(['purchase_voucher_party'=>1,'company_id'=>$company_id])->first();
		
			$accountingGroups = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->AccountingGroups
								->find('children', ['for' => $accountGroupCredit->id])
								->find('List')->toArray();
			$accountingGroups[$accountGroupCredit->id]=$accountGroupCredit->name;
			ksort($accountingGroups);
		if($accountingGroups)
		{   $account_ids="";
			foreach($accountingGroups as $key=>$accountingGroup)
			{
				$account_ids .=$key.',';
			}
			$account_ids = explode(",",trim($account_ids,','));
			$Creditledgers = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->find('list')->where(['Ledgers.accounting_group_id IN' =>$account_ids]);
			
		}
		$accountGroupdebit = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->AccountingGroups->find()->where(['purchase_voucher_purchase_account'=>1,'company_id'=>$company_id])->first();
		
			$accountingGroups = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->AccountingGroups
								->find('children', ['for' => $accountGroupdebit->id])
								->find('List')->toArray();
			$accountingGroups[$accountGroupdebit->id]=$accountGroupdebit->name;
			ksort($accountingGroups);
		if($accountingGroups)
		{   $account_ids="";
			foreach($accountingGroups as $key=>$accountingGroup)
			{
				$account_ids .=$key.',';
			}
			$account_ids = explode(",",trim($account_ids,','));
			$Debitledgers = $this->PurchaseVouchers->PurchaseVoucherRows->Ledgers->find('list')->where(['Ledgers.accounting_group_id IN' =>$account_ids]);
			
		}
        $this->set(compact('purchaseVoucher','voucher_no','Creditledgers','Debitledgers','ledgers'));
        $this->set('_serialize', ['purchaseVoucher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase Voucher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $purchaseVoucher = $this->PurchaseVouchers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseVoucher = $this->PurchaseVouchers->patchEntity($purchaseVoucher, $this->request->getData());
            if ($this->PurchaseVouchers->save($purchaseVoucher)) {
                $this->Flash->success(__('The purchase voucher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase voucher could not be saved. Please, try again.'));
        }
        $this->set(compact('purchaseVoucher'));
        $this->set('_serialize', ['purchaseVoucher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase Voucher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchaseVoucher = $this->PurchaseVouchers->get($id);
        if ($this->PurchaseVouchers->delete($purchaseVoucher)) {
            $this->Flash->success(__('The purchase voucher has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase voucher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
