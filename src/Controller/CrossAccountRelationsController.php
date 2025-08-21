<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CrossAccountRelations Controller
 *
 * @property \App\Model\Table\CrossAccountRelationsTable $CrossAccountRelations
 */
class CrossAccountRelationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CrossAccountRelations->find()
            ->contain(['Invoices', 'CrossAccounts']);
        $crossAccountRelations = $this->paginate($query);

        $this->set(compact('crossAccountRelations'));
    }

    /**
     * View method
     *
     * @param string|null $id Cross Account Relation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crossAccountRelation = $this->CrossAccountRelations->get($id, contain: ['Invoices', 'CrossAccounts']);
        $this->set(compact('crossAccountRelation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crossAccountRelation = $this->CrossAccountRelations->newEmptyEntity();
        if ($this->request->is('post')) {
            $crossAccountRelation = $this->CrossAccountRelations->patchEntity($crossAccountRelation, $this->request->getData());
            if ($this->CrossAccountRelations->save($crossAccountRelation)) {
                $this->Flash->success(__('The cross account relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account relation could not be saved. Please, try again.'));
        }
        $invoices = $this->CrossAccountRelations->Invoices->find('list', limit: 200)->all();
        $crossAccounts = $this->CrossAccountRelations->CrossAccounts->find('list', limit: 200)->all();
        $this->set(compact('crossAccountRelation', 'invoices', 'crossAccounts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cross Account Relation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crossAccountRelation = $this->CrossAccountRelations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crossAccountRelation = $this->CrossAccountRelations->patchEntity($crossAccountRelation, $this->request->getData());
            if ($this->CrossAccountRelations->save($crossAccountRelation)) {
                $this->Flash->success(__('The cross account relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account relation could not be saved. Please, try again.'));
        }
        $invoices = $this->CrossAccountRelations->Invoices->find('list', limit: 200)->all();
        $crossAccounts = $this->CrossAccountRelations->CrossAccounts->find('list', limit: 200)->all();
        $this->set(compact('crossAccountRelation', 'invoices', 'crossAccounts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cross Account Relation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crossAccountRelation = $this->CrossAccountRelations->get($id);
        if ($this->CrossAccountRelations->delete($crossAccountRelation)) {
            $this->Flash->success(__('The cross account relation has been deleted.'));
        } else {
            $this->Flash->error(__('The cross account relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
