<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Complements Controller
 *
 * @property \App\Model\Table\ComplementsTable $Complements
 */
class ComplementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Complements->find()
            ->contain(['ComplementXmls']);
        $complements = $this->paginate($query);

        $this->set(compact('complements'));
    }

    /**
     * View method
     *
     * @param string|null $id Complement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $complement = $this->Complements->get($id, contain: ['ComplementXmls', 'ComplementRelations']);
        $this->set(compact('complement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $complement = $this->Complements->newEmptyEntity();
        if ($this->request->is('post')) {
            $complement = $this->Complements->patchEntity($complement, $this->request->getData());
            if ($this->Complements->save($complement)) {
                $this->Flash->success(__('The complement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement could not be saved. Please, try again.'));
        }
        $complementXmls = $this->Complements->ComplementXmls->find('list', limit: 200)->all();
        $this->set(compact('complement', 'complementXmls'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Complement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $complement = $this->Complements->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complement = $this->Complements->patchEntity($complement, $this->request->getData());
            if ($this->Complements->save($complement)) {
                $this->Flash->success(__('The complement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complement could not be saved. Please, try again.'));
        }
        $complementXmls = $this->Complements->ComplementXmls->find('list', limit: 200)->all();
        $this->set(compact('complement', 'complementXmls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Complement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complement = $this->Complements->get($id);
        if ($this->Complements->delete($complement)) {
            $this->Flash->success(__('The complement has been deleted.'));
        } else {
            $this->Flash->error(__('The complement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
