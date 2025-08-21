<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InvoiceXmls Controller
 *
 * @property \App\Model\Table\InvoiceXmlsTable $InvoiceXmls
 */
class InvoiceXmlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->InvoiceXmls->find();
        $invoiceXmls = $this->paginate($query);

        $this->set(compact('invoiceXmls'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoiceXml = $this->InvoiceXmls->get($id, contain: ['Invoices']);
        $this->set(compact('invoiceXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoiceXml = $this->InvoiceXmls->newEmptyEntity();
        if ($this->request->is('post')) {
            $invoiceXml = $this->InvoiceXmls->patchEntity($invoiceXml, $this->request->getData());
            if ($this->InvoiceXmls->save($invoiceXml)) {
                $this->Flash->success(__('The invoice xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice xml could not be saved. Please, try again.'));
        }
        $this->set(compact('invoiceXml'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoiceXml = $this->InvoiceXmls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoiceXml = $this->InvoiceXmls->patchEntity($invoiceXml, $this->request->getData());
            if ($this->InvoiceXmls->save($invoiceXml)) {
                $this->Flash->success(__('The invoice xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice xml could not be saved. Please, try again.'));
        }
        $this->set(compact('invoiceXml'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoiceXml = $this->InvoiceXmls->get($id);
        if ($this->InvoiceXmls->delete($invoiceXml)) {
            $this->Flash->success(__('The invoice xml has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
