<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;
use Cake\Routing\Router;

/**
 * SuperAdministrators Controller
 *
 * @property \App\Model\Table\SuperAdministratorsTable $SuperAdministrators
 */
class SuperAdministratorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $superAdministrators = $this->SuperAdministrators->find('all')->contain(['Users'])->where(['Users.credential_id'=>1])->toArray();

        $this->set(compact('superAdministrators'));
    }

    /**
     * View method
     *
     * @param string|null $id Super Administrator id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superAdministrator = $this->SuperAdministrators->get($id, contain: ['Users']);
        $this->set(compact('superAdministrator'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superAdministrator = $this->SuperAdministrators->newEmptyEntity();
        if ($this->request->is('post')) {
            $superAdministrator = $this->SuperAdministrators->patchEntity($superAdministrator, $this->request->getData());
            if ($this->SuperAdministrators->save($superAdministrator)) {
                $this->Flash->success(__('The super administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super administrator could not be saved. Please, try again.'));
        }
        $users = $this->SuperAdministrators->Users->find('list', limit: 200)->all();
        $this->set(compact('superAdministrator', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Super Administrator id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superAdministrator = $this->SuperAdministrators->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superAdministrator = $this->SuperAdministrators->patchEntity($superAdministrator, $this->request->getData());
            if ($this->SuperAdministrators->save($superAdministrator)) {
                $this->Flash->success(__('The super administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super administrator could not be saved. Please, try again.'));
        }
        $users = $this->SuperAdministrators->Users->find('list', limit: 200)->all();
        $this->set(compact('superAdministrator', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Super Administrator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superAdministrator = $this->SuperAdministrators->get($id);
        if ($this->SuperAdministrators->delete($superAdministrator)) {
            $this->Flash->success(__('The super administrator has been deleted.'));
        } else {
            $this->Flash->error(__('The super administrator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addusr(){
        $this->autoRender = false;
        $this->Users = $this->fetchTable('Users');
        
        if ($this->request->is('post')) {
            //debug($this->request->getData());
            //die();
            $email =  $this->request->getData('email');

            $administrators = $this->SuperAdministrators->find('all')->where(['email' => $email])->toArray();
            $users = $this->Users->find('all')->where(['username' => $email])->toArray();

            if(empty($administrators) && empty($users)){
               
                $num = rand(0,9);
                $num2 = rand(0,9);
                $num3 = rand(0,9);
                $num4 = rand(0,9);
                $letter = chr(64+rand(0,26));
                $letter2 = chr(64+rand(0,26));
                $letter3 = chr(64+rand(0,26));
                $letter4 = chr(64+rand(0,26));
                $pwd = $letter.$num.$letter2.$num2.$letter3.$num3.$letter4.$num4;

                $user = $this->Users->newEmptyEntity();
                $user->credential_id = $this->request->getData('credential_id');
                $user->username = $this->request->getData('email');
                $user->password = $pwd;
                $user->status = 1;
                $user->status_recover = 0;
                $save = $this->Users->save($user);

                $administrator = $this->SuperAdministrators->newEmptyEntity();
                $administrator->user_id = $save->id_user;
                $administrator->name = $this->request->getData('name');
                $administrator->lastname = $this->request->getData('lastname');
                $administrator->email = $this->request->getData('email');
                $administrator->status = 1; 
                $save2 = $this->SuperAdministrators->save($administrator);

                $fullname =$administrator->name .' '.$administrator->lastname;
                if ($save && $save2) {

                    $correo = $this->request->getData('email');
                    $email = new Mailer();
                    $email->setTransport('dream');
                    $email->setTo('arturo.avila@brok3r.com.mx');
                    //$email->setTo($correo);
                    $email->setSubject('Alta Usuario - Portal de Cobranza HeartlandFPG');
                    $email->setReplyTo('no_reply@heartlandfpg.dreamhosters.com');
                    $email->setFrom ('no_reply@heartlandfpg.dreamhosters.com','Portal de Cobranza HeartlandFPG');
                    $email->setEmailFormat('both');
                    $email->viewBuilder()->setTemplate('altausuarios')->setLayout('default');
                    $email->setViewVars(['emailset' => $correo, 'user' => $correo, 'pass' =>  $pwd, 'name_responsable' => $fullname]);
                    $salvado2 = $email->deliver();

                    $this->Flash->success(__('Se agrego un nuevo usuario.'));

                    if($salvado2){
                        $this->Flash->success(__('Se envio un correo correctamente a la direccion '.$correo.' con su nueva contraseña de acceso.'));
                        return $this->redirect(['action' => 'index']);
                    }
                    else{
                        $this->Flash->error(__('No se pudo enviar un correo correctamente a la direccion '.$correo.' con su nueva contraseña de acceso. Por favor, Recuperar contraseña.'));
                        return $this->redirect(['action' => 'index']);
                    }
                }
                else{
                    $this->Flash->error(__('No se pudo agregar un usuario. Por favor, intente de nuevo.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            else{
                $this->Flash->error(__('El correo '.$this->request->getData('email').' Ya se encuentra registrado'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function locateuser(){
        $this->autoRender=false;

        $id =  $this->request->getData('id');

        $administrator = $this->SuperAdministrators->get($id, contain: ['Users']);

        if($this->request->is('ajax')) {

            $json = json_encode($administrator);
            if($json ){
                echo json_encode(array($json));
                exit;
            }
            else{ 
                echo json_last_error_msg();
            }
        }
    }

    public function editusr(){
        $this->autoRender = false;
        $this->Users = $this->fetchTable('Users');

        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());
            //die();

            $id = $this->request->getData('id_super_administrator');
            $administrator = $this->SuperAdministrators->get($id);
            $administrator->name = $this->request->getData('name_e');
            $administrator->lastname = $this->request->getData('lastname_e');
            $administrator->email = $this->request->getData('email_e');
            $administrator->status = $this->request->getData('status_e');
            $save2 = $this->SuperAdministrators->save($administrator);

            $user = $this->Users->get($administrator->user_id);
            $user->username = $this->request->getData('email_e');
            $user->status = $this->request->getData('status_e');
            $save = $this->Users->save($user);

            if ($save2 && $save) {
                $this->Flash->success(__('Se modifico el usuario correctamente.'));
                return $this->redirect(['action' => 'index']);
            }
            else{
                $this->Flash->error(__('No se pudo modificar el usuario. Por favor, intente de nuevo.'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function recoverypass($id=null){
        $this->autoRender=false;
        $this->Users = $this->fetchTable('Users');
        
        $num = rand(0,9);
        $num2 = rand(0,9);
        $num3 = rand(0,9);
        $num4 = rand(0,9);
        $letter = chr(64+rand(0,26));
        $letter2 = chr(64+rand(0,26));
        $letter3 = chr(64+rand(0,26));
        $letter4 = chr(64+rand(0,26));
        $pwd = $letter.$num.$letter2.$num2.$letter3.$num3.$letter4.$num4;
        
        $user = $this->Users->get($id);
        $user->password = $pwd;
        $salvado = $this->Users->save($user);
        
        $correo = $user->username;
        $administrators = $this->SuperAdministrators->find("all")->where(["user_id"=>$id])->toArray();
        $fullname = $administrators[0]->name . ' ' .$administrators[0]->lastname;
        
        if($salvado){
            $email = new Mailer();
            $email->setTransport('dream');
            $email->setTo('arturo.avila@brok3r.com.mx');
            //$email->setTo($correo);
            $email->setSubject('Recuperar Contraseña - Portal de Cobranza HeartlandFPG');
            $email->setReplyTo('no_reply@heartlandfpg.dreamhosters.com');
            $email->setFrom ('no_reply@heartlandfpg.dreamhosters.com','Portal de Cobranza HeartlandFPG');
            $email->setEmailFormat('both');
            $email->viewBuilder()->setTemplate('recuperarcontra')->setLayout('default');
            $email->setViewVars(['emailset' => $correo, 'user' => $correo, 'pass' =>  $pwd, 'name_responsable' => $fullname]);
            $salvado2 = $email->deliver();

            if($salvado2){
                $this->Flash->success(__('Se envio un correo correctamente a la direccion '.$correo.' con su nueva contraseña de acceso.'));
                return $this->redirect(['action' => 'index']);     
            }
            else{
                $this->Flash->error(__('No se pudo regenerar tu password. Por favor, intenta de nuevo.')); 
                return $this->redirect(['action' => 'index']);
            }
        }
        else{
            $this->Flash->error(__('No se pudo regenerar tu password. Por favor, intenta de nuevo.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
