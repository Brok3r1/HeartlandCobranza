<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ComplementXmls Controller
 *
 * @property \App\Model\Table\ComplementXmlsTable $ComplementXmls
 */
class ComplementXmlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ComplementXmls->find();
        $complementXmls = $this->paginate($query);

        $this->set(compact('complementXmls'));
    }

    /**
     * View method
     *
     * @param string|null $id Complement Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $complementXml = $this->ComplementXmls->get($id, contain: ['Complements']);
        $this->set(compact('complementXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $complementXml = $this->ComplementXmls->newEmptyEntity();
        if ($this->request->is('post')) {
            $complementXml = $this->ComplementXmls->patchEntity($complementXml, $this->request->getData());
            if ($this->ComplementXmls->save($complementXml)) {
                $this->Flash->success(__('The complement xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement xml could not be saved. Please, try again.'));
        }
        $this->set(compact('complementXml'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Complement Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $complementXml = $this->ComplementXmls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complementXml = $this->ComplementXmls->patchEntity($complementXml, $this->request->getData());
            if ($this->ComplementXmls->save($complementXml)) {
                $this->Flash->success(__('The complement xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement xml could not be saved. Please, try again.'));
        }
        $this->set(compact('complementXml'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Complement Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complementXml = $this->ComplementXmls->get($id);
        if ($this->ComplementXmls->delete($complementXml)) {
            $this->Flash->success(__('The complement xml has been deleted.'));
        } else {
            $this->Flash->error(__('The complement xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
