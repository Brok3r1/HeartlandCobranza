<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\Collection\Collection;
$Credentials = TableRegistry::getTableLocator()->get('Credentials');

$credentials = (new Collection($Credentials->find('all')->select(['id'=>'id_credential','name' => 'name'])->where(['status' => 1])))->combine('id', 'name')->toArray();

$route = \Cake\Routing\Router::url('/');
echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken'));
?>

<style type="text/css">
    .title{
        font-family: "Tw Cen MT";
        font-size: 5vh ; 
        color: #0061A3; 
    }
    .head{
        color: #2e7dea;
        background: #ffff;
        text-align: center;
    }
    .info{
        text-align: center;
    }
    .txt{
        font-size: 2vh;
    }   
</style>

<div class="users index content">
    <form method="get" accept-charset="utf-8" action="<?php echo Router::url(['controller' =>'users', 'action' =>'home'], true)?>">
        <button class="btn"  style="background-color: #1e9b62" onClick="Gif();">Regresar</button>
    </form>
    <br>
    <div class="title">Usuarios</div>
    <br>
    <div class="table-responsive">
        <table align="center" id="Users" style="width:100%" class="table table-hover overflow: scroll;">
            <thead>
                <tr class="tr">
                    <th scope="col" class="head" style="width:5px">#</th>
                    <th scope="col" class="head" style="width:100px">Usuario</th>
                    <th scope="col" class="head" style="width:100px">Credencial</th>
                    <th scope="col" class="head" style="width:100px">Estatus</th>
                    <th scope="col" class="head" style="width:100px">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($users as $user): ?>
                <tr>
                    <td class="info"><?= $i ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->credential->name ?></td>
                    <td>
                        <?php
                            if ($user->status==1) {
                                echo '<b style="color:#00ff00;">Activo</b><br>';
                            }
                            if ($user->status==0) {
                                echo '<b style="color:red;">Inactivo</b><br>';
                            }
                            echo '<b>Creado: </b>'.date("d", strtotime($user->created))."/".date("m", strtotime($user->created))."/".date("Y", strtotime($user->created)).'<br>';
                            echo '<b>Modificado: </b>'.date("d", strtotime($user->modified))."/".date("m", strtotime($user->modified))."/".date("Y", strtotime($user->modified)).'<br>';
                        ?>
                    </td>
                    <td>
                        <button class="btn btn-block"  style="background-color: #1e9b62" onClick="open_edit(<?= $user->id_user ?>);">Modificar</button>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="display: none;" class="modal bd-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 500px !important;" role="document">
        <div class="modal-content" id="DocumentPrint">
            <div class="modal-header" style="background: #0d499d; color:white;">
                <h5 class="modal-title" id="TitleModalEdit">Modificar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"editusr"], "name"=>"EditUSR"]) ?>
                <div class="modal-body" id="BodyModalEdit">
                    <fieldset>
                        <input type="hidden" name="id_user" id="id-user" value="">
                        <?php
                            echo $this->Form->control('username_e', ['class'=>'form-control', 'label'=>'Usuario', 'required'=>true]);
                            echo $this->Form->control('credential_id_e', ['class'=>'form-control', 'label'=>'Credencial', 'options' => $credentials, 'empty' => 'Seleccione la credencial...', 'required'=>true]);
                        ?>
                    </fieldset>
                </div>
                <div class="modal-footer" id="FooterModalEdit">
                    <button type="button" class="btn btn-primary" onclick="closeedit()"><i class="fas fa-check"></i> Modificar</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    var route = '<?= $route ?>';
    var csrfToken = $('meta[name="csrfToken"]').attr('content');
    
    $(document).ready(function() {
        $("#Users").DataTable({
            dom: "Bfrtip",
            lengthMenu: [
                [ 50, 25, 10, -1 ],
                [ "50 columnas", "25 columnas", "10 columnas", "Mostrar todo"]
            ],
            order: [[ 0, "asc" ]],
            buttons: [
                "pageLength",
                "excelHtml5",
                "csvHtml5",
                "pdfHtml5"
            ]
        });
    });
    
    function open_edit(ide){
        $.ajax({
            url: route+'Users/locateuser',
            type:'POST',
            data: jQuery.param({_csrfToken: csrfToken, id: ide}),
            
            success: function(result){
                var nueva =jQuery.parseJSON(result);
                nueva = nueva[0];
                var output = jQuery.parseJSON(nueva);
                //console.log(output);
                document.getElementById("id-user").value = output.id_user;
                document.getElementById("username-e").value = output.username;
                document.getElementById("credential-id-e").value = output.credential_id;
            },
            error: function(){
                alert("error");
            }
        });

        $("#modal_edit").modal("show");
    };

    function closeedit(){ 
        if(document.getElementById("username-e").value=="" || document.getElementById("credential-id-e").value==""){
            swal({ title: "Guardado invalido", text: "<span>Debes llenar todos los con *</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
            swal({
                    title: "Modificar",
                    text: "¿Esta seguro de Modificar este usuario?!",   
                    type: "success",   
                    showCancelButton: true,   
                    confirmButtonColor: "#16BA0A",   
                    confirmButtonText: "Modificar",
                    showLoaderOnConfirm: true, 
                    closeOnConfirm: false 
                }, 
                function(){ 
                    $(".loader").show();
                    document.EditUSR.submit();
                }
            );
        }
    };
</script>
