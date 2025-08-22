<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Event\Event;
use Cake\View\Helper;
use Cake\Core\App;
use Cake\Routing\Router;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event){
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login','logout','recovery']);
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->Users->find('all')->contain(['Credentials'])->toArray();

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, contain: ['Credentials', 'Administrators', 'SuperAdministrators']);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $credentials = $this->Users->Credentials->find('list', limit: 200)->all();
        $this->set(compact('user', 'credentials'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $credentials = $this->Users->Credentials->find('list', limit: 200)->all();
        $this->set(compact('user', 'credentials'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function locateuser(){
        $this->autoRender=false;

        $id =  $this->request->getData('id');

        $user = $this->Users->get($id);

        if($this->request->is('ajax')) {

            $json = json_encode($user);
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
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());
            //die();
            
            $id = $this->request->getData('id_user');
            $user = $this->Users->get($id);
            $user->credential_id = $this->request->getData('credential_id_e');
            $user->username = $this->request->getData('username_e');
            $save = $this->Users->save($user);

            if ($save) {
                $this->Flash->success(__('Se modifico el usuario correctamente.'));
                return $this->redirect(['action' => 'index']);
            }
            else{
                $this->Flash->error(__('No se pudo modificar el usuario. Por favor, intente de nuevo.'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function login(){
        $Credentials = $this->fetchTable('Credentials');

        $session = Router::getRequest()->getSession();

        if ($session->read('Users.id_user') !== null) {
            return $this->redirect(['action' => 'home']);
        }

        if ($this->request->is('post')) {
            $result = $this->Authentication->getResult();

            if ($result->isValid()) {
                $user = $this->Authentication->getIdentity();

                $id_user = $user->get('id_user');
                $credential_id = $user->get('credential_id');
                $status = $user->get('status');                

                $session->write('Users.id_user', $id_user);
                $session->write('Users.credential_id', $credential_id);

                // Verificar el estatus del usuario
                if ($status == 1) {
                    $credential = $Credentials->get($credential_id);
                    return $this->redirect(['action' => $credential->home]);
                } 
                else {
                    $this->Flash->error('Usuario desactivado, comunícate con el administrador.');
                    $session->destroy();

                    // Verificar si logout devuelve una URL válida
                    $logoutUrl = $this->Authentication->logout();
                    if ($logoutUrl) {
                        return $this->redirect($logoutUrl);
                    } 
                    else {
                        $this->Flash->error('Usuario desactivado, comunícate con el administrador.');
                        //Redirigir manualmente a la página de inicio de sesión si el logout falla
                        return $this->redirect(['action' => 'login']);
                    }
                }
            }
            else {
                $this->Flash->error("Usuario o contraseña incorrectas.");
            }
        }
    }

    public function logout(){
        $this->Authentication->logout();
        $this->request->getSession()->destroy();
        $this->Flash->success('Has terminado tu sesión');
        return $this->redirect(['action' => 'login']);
    }

    public function recovery(){
        $this->autoRender = false;
        $SuperAdministrators = $this->fetchTable('SuperAdministrators');
        $Administrators = $this->fetchTable('Administrators');

        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());
            //die();

            $email_recover = $this->request->getData('email_recover');
            $user_id = 0;
            $fullname = '';
            $num = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $num4 = rand(0, 9);
            $letter = chr(64 + rand(0, 26));
            $letter2 = chr(64 + rand(0, 26));
            $letter3 = chr(64 + rand(0, 26));
            $letter4 = chr(64 + rand(0, 26));
            $pwd = $letter . $num . $letter2 . $num2 . $letter3 . $num3 . $letter4 . $num4;

            $superAdministrators = $SuperAdministrators->find('all')->where(['email'=>$email_recover])->toArray();
            $administrators = $Administrators->find('all')->where(['email'=>$email_recover])->toArray();
            
            foreach ($superAdministrators as $key) {
                $user_id = $key->user_id;
                $fullname = $key->name . ' ' .$key->lastname;
            }
            foreach ($administrators as $key) {
                $user_id = $key->user_id;
                $fullname = $key->name . ' ' .$key->lastname;
            }

            if ($user_id > 0) {
                $user = $this->Users->get($user_id);
                $user->password = $pwd;
                $salvado = $this->Users->save($user);

                if($salvado){
                    $email = new Mailer();
                    $email->setTransport('dream');
                    $email->setTo($email_recover);
                    $email->setSubject('Recuperar Contraseña - Portal de Cobranza HeartlandFPG');
                    $email->setReplyTo('no_reply@heartlandfpg.dreamhosters.com');
                    $email->setFrom ('no_reply@heartlandfpg.dreamhosters.com','Portal de Cobranza HeartlandFPG');
                    $email->setEmailFormat('both');
                    $email->viewBuilder()->setTemplate('recuperarcontra')->setLayout('default');
                    $email->setViewVars(['emailset' => $email_recover, 'user' => $email_recover, 'pass' =>  $pwd, 'name_responsable' => $fullname]);
                    $salvado2 = $email->deliver();

                    if($salvado2){
                        $this->Flash->success(__('Se envio un correo electrónico correctamente a la direccion '.$email_recover.' con su nueva contraseña de acceso.'));
                        return $this->redirect(['action' => 'login']);     
                    }
                    else {
                        $this->Flash->error(__('No se pudo regenerar tu password. Por favor, intenta de nuevo.')); 
                        return $this->redirect(['action' => 'login']);
                    }
                }
                else {
                    $this->Flash->error(__('No se pudo regenerar tu password. Por favor, intenta de nuevo.'));
                    return $this->redirect(['action' => 'login']);
                }
            }
            else{
                $this->Flash->error(__('No existe el correo electrónico. Por favor, ingresa el correo electrónico correcto.'));
                return $this->redirect(['action' => 'login']);
            }
        }
    }

    public function home(){
        $Credentials = $this->fetchTable('Credentials');

        $id = Router::getRequest()->getSession()->read('Users.credential_id');
        
        if ($id == 1 || $id == 2) {
            $credential = $Credentials->get($id);
            return $this->redirect(['action' => $credential->home]);
        }
    }

    public function homesuperadmin(){
        $Credentials = $this->fetchTable('Credentials');

        $id = Router::getRequest()->getSession()->read('Users.credential_id');
        
        if ($id != 1) {
            $credential = $Credentials->get($id);
            return $this->redirect(['action' => $credential->home]);
        }
    }

    public function homeadmin(){
        $Credentials = $this->fetchTable('Credentials');

        $id = Router::getRequest()->getSession()->read('Users.credential_id');
        
        if ($id != 2) {
            $credential = $Credentials->get($id);
            return $this->redirect(['action' => $credential->home]);
        }
    }
}
