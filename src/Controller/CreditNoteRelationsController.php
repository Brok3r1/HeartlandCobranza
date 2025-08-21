<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CreditNoteRelations Controller
 *
 * @property \App\Model\Table\CreditNoteRelationsTable $CreditNoteRelations
 */
class CreditNoteRelationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CreditNoteRelations->find()
            ->contain(['Invoices', 'CreditNotes']);
        $creditNoteRelations = $this->paginate($query);

        $this->set(compact('creditNoteRelations'));
    }

    /**
     * View method
     *
     * @param string|null $id Credit Note Relation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditNoteRelation = $this->CreditNoteRelations->get($id, contain: ['Invoices', 'CreditNotes']);
        $this->set(compact('creditNoteRelation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditNoteRelation = $this->CreditNoteRelations->newEmptyEntity();
        if ($this->request->is('post')) {
            $creditNoteRelation = $this->CreditNoteRelations->patchEntity($creditNoteRelation, $this->request->getData());
            if ($this->CreditNoteRelations->save($creditNoteRelation)) {
                $this->Flash->success(__('The credit note relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note relation could not be saved. Please, try again.'));
        }
        $invoices = $this->CreditNoteRelations->Invoices->find('list', limit: 200)->all();
        $creditNotes = $this->CreditNoteRelations->CreditNotes->find('list', limit: 200)->all();
        $this->set(compact('creditNoteRelation', 'invoices', 'creditNotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Credit Note Relation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditNoteRelation = $this->CreditNoteRelations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditNoteRelation = $this->CreditNoteRelations->patchEntity($creditNoteRelation, $this->request->getData());
            if ($this->CreditNoteRelations->save($creditNoteRelation)) {
                $this->Flash->success(__('The credit note relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note relation could not be saved. Please, try again.'));
        }
        $invoices = $this->CreditNoteRelations->Invoices->find('list', limit: 200)->all();
        $creditNotes = $this->CreditNoteRelations->CreditNotes->find('list', limit: 200)->all();
        $this->set(compact('creditNoteRelation', 'invoices', 'creditNotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Credit Note Relation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditNoteRelation = $this->CreditNoteRelations->get($id);
        if ($this->CreditNoteRelations->delete($creditNoteRelation)) {
            $this->Flash->success(__('The credit note relation has been deleted.'));
        } else {
            $this->Flash->error(__('The credit note relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
