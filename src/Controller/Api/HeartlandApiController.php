<?php
declare(strict_types=1);

namespace App\Controller\Api;
use Cake\View\JsonView;
use App\Controller\AppController;
use Cake\Event\EventInterface;

class HeartlandApiController extends AppController
{
    public function viewClasses(): array {
        return [JsonView::class];
    }

    public function beforeFilter(\Cake\Event\EventInterface $event){
        $this->Authentication->addUnauthenticatedActions(['index', 'heartlandpost']);
        parent::beforeFilter($event);
    }

    public function index() {
        $this->autoRender = false;
        $this->Credentials = $this->fetchTable('Credentials');

        $credentials = $this->Credentials->find('all')->all();
        echo json_encode($credentials);
    }

    public function heartlandpost() {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'put']);

        //debug($this->request->getData());
        //$body = json_decode(file_get_contents("php://input"),true); 
        //debug($body);
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            //$user = $this->Authentication->getIdentity();
            //$credential_id = $user->get('credential_id');
            $i = intval($this->request->getData('option'));
            switch ($i) {
                    case 1:
                        $this->addinvoice($this->request->getData('xml'));
                        break;
                    case 2:
                        $arreglo = ['Estatus' => 'OK', 'Mensaje' => 'En Construcción'];
                        echo json_encode($arreglo);
                        exit;
                        break;
                    case 3:
                        $arreglo = ['Estatus' => 'OK', 'Mensaje' => 'En Construcción'];
                        echo json_encode($arreglo);
                        exit;
                        break;
                    case 4:
                        $arreglo = ['Estatus' => 'OK', 'Mensaje' => 'En Construcción'];
                        echo json_encode($arreglo);
                        exit;
                        break;
                    case 5:
                        $arreglo = ['Estatus' => 'OK', 'Mensaje' => 'En Construcción'];
                        echo json_encode($arreglo);
                        exit;
                        break;
                    case 6:
                        $arreglo = ['Estatus' => 'OK', 'Mensaje' => 'En Construcción'];
                        echo json_encode($arreglo);
                        exit;
                        break;
                    default:
                        $arreglo = ['Estatus' => 'Error', 'Mensaje' => 'Opción incorrecta', 'Opciones' => [1=>'',2=>'',3=>'',4=>'',5=>'',6=>'']];
                        echo json_encode($arreglo);
                        exit;
                }
        }
        else{
            $arreglo = ['Estatus' => 'Error', 'Mensaje' => 'Usuario o contraseña incorrectas.'];
            echo json_encode($arreglo);
            exit;
        }
    }

    public function addinvoice($xml = null) {
        $this->autoRender=false;

        $arreglo = ['Estatus' => 'ok', 'Mensaje' => 'Carga Factura'];
        echo json_encode($arreglo);
        exit;
    }
}
