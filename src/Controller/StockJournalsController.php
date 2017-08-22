<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StockJournals Controller
 *
 * @property \App\Model\Table\StockJournalsTable $StockJournals
 *
 * @method \App\Model\Entity\StockJournal[] paginate($object = null, array $settings = [])
 */
class StockJournalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies']
        ];
        $stockJournals = $this->paginate($this->StockJournals);

        $this->set(compact('stockJournals'));
        $this->set('_serialize', ['stockJournals']);
    }

    /**
     * View method
     *
     * @param string|null $id Stock Journal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockJournal = $this->StockJournals->get($id, [
            'contain' => ['Companies', 'Inwards', 'Outwards']
        ]);

        $this->set('stockJournal', $stockJournal);
        $this->set('_serialize', ['stockJournal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('index_layout');
        $stockJournal = $this->StockJournals->newEntity();
        if ($this->request->is('post')) {
            $stockJournal = $this->StockJournals->patchEntity($stockJournal, $this->request->getData());
            if ($this->StockJournals->save($stockJournal)) {
                $this->Flash->success(__('The stock journal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock journal could not be saved. Please, try again.'));
        }
		$items     = $this->StockJournals->Inwards->Items->find('list');
        $companies = $this->StockJournals->Companies->find('list', ['limit' => 200]);
        $this->set(compact('stockJournal', 'companies','items'));
        $this->set('_serialize', ['stockJournal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stock Journal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stockJournal = $this->StockJournals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stockJournal = $this->StockJournals->patchEntity($stockJournal, $this->request->getData());
            if ($this->StockJournals->save($stockJournal)) {
                $this->Flash->success(__('The stock journal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock journal could not be saved. Please, try again.'));
        }
        $companies = $this->StockJournals->Companies->find('list', ['limit' => 200]);
        $this->set(compact('stockJournal', 'companies'));
        $this->set('_serialize', ['stockJournal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stock Journal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stockJournal = $this->StockJournals->get($id);
        if ($this->StockJournals->delete($stockJournal)) {
            $this->Flash->success(__('The stock journal has been deleted.'));
        } else {
            $this->Flash->error(__('The stock journal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
