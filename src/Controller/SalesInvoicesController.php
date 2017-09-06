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
		
		$roundOffId = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
		->where(['Ledgers.company_id'=>$company_id, 'Ledgers.round_off'=>1])->first();
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
		    $partyData = $this->SalesInvoices->AccountingEntries->query();
						$partyData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $salesInvoice->party_ledger_id,
								'debit' => $salesInvoice->amount_after_tax,
								'credit' => '',
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
						$accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $salesInvoice->sales_ledger_id,
								'debit' => '',
								'credit' => $salesInvoice->amount_before_tax,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
						$roundData = $this->SalesInvoices->AccountingEntries->query();
						if($salesInvoice->isRoundofType=='0')
						{
						$debit=0;
						$credit=$salesInvoice->round_off;
						}
						else if($salesInvoice->isRoundofType=='1')
						{
						$credit=0;
						$debit=$salesInvoice->round_off;
						}
						$roundData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $roundOffId->id,
								'debit' => $debit,
								'credit' => $credit,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
           if($salesInvoice->is_interstate=='0'){
		   for(@$i=0; $i<2; $i++){
			   foreach($salesInvoice->sales_invoice_rows as $sales_invoice_row)
			   {
			   $gstVal=$sales_invoice_row->gst_value/2;
			   if($i==0){
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'CGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   }
			   if($i==1){ 
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'SGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   }
			   $accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $ledgerId,
								'debit' => '',
								'credit' => $gstVal,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
			   }
			 }
		   }else if($salesInvoice->is_interstate=='1'){
		   foreach($salesInvoice->sales_invoice_rows as $sales_invoice_row)
			   {
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'IGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   $accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $ledgerId,
								'debit' => '',
								'credit' => $sales_invoice_row->gst_value,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
			   }
		   }
		    $this->Flash->success(__('The sales invoice has been saved.'));
            return $this->redirect(['action' => 'index']);
		 }
		 $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
		}
		$customers = $this->SalesInvoices->Customers->find()
					->where(['company_id'=>$company_id]);
		$customerOptions=[];
		foreach($customers as $customer){
			$customerOptions[]=['text' =>$customer->name, 'value' => $customer->id ,'customer_state_id'=>$customer->state_id];
		}
		
		$items = $this->SalesInvoices->SalesInvoiceRows->Items->find()
					->where(['Items.company_id'=>$company_id])
					->contain(['FirstGstFigures', 'SecondGstFigures', 'Units']);
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text'=>$item->item_code.' '.$item->name, 'value'=>$item->id, 'first_gst_figure_id'=>$item->first_gst_figure_id, 'gst_amount'=>$item->gst_amount, 'second_gst_figure_id'=>$item->second_gst_figure_id, 'FirstGstFigure'=>$item->FirstGstFigures->tax_percentage, 'SecondGstFigure'=>$item->SecondGstFigures->tax_percentage];
		}
		
	
        $partyParentGroups = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups->find()
						->where(['AccountingGroups.company_id'=>$company_id, 'AccountingGroups.sale_invoice_party'=>'1']);
		
		$partyGroups=[];
		foreach($partyParentGroups as $partyParentGroup)
		{
			$accountingGroups = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups
			->find('children', ['for' => $partyParentGroup->id])->toArray();
			$partyGroups[]=$partyParentGroup->id;
			foreach($accountingGroups as $accountingGroup){
				$partyGroups[]=$accountingGroup->id;
			}
		}
		if($partyGroups)
		{  
			$Partyledgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.accounting_group_id IN' =>$partyGroups,'Ledgers.company_id'=>$company_id])
							->contain(['Customers']);
        }
		$partyOptions=[];
		foreach($Partyledgers as $Partyledger){
			$partyOptions[]=['text' =>$Partyledger->name, 'value' => $Partyledger->id ,'party_state_id'=>@$Partyledger->customer->state_id];
		}
		
		$accountLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups->find()->where(['AccountingGroups.sale_invoice_sales_account'=>1,'AccountingGroups.company_id'=>$company_id])->first();

		$accountingGroups2 = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups
		->find('children', ['for' => $accountLedgers->id])
		->find('List')->toArray();
		$accountingGroups2[$accountLedgers->id]=$accountLedgers->name;
		ksort($accountingGroups2);
		if($accountingGroups2)
		{   
			$account_ids="";
			foreach($accountingGroups2 as $key=>$accountingGroup)
			{
				$account_ids .=$key.',';
			}
			$account_ids = explode(",",trim($account_ids,','));
			$Accountledgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find('list')->where(['Ledgers.accounting_group_id IN' =>$account_ids]);
        }
						
		$gstFigures = $this->SalesInvoices->GstFigures->find('list')
						->where(['company_id'=>$company_id]);

		$this->set(compact('salesInvoice', 'companies', 'customerOptions', 'gstFigures', 'voucher_no','company_id','itemOptions','state_id', 'partyOptions', 'Accountledgers'));
        $this->set('_serialize', ['salesInvoice']);
    }	

public function edit($id = null)
    {
	$this->viewBuilder()->layout('index_layout');
        $salesInvoice = $this->SalesInvoices->get($id, [
            'contain' => (['SalesInvoiceRows'=>['Items', 'GstFigures']])
        ]);
		
		$company_id=$this->Auth->User('session_company_id');
		$stateDetails=$this->Auth->User('session_company');
		$state_id=$stateDetails->state_id;
		$roundOffId = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
		->where(['Ledgers.company_id'=>$company_id, 'Ledgers.round_off'=>1])->first();
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
			
			if ($this->SalesInvoices->save($salesInvoice)) {
			$deleteAccountEntries = $this->SalesInvoices->AccountingEntries->query();
					$result = $deleteAccountEntries->delete()
						->where(['AccountingEntries.sales_invoice_id' => $id])
						->execute();
			
			  $partyData = $this->SalesInvoices->AccountingEntries->query();
						$partyData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $salesInvoice->party_ledger_id,
								'debit' => $salesInvoice->amount_after_tax,
								'credit' => '',
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
						$accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $salesInvoice->sales_ledger_id,
								'debit' => '',
								'credit' => $salesInvoice->amount_before_tax,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
						$roundData = $this->SalesInvoices->AccountingEntries->query();
						if($salesInvoice->isRoundofType=='0')
						{
						$debit=0;
						$credit=$salesInvoice->round_off;
						}
						else if($salesInvoice->isRoundofType=='1')
						{
						$credit=0;
						$debit=$salesInvoice->round_off;
						}
						$roundData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $roundOffId->id,
								'debit' => $debit,
								'credit' => $credit,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
           if($salesInvoice->is_interstate=='0'){
		   
		   for(@$i=0; $i<2; $i++){
			   foreach($salesInvoice->sales_invoice_rows as $sales_invoice_row)
			   {
			   $gstVal=$sales_invoice_row->gst_value/2;
			   if($i==0){
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'CGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   }
			   if($i==1){ 
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'SGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   }
			   $accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $ledgerId,
								'debit' => '',
								'credit' => $gstVal,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
			   }
			 }
		   }
		   else if($salesInvoice->is_interstate=='1'){
		   foreach($salesInvoice->sales_invoice_rows as $sales_invoice_row)
			   {
			   $gstLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.gst_figure_id' =>$sales_invoice_row->gst_figure_id,'Ledgers.company_id'=>$company_id, 'Ledgers.input_output'=>'output', 'Ledgers.gst_type'=>'IGST'])->first();
			   $ledgerId=$gstLedgers->id;
			   $accountData = $this->SalesInvoices->AccountingEntries->query();
						$accountData->insert(['ledger_id', 'debit','credit', 'transaction_date', 'company_id', 'sales_invoice_id'])
								->values([
								'ledger_id' => $ledgerId,
								'debit' => '',
								'credit' => $sales_invoice_row->gst_value,
								'transaction_date' => $salesInvoice->transaction_date,
								'company_id' => $salesInvoice->company_id,
								'sales_invoice_id' => $salesInvoice->id
								])
						->execute();
			   }
		   }
                $this->Flash->success(__('The sales invoice has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales invoice could not be saved. Please, try again.'));
        }

        $companies = $this->SalesInvoices->Companies->find('list');
        $customers = $this->SalesInvoices->Customers->find('list');
        $gstFigures = $this->SalesInvoices->GstFigures->find('list');
        $this->set(compact('salesInvoice', 'companies', 'customers', 'gstFigures'));

		
		$customers = $this->SalesInvoices->Customers->find()
					->where(['company_id'=>$company_id]);
						$customerOptions=[];
		foreach($customers as $customer){
			$customerOptions[]=['text' =>$customer->name, 'value' => $customer->id ,'customer_state_id'=>$customer->state_id];
		}
		
		$items = $this->SalesInvoices->SalesInvoiceRows->Items->find()
					->where(['Items.company_id'=>$company_id])
					->contain(['FirstGstFigures', 'SecondGstFigures', 'Units']);
		$itemOptions=[];
		foreach($items as $item){
			$itemOptions[]=['text'=>$item->item_code.' '.$item->name, 'value'=>$item->id, 'first_gst_figure_id'=>$item->first_gst_figure_id, 'gst_amount'=>$item->gst_amount, 'second_gst_figure_id'=>$item->second_gst_figure_id, 'FirstGstFigure'=>$item->FirstGstFigures->tax_percentage, 'SecondGstFigure'=>$item->SecondGstFigures->tax_percentage];
		}
		
	
        $partyParentGroups = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups->find()
						->where(['AccountingGroups.company_id'=>$company_id, 'AccountingGroups.sale_invoice_party'=>'1']);
		
		$partyGroups=[];
		foreach($partyParentGroups as $partyParentGroup)
		{
			$accountingGroups = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups
			->find('children', ['for' => $partyParentGroup->id])->toArray();
			$partyGroups[]=$partyParentGroup->id;
			foreach($accountingGroups as $accountingGroup){
				$partyGroups[]=$accountingGroup->id;
			}
		}
		if($partyGroups)
		{  
			$Partyledgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
							->where(['Ledgers.accounting_group_id IN' =>$partyGroups,'Ledgers.company_id'=>$company_id])
							->contain(['Customers']);
        }
		$partyOptions=[];
		foreach($Partyledgers as $Partyledger){
			$partyOptions[]=['text' =>$Partyledger->name, 'value' => $Partyledger->id ,'party_state_id'=>@$Partyledger->customer->state_id];
		}
		
		
		$accountLedgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups->find()->where(['AccountingGroups.sale_invoice_sales_account'=>1,'AccountingGroups.company_id'=>$company_id])->first();

		$accountingGroups2 = $this->SalesInvoices->SalesInvoiceRows->Ledgers->AccountingGroups
		->find('children', ['for' => $accountLedgers->id])
		->find('List')->toArray();
		$accountingGroups2[$accountLedgers->id]=$accountLedgers->name;
		ksort($accountingGroups2);
		if($accountingGroups2)
		{   
			$account_ids="";
			foreach($accountingGroups2 as $key=>$accountingGroup)
			{
				$account_ids .=$key.',';
			}
			$account_ids = explode(",",trim($account_ids,','));
			$Accountledgers = $this->SalesInvoices->SalesInvoiceRows->Ledgers->find('list')->where(['Ledgers.accounting_group_id IN' =>$account_ids]);
        }
        $gstFigures = $this->SalesInvoices->GstFigures->find('list')
						->where(['company_id'=>$company_id]);
        $this->set(compact('salesInvoice', 'companies', 'customerOptions', 'gstFigures', 'voucher_no','company_id','itemOptions','state_id', 'Accountledgers', 'partyOptions'));
        $this->set('_serialize', ['salesInvoice']);
    }	
	
	
public function salesInvoiceBill($id=null)
    {
	    $this->viewBuilder()->layout('');
		$company_id=$this->Auth->User('session_company_id');
		$stateDetails=$this->Auth->User('session_company');
		$state_id=$stateDetails->state_id;
		$invoiceBills= $this->SalesInvoices->find()
		->where(['SalesInvoices.id'=>$id])
		->contain(['Companies'=>['States'],'SalesInvoiceRows'=>['Items'=>['Sizes'], 'GstFigures']]);
	
	foreach($invoiceBills->toArray() as $data){
		foreach($data->sales_invoice_rows as $sales_invoice_row){
		$item_id=$sales_invoice_row->item_id;
		$accountingEntries= $this->SalesInvoices->AccountingEntries->find()
		->where(['AccountingEntries.item_id'=>$item_id, 'AccountingEntries.sales_invoice_id'=>$data->id]);
		$sales_invoice_row->accountEntries=$accountingEntries->toArray();
		
		$partyDetail= $this->SalesInvoices->SalesInvoiceRows->Ledgers->find()
		->where(['id'=>$data->party_ledger_id])->first();
		
		$partyCustomerid=$partyDetail->customer_id;
		$partyDetails= $this->SalesInvoices->Customers->find()
		->where(['Customers.id'=>$partyCustomerid])
		->contain(['States'])->first();
		$data->partyDetails=$partyDetails;
		}
		}
		
		
		$this->set(compact('invoiceBills'));
        $this->set('_serialize', ['invoiceBills']);
    }	

    /**
     * Edit method
     *
     * @param string|null $id Sales Invoice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    

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
