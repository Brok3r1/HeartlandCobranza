<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Administrator> $administrators
 */
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\Collection\Collection;

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

<div class="administrators index content">
    <form method="get" accept-charset="utf-8" action="<?php echo Router::url(['controller' =>'users', 'action' =>'home'], true)?>">
        <button class="btn"  style="background-color: #1e9b62" onClick="Gif();">Regresar</button>
    </form>
    <button type="button" class="btn btn-info float-right" onClick="open_add();"> Nuevo Usuario Administrador</button>
    <br>
    <div class="title">Usuarios Administradores</div>
    <br>
    <div class="table-responsive">
        <table align="center" id="Administrators" style="width:100%" class="table table-hover overflow: scroll;">
            <thead>
                <tr class="tr">
                    <th scope="col" class="head" style="width:5px">#</th>
                    <th scope="col" class="head" style="width:100px">Usuario</th>
                    <th scope="col" class="head" style="width:100px">Nombre</th>
                    <th scope="col" class="head" style="width:100px">Estatus</th>
                    <th scope="col" class="head" style="width:100px">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($administrators as $administrator): ?>
                <tr>
                    <td class="info"><?= $i ?></td>
                    <td><?= $administrator->user->username ?></td>
                    <td><?= $administrator->name.' '.$administrator->lastname ?></td>
                    <td>
                        <?php
                            if ($administrator->status==1) {
                                echo '<b style="color:#00ff00;">Activo</b><br>';
                            }
                            if ($administrator->status==0) {
                                echo '<b style="color:red;">Inactivo</b><br>';
                            }
                            echo '<b>Creado: </b>'.date("d", strtotime($administrator->created))."/".date("m", strtotime($administrator->created))."/".date("Y", strtotime($administrator->created)).'<br>';
                            echo '<b>Modificado: </b>'.date("d", strtotime($administrator->modified))."/".date("m", strtotime($administrator->modified))."/".date("Y", strtotime($administrator->modified)).'<br>';
                        ?>
                    </td>
                    <td>
                        <button class="btn btn-block"  style="background-color: #1e9b62" onClick="open_edit(<?= $administrator->id_administrator ?>);">Modificar</button>
                        <br>
                        <form method="get" accept-charset="utf-8" action="<?= Router::url(['action' =>'recoverypass', $administrator->user->id_user], true)?>" id="<?= 'Recover'.$administrator->id_administrator ?>">
                            <button type="button" class="btn btn-info btn-block" onClick="open_recu(<?= "'".'Recover'.$administrator->id_administrator."'" ?>)"><span>Recuperar contraseña</span></button>
                        </form>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="display: none;" class="modal bd-example-modal-lg" id="modal_add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 500px !important;" role="document">
        <div class="modal-content" id="DocumentPrint">
            <div class="modal-header" style="background: #0d499d; color:white;">
                <h5 class="modal-title" id="TitleModalAdd">Nuevo Usuario Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"addusr"], "name"=>"AddUSR"]) ?>
                <div class="modal-body" id="BodyModalAdd">
                    <fieldset>
                        <input type="hidden" name="credential_id" id="credential-id" value="2">
                        <?php
                            echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nombres', 'required'=>true]);
                            echo $this->Form->control('lastname', ['class'=>'form-control', 'label'=>'Apellidos', 'required'=>true]);
                            echo $this->Form->control('email', ['class'=>'form-control', 'label'=>'Correo Electrónico', 'placeholder'=>'ejemplo@mail.com', 'onfocusout'=>'return validarEmail(value);', 'required'=>true]);
                        ?>
                    </fieldset>
                </div>
                <div class="modal-footer" id="FooterModalAdd">
                    <button type="button" class="btn btn-primary" onclick="closesave()"><i class="fas fa-check"></i> Guardar</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<div style="display: none;" class="modal bd-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 500px !important;" role="document">
        <div class="modal-content" id="DocumentPrint">
            <div class="modal-header" style="background: #0d499d; color:white;">
                <h5 class="modal-title" id="TitleModalEdit">Modificar Usuario Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"editusr"], "name"=>"EditUSR"]) ?>
                <div class="modal-body" id="BodyModalEdit">
                    <fieldset>
                        <input type="hidden" name="id_administrator" id="id-administrator" value="">
                        <?php
                            $estatus = [1=>'Activo',0=>'Inactivo'];
                            echo $this->Form->control('name_e', ['class'=>'form-control', 'label'=>'Nombre', 'required'=>true]);
                            echo $this->Form->control('lastname_e', ['class'=>'form-control', 'label'=>'Apellido', 'required'=>true]);
                            echo $this->Form->control('email_e', ['class'=>'form-control', 'label'=>'Correo Electrónico', 'placeholder'=>'ejemplo@mail.com', 'required'=>true]);
                            echo $this->Form->control('status_e', ['class'=>'form-control', 'label'=>'Estatus', 'options' => $estatus, 'required'=>true]);
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
        $("#Administrators").DataTable({
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
    
    function open_add(){
        $("#modal_add").modal("show");
    };
    
    function closesave(){ 
        if(document.getElementById("name").value=="" || document.getElementById("lastname").value=="" || document.getElementById("email").value==""){
            swal({ title: "Guardado invalido", text: "<span>Debes llenar todos los con *</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
            swal({
                    title: "Agregar",
                    text: "¿Esta seguro de agregar este nuevo usuario?!",   
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#16BA0A",
                    confirmButtonText: "Agregar",
                    showLoaderOnConfirm: true,
                    closeOnConfirm: false 
                }, 
                function(){ 
                    $(".loader").show();
                    document.AddUSR.submit();
                }
            );
        }
    };
    
    function open_edit(ide){
        $.ajax({
            url: route+'Administrators/locateuser',
            type:'POST',
            data: jQuery.param({_csrfToken: csrfToken, id: ide}),
            
            success: function(result){
                var nueva =jQuery.parseJSON(result);
                nueva = nueva[0];
                var output = jQuery.parseJSON(nueva);
                //console.log(output);
                document.getElementById("id-administrator").value = output.id_administrator;
                document.getElementById("name-e").value = output.name;
                document.getElementById("lastname-e").value = output.lastname;
                document.getElementById("email-e").value = output.email;
                document.getElementById("status-e").value = output.status;
            },
            error: function(){
                alert("error");
            }
        });

        $("#modal_edit").modal("show");
    };

    function closeedit(){ 
        if(document.getElementById("name-e").value=="" || document.getElementById("lastname-e").value=="" || document.getElementById("email-e").value==""){
            console.log('falta');
            swal({ title: "Guardado invalido", text: "<span>Debes llenar todos los con *</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
            swal({
                    title: "Modificar",
                    text: "¿Esta seguro de modificar este usuario?!",   
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

    function open_recu(id){
        swal({
                title: "Recuperar Contraseña",
                text: "¿Esta seguro de recuperar la contraseña?!",   
                type: "success",   
                showCancelButton: true,   
                confirmButtonColor: "#16BA0A",   
                confirmButtonText: "Recuperar",
                showLoaderOnConfirm: true, 
                closeOnConfirm: false 
            }, 
            function(){ 
                $(".loader").show();
                document.getElementById(id).submit(); 
            }
        );
    };
</script>
