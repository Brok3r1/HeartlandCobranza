<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ComplementRelations Controller
 *
 * @property \App\Model\Table\ComplementRelationsTable $ComplementRelations
 */
class ComplementRelationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ComplementRelations->find()
            ->contain(['Invoices', 'Complements']);
        $complementRelations = $this->paginate($query);

        $this->set(compact('complementRelations'));
    }

    /**
     * View method
     *
     * @param string|null $id Complement Relation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $complementRelation = $this->ComplementRelations->get($id, contain: ['Invoices', 'Complements']);
        $this->set(compact('complementRelation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $complementRelation = $this->ComplementRelations->newEmptyEntity();
        if ($this->request->is('post')) {
            $complementRelation = $this->ComplementRelations->patchEntity($complementRelation, $this->request->getData());
            if ($this->ComplementRelations->save($complementRelation)) {
                $this->Flash->success(__('The complement relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement relation could not be saved. Please, try again.'));
        }
        $invoices = $this->ComplementRelations->Invoices->find('list', limit: 200)->all();
        $complements = $this->ComplementRelations->Complements->find('list', limit: 200)->all();
        $this->set(compact('complementRelation', 'invoices', 'complements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Complement Relation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $complementRelation = $this->ComplementRelations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complementRelation = $this->ComplementRelations->patchEntity($complementRelation, $this->request->getData());
            if ($this->ComplementRelations->save($complementRelation)) {
                $this->Flash->success(__('The complement relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement relation could not be saved. Please, try again.'));
        }
        $invoices = $this->ComplementRelations->Invoices->find('list', limit: 200)->all();
        $complements = $this->ComplementRelations->Complements->find('list', limit: 200)->all();
        $this->set(compact('complementRelation', 'invoices', 'complements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Complement Relation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complementRelation = $this->ComplementRelations->get($id);
        if ($this->ComplementRelations->delete($complementRelation)) {
            $this->Flash->success(__('The complement relation has been deleted.'));
        } else {
            $this->Flash->error(__('The complement relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
