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
}
