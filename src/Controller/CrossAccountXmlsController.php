<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CrossAccountXmls Controller
 *
 * @property \App\Model\Table\CrossAccountXmlsTable $CrossAccountXmls
 */
class CrossAccountXmlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CrossAccountXmls->find();
        $crossAccountXmls = $this->paginate($query);

        $this->set(compact('crossAccountXmls'));
    }

    /**
     * View method
     *
     * @param string|null $id Cross Account Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crossAccountXml = $this->CrossAccountXmls->get($id, contain: ['CrossAccounts']);
        $this->set(compact('crossAccountXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crossAccountXml = $this->CrossAccountXmls->newEmptyEntity();
        if ($this->request->is('post')) {
            $crossAccountXml = $this->CrossAccountXmls->patchEntity($crossAccountXml, $this->request->getData());
            if ($this->CrossAccountXmls->save($crossAccountXml)) {
                $this->Flash->success(__('The cross account xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account xml could not be saved. Please, try again.'));
        }
        $this->set(compact('crossAccountXml'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cross Account Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crossAccountXml = $this->CrossAccountXmls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crossAccountXml = $this->CrossAccountXmls->patchEntity($crossAccountXml, $this->request->getData());
            if ($this->CrossAccountXmls->save($crossAccountXml)) {
                $this->Flash->success(__('The cross account xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cross account xml could not be saved. Please, try again.'));
        }
        $this->set(compact('crossAccountXml'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cross Account Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crossAccountXml = $this->CrossAccountXmls->get($id);
        if ($this->CrossAccountXmls->delete($crossAccountXml)) {
            $this->Flash->success(__('The cross account xml has been deleted.'));
        } else {
            $this->Flash->error(__('The cross account xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
