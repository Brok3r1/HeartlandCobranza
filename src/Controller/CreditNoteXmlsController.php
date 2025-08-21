<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CreditNoteXmls Controller
 *
 * @property \App\Model\Table\CreditNoteXmlsTable $CreditNoteXmls
 */
class CreditNoteXmlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CreditNoteXmls->find();
        $creditNoteXmls = $this->paginate($query);

        $this->set(compact('creditNoteXmls'));
    }

    /**
     * View method
     *
     * @param string|null $id Credit Note Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditNoteXml = $this->CreditNoteXmls->get($id, contain: ['CreditNotes']);
        $this->set(compact('creditNoteXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditNoteXml = $this->CreditNoteXmls->newEmptyEntity();
        if ($this->request->is('post')) {
            $creditNoteXml = $this->CreditNoteXmls->patchEntity($creditNoteXml, $this->request->getData());
            if ($this->CreditNoteXmls->save($creditNoteXml)) {
                $this->Flash->success(__('The credit note xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note xml could not be saved. Please, try again.'));
        }
        $this->set(compact('creditNoteXml'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Credit Note Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditNoteXml = $this->CreditNoteXmls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditNoteXml = $this->CreditNoteXmls->patchEntity($creditNoteXml, $this->request->getData());
            if ($this->CreditNoteXmls->save($creditNoteXml)) {
                $this->Flash->success(__('The credit note xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credit note xml could not be saved. Please, try again.'));
        }
        $this->set(compact('creditNoteXml'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Credit Note Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditNoteXml = $this->CreditNoteXmls->get($id);
        if ($this->CreditNoteXmls->delete($creditNoteXml)) {
            $this->Flash->success(__('The credit note xml has been deleted.'));
        } else {
            $this->Flash->error(__('The credit note xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
