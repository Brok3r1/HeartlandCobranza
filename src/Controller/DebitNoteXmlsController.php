<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DebitNoteXmls Controller
 *
 * @property \App\Model\Table\DebitNoteXmlsTable $DebitNoteXmls
 */
class DebitNoteXmlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DebitNoteXmls->find();
        $debitNoteXmls = $this->paginate($query);

        $this->set(compact('debitNoteXmls'));
    }

    /**
     * View method
     *
     * @param string|null $id Debit Note Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $debitNoteXml = $this->DebitNoteXmls->get($id, contain: ['DebitNotes']);
        $this->set(compact('debitNoteXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $debitNoteXml = $this->DebitNoteXmls->newEmptyEntity();
        if ($this->request->is('post')) {
            $debitNoteXml = $this->DebitNoteXmls->patchEntity($debitNoteXml, $this->request->getData());
            if ($this->DebitNoteXmls->save($debitNoteXml)) {
                $this->Flash->success(__('The debit note xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note xml could not be saved. Please, try again.'));
        }
        $this->set(compact('debitNoteXml'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Debit Note Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $debitNoteXml = $this->DebitNoteXmls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $debitNoteXml = $this->DebitNoteXmls->patchEntity($debitNoteXml, $this->request->getData());
            if ($this->DebitNoteXmls->save($debitNoteXml)) {
                $this->Flash->success(__('The debit note xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The debit note xml could not be saved. Please, try again.'));
        }
        $this->set(compact('debitNoteXml'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Debit Note Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $debitNoteXml = $this->DebitNoteXmls->get($id);
        if ($this->DebitNoteXmls->delete($debitNoteXml)) {
            $this->Flash->success(__('The debit note xml has been deleted.'));
        } else {
            $this->Flash->error(__('The debit note xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
