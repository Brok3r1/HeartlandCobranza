<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Credentials Controller
 *
 * @property \App\Model\Table\CredentialsTable $Credentials
 */
class CredentialsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $credentials = $this->Credentials->find('all')->toArray();

        $this->set(compact('credentials'));
    }

    /**
     * View method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $credential = $this->Credentials->get($id, contain: ['Users']);
        $this->set(compact('credential'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $credential = $this->Credentials->newEmptyEntity();
        if ($this->request->is('post')) {
            $credential = $this->Credentials->patchEntity($credential, $this->request->getData());
            if ($this->Credentials->save($credential)) {
                $this->Flash->success(__('The credential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credential could not be saved. Please, try again.'));
        }
        $this->set(compact('credential'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $credential = $this->Credentials->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $credential = $this->Credentials->patchEntity($credential, $this->request->getData());
            if ($this->Credentials->save($credential)) {
                $this->Flash->success(__('The credential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credential could not be saved. Please, try again.'));
        }
        $this->set(compact('credential'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $credential = $this->Credentials->get($id);
        if ($this->Credentials->delete($credential)) {
            $this->Flash->success(__('The credential has been deleted.'));
        } else {
            $this->Flash->error(__('The credential could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addcredential(){
        $this->autoRender = false;
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());
            //die();
            $credential = $this->Credentials->newEmptyEntity();
            $credential->name = $this->request->getData('name');
            $credential->home = $this->request->getData('home');
            $credential->menu = $this->request->getData('menu');
            $credential->status = 1;
            $save = $this->Credentials->save($credential);
            
            if ($save) {
                $this->Flash->success(__('Se agrego un nuevo registro.'));

                return $this->redirect(['action' => 'index']);
            }
            else {
                $this->Flash->error(__('No se pudo agregar el registro. Por favor, intente de nuevo.'));

                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function locatecredential(){
        $this->autoRender=false;

        $id =  $this->request->getData('id');

        $credential = $this->Credentials->get($id);
           
        if($this->request->is('ajax')) {

            $json = json_encode($credential);
            if($json ){
                echo json_encode(array($json));
                exit;
            }
            else{ 
                echo json_last_error_msg();
            }
        }
    }

    public function editcredential(){
        $this->autoRender = false;
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());
            //die();
            $id = $this->request->getData('id_credential');

            $credential = $this->Credentials->get($id);
            $credential->name = $this->request->getData('name_e');
            $credential->home = $this->request->getData('home_e');
            $credential->menu = $this->request->getData('menu_e');
            $credential->status = $this->request->getData('status_e');
            $save = $this->Credentials->save($credential);
            
            if ($save) {
                $this->Flash->success(__('Se modifico el registro.'));

                return $this->redirect(['action' => 'index']);
            }
            else {
                $this->Flash->error(__('No se pudo modificar el registro. Por favor, intente de nuevo.'));

                return $this->redirect(['action' => 'index']);
            }
        }
    }
}
