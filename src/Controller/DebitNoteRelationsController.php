<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DebitNoteRelations Controller
 *
 * @property \App\Model\Table\DebitNoteRelationsTable $DebitNoteRelations
 */
class DebitNoteRelationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DebitNoteRelations->find()
            ->contain(['Invoices', 'DebitNotes']);
        $debitNoteRelations = $this->paginate($query);

        $this->set(compact('debitNoteRelations'));
    }

    /**
     * View method
     *
     * @param string|null $id Debit Note Relation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $debitNoteRelation = $this->DebitNoteRelations->get($id, contain: ['Invoices', 'DebitNotes']);
        $this->set(compact('debitNoteRelation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $debitNoteRelation = $this->DebitNoteRelations->newEmptyEntity();
        if ($this->request->is('post')) {
            $debitNoteRelation = $this->DebitNoteRelations->patchEntity($debitNoteRelation, $this->request->getData());
            if ($this->DebitNoteRelations->save($debitNoteRelation)) {
                $this->Flash->success(__('The debit note relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note relation could not be saved. Please, try again.'));
        }
        $invoices = $this->DebitNoteRelations->Invoices->find('list', limit: 200)->all();
        $debitNotes = $this->DebitNoteRelations->DebitNotes->find('list', limit: 200)->all();
        $this->set(compact('debitNoteRelation', 'invoices', 'debitNotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Debit Note Relation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $debitNoteRelation = $this->DebitNoteRelations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $debitNoteRelation = $this->DebitNoteRelations->patchEntity($debitNoteRelation, $this->request->getData());
            if ($this->DebitNoteRelations->save($debitNoteRelation)) {
                $this->Flash->success(__('The debit note relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note relation could not be saved. Please, try again.'));
        }
        $invoices = $this->DebitNoteRelations->Invoices->find('list', limit: 200)->all();
        $debitNotes = $this->DebitNoteRelations->DebitNotes->find('list', limit: 200)->all();
        $this->set(compact('debitNoteRelation', 'invoices', 'debitNotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Debit Note Relation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $debitNoteRelation = $this->DebitNoteRelations->get($id);
        if ($this->DebitNoteRelations->delete($debitNoteRelation)) {
            $this->Flash->success(__('The debit note relation has been deleted.'));
        } else {
            $this->Flash->error(__('The debit note relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
