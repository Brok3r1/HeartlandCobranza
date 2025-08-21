<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CreditNoteConcepts Controller
 *
 * @property \App\Model\Table\CreditNoteConceptsTable $CreditNoteConcepts
 */
class CreditNoteConceptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CreditNoteConcepts->find()
            ->contain(['CreditNotes']);
        $creditNoteConcepts = $this->paginate($query);

        $this->set(compact('creditNoteConcepts'));
    }

    /**
     * View method
     *
     * @param string|null $id Credit Note Concept id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditNoteConcept = $this->CreditNoteConcepts->get($id, contain: ['CreditNotes']);
        $this->set(compact('creditNoteConcept'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditNoteConcept = $this->CreditNoteConcepts->newEmptyEntity();
        if ($this->request->is('post')) {
            $creditNoteConcept = $this->CreditNoteConcepts->patchEntity($creditNoteConcept, $this->request->getData());
            if ($this->CreditNoteConcepts->save($creditNoteConcept)) {
                $this->Flash->success(__('The credit note concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note concept could not be saved. Please, try again.'));
        }
        $creditNotes = $this->CreditNoteConcepts->CreditNotes->find('list', limit: 200)->all();
        $this->set(compact('creditNoteConcept', 'creditNotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Credit Note Concept id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditNoteConcept = $this->CreditNoteConcepts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditNoteConcept = $this->CreditNoteConcepts->patchEntity($creditNoteConcept, $this->request->getData());
            if ($this->CreditNoteConcepts->save($creditNoteConcept)) {
                $this->Flash->success(__('The credit note concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note concept could not be saved. Please, try again.'));
        }
        $creditNotes = $this->CreditNoteConcepts->CreditNotes->find('list', limit: 200)->all();
        $this->set(compact('creditNoteConcept', 'creditNotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Credit Note Concept id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditNoteConcept = $this->CreditNoteConcepts->get($id);
        if ($this->CreditNoteConcepts->delete($creditNoteConcept)) {
            $this->Flash->success(__('The credit note concept has been deleted.'));
        } else {
            $this->Flash->error(__('The credit note concept could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
