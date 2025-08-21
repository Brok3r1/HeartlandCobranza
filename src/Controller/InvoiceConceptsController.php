<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InvoiceConcepts Controller
 *
 * @property \App\Model\Table\InvoiceConceptsTable $InvoiceConcepts
 */
class InvoiceConceptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->InvoiceConcepts->find()
            ->contain(['Invoices']);
        $invoiceConcepts = $this->paginate($query);

        $this->set(compact('invoiceConcepts'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice Concept id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoiceConcept = $this->InvoiceConcepts->get($id, contain: ['Invoices']);
        $this->set(compact('invoiceConcept'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoiceConcept = $this->InvoiceConcepts->newEmptyEntity();
        if ($this->request->is('post')) {
            $invoiceConcept = $this->InvoiceConcepts->patchEntity($invoiceConcept, $this->request->getData());
            if ($this->InvoiceConcepts->save($invoiceConcept)) {
                $this->Flash->success(__('The invoice concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice concept could not be saved. Please, try again.'));
        }
        $invoices = $this->InvoiceConcepts->Invoices->find('list', limit: 200)->all();
        $this->set(compact('invoiceConcept', 'invoices'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice Concept id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoiceConcept = $this->InvoiceConcepts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoiceConcept = $this->InvoiceConcepts->patchEntity($invoiceConcept, $this->request->getData());
            if ($this->InvoiceConcepts->save($invoiceConcept)) {
                $this->Flash->success(__('The invoice concept has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice concept could not be saved. Please, try again.'));
        }
        $invoices = $this->InvoiceConcepts->Invoices->find('list', limit: 200)->all();
        $this->set(compact('invoiceConcept', 'invoices'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice Concept id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoiceConcept = $this->InvoiceConcepts->get($id);
        if ($this->InvoiceConcepts->delete($invoiceConcept)) {
            $this->Flash->success(__('The invoice concept has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice concept could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
