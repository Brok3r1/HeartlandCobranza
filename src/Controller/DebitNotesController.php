<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DebitNotes Controller
 *
 * @property \App\Model\Table\DebitNotesTable $DebitNotes
 */
class DebitNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DebitNotes->find()
            ->contain(['DebitNoteXmls']);
        $debitNotes = $this->paginate($query);

        $this->set(compact('debitNotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Debit Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $debitNote = $this->DebitNotes->get($id, contain: ['DebitNoteXmls', 'DebitNoteConcepts', 'DebitNoteRelations']);
        $this->set(compact('debitNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $debitNote = $this->DebitNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $debitNote = $this->DebitNotes->patchEntity($debitNote, $this->request->getData());
            if ($this->DebitNotes->save($debitNote)) {
                $this->Flash->success(__('The debit note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note could not be saved. Please, try again.'));
        }
        $debitNoteXmls = $this->DebitNotes->DebitNoteXmls->find('list', limit: 200)->all();
        $this->set(compact('debitNote', 'debitNoteXmls'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Debit Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $debitNote = $this->DebitNotes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $debitNote = $this->DebitNotes->patchEntity($debitNote, $this->request->getData());
            if ($this->DebitNotes->save($debitNote)) {
                $this->Flash->success(__('The debit note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note could not be saved. Please, try again.'));
        }
        $debitNoteXmls = $this->DebitNotes->DebitNoteXmls->find('list', limit: 200)->all();
        $this->set(compact('debitNote', 'debitNoteXmls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Debit Note id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $debitNote = $this->DebitNotes->get($id);
        if ($this->DebitNotes->delete($debitNote)) {
            $this->Flash->success(__('The debit note has been deleted.'));
        } else {
            $this->Flash->error(__('The debit note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
