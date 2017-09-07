<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CreditNotes Controller
 *
 * @property \App\Model\Table\CreditNotesTable $CreditNotes
 *
 * @method \App\Model\Entity\CreditNote[] paginate($object = null, array $settings = [])
 */
class CreditNotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'PartyLedgers', 'Customers', 'SalesLedgers']
        ];
        $creditNotes = $this->paginate($this->CreditNotes);

        $this->set(compact('creditNotes'));
        $this->set('_serialize', ['creditNotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Credit Note id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditNote = $this->CreditNotes->get($id, [
            'contain' => ['Companies', 'PartyLedgers', 'Customers', 'SalesLedgers', 'CreditNoteRows']
        ]);

        $this->set('creditNote', $creditNote);
        $this->set('_serialize', ['creditNote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditNote = $this->CreditNotes->newEntity();
        if ($this->request->is('post')) {
            $creditNote = $this->CreditNotes->patchEntity($creditNote, $this->request->getData());
            if ($this->CreditNotes->save($creditNote)) {
                $this->Flash->success(__('The credit note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note could not be saved. Please, try again.'));
        }
        $companies = $this->CreditNotes->Companies->find('list', ['limit' => 200]);
        $partyLedgers = $this->CreditNotes->PartyLedgers->find('list', ['limit' => 200]);
        $customers = $this->CreditNotes->Customers->find('list', ['limit' => 200]);
        $salesLedgers = $this->CreditNotes->SalesLedgers->find('list', ['limit' => 200]);
        $this->set(compact('creditNote', 'companies', 'partyLedgers', 'customers', 'salesLedgers'));
        $this->set('_serialize', ['creditNote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Credit Note id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditNote = $this->CreditNotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditNote = $this->CreditNotes->patchEntity($creditNote, $this->request->getData());
            if ($this->CreditNotes->save($creditNote)) {
                $this->Flash->success(__('The credit note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note could not be saved. Please, try again.'));
        }
        $companies = $this->CreditNotes->Companies->find('list', ['limit' => 200]);
        $partyLedgers = $this->CreditNotes->PartyLedgers->find('list', ['limit' => 200]);
        $customers = $this->CreditNotes->Customers->find('list', ['limit' => 200]);
        $salesLedgers = $this->CreditNotes->SalesLedgers->find('list', ['limit' => 200]);
        $this->set(compact('creditNote', 'companies', 'partyLedgers', 'customers', 'salesLedgers'));
        $this->set('_serialize', ['creditNote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Credit Note id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditNote = $this->CreditNotes->get($id);
        if ($this->CreditNotes->delete($creditNote)) {
            $this->Flash->success(__('The credit note has been deleted.'));
        } else {
            $this->Flash->error(__('The credit note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
