<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DebitNoteConcepts Controller
 *
 * @property \App\Model\Table\DebitNoteConceptsTable $DebitNoteConcepts
 */
class DebitNoteConceptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DebitNoteConcepts->find()
            ->contain(['DebitNotes']);
        $debitNoteConcepts = $this->paginate($query);

        $this->set(compact('debitNoteConcepts'));
    }

    /**
     * View method
     *
     * @param string|null $id Debit Note Concept id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $debitNoteConcept = $this->DebitNoteConcepts->get($id, contain: ['DebitNotes']);
        $this->set(compact('debitNoteConcept'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $debitNoteConcept = $this->DebitNoteConcepts->newEmptyEntity();
        if ($this->request->is('post')) {
            $debitNoteConcept = $this->DebitNoteConcepts->patchEntity($debitNoteConcept, $this->request->getData());
            if ($this->DebitNoteConcepts->save($debitNoteConcept)) {
                $this->Flash->success(__('The debit note concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note concept could not be saved. Please, try again.'));
        }
        $debitNotes = $this->DebitNoteConcepts->DebitNotes->find('list', limit: 200)->all();
        $this->set(compact('debitNoteConcept', 'debitNotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Debit Note Concept id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $debitNoteConcept = $this->DebitNoteConcepts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $debitNoteConcept = $this->DebitNoteConcepts->patchEntity($debitNoteConcept, $this->request->getData());
            if ($this->DebitNoteConcepts->save($debitNoteConcept)) {
                $this->Flash->success(__('The debit note concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note concept could not be saved. Please, try again.'));
        }
        $debitNotes = $this->DebitNoteConcepts->DebitNotes->find('list', limit: 200)->all();
        $this->set(compact('debitNoteConcept', 'debitNotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Debit Note Concept id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $debitNoteConcept = $this->DebitNoteConcepts->get($id);
        if ($this->DebitNoteConcepts->delete($debitNoteConcept)) {
            $this->Flash->success(__('The debit note concept has been deleted.'));
        } else {
            $this->Flash->error(__('The debit note concept could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
