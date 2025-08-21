<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CrossAccounts Controller
 *
 * @property \App\Model\Table\CrossAccountsTable $CrossAccounts
 */
class CrossAccountsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CrossAccounts->find()
            ->contain(['CrossAccountXmls']);
        $crossAccounts = $this->paginate($query);

        $this->set(compact('crossAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cross Account id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crossAccount = $this->CrossAccounts->get($id, contain: ['CrossAccountXmls', 'CrossAccountRelations']);
        $this->set(compact('crossAccount'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crossAccount = $this->CrossAccounts->newEmptyEntity();
        if ($this->request->is('post')) {
            $crossAccount = $this->CrossAccounts->patchEntity($crossAccount, $this->request->getData());
            if ($this->CrossAccounts->save($crossAccount)) {
                $this->Flash->success(__('The cross account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account could not be saved. Please, try again.'));
        }
        $crossAccountXmls = $this->CrossAccounts->CrossAccountXmls->find('list', limit: 200)->all();
        $this->set(compact('crossAccount', 'crossAccountXmls'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cross Account id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crossAccount = $this->CrossAccounts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crossAccount = $this->CrossAccounts->patchEntity($crossAccount, $this->request->getData());
            if ($this->CrossAccounts->save($crossAccount)) {
                $this->Flash->success(__('The cross account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account could not be saved. Please, try again.'));
        }
        $crossAccountXmls = $this->CrossAccounts->CrossAccountXmls->find('list', limit: 200)->all();
        $this->set(compact('crossAccount', 'crossAccountXmls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cross Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crossAccount = $this->CrossAccounts->get($id);
        if ($this->CrossAccounts->delete($crossAccount)) {
            $this->Flash->success(__('The cross account has been deleted.'));
        } else {
            $this->Flash->error(__('The cross account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
