<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Credential> $credentials
 */
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

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

<div class="credentials index content">
    <form method="get" accept-charset="utf-8" action="<?php echo Router::url(['controller' =>'users', 'action' =>'home'], true)?>">
        <button class="btn"  style="background-color: #1e9b62" onClick="Gif();">Regresar</button>
    </form>
    <button type="button" class="btn btn-info float-right" onClick="open_add();"> Nueva Credencial</button>
    <br>
    <div class="title">Catálogo Credenciales</div>
    <br>
    <div class="table-responsive">
        <table align="center" id="Credentials" style="width:100%" class="table table-hover overflow: scroll;">
            <thead>
                 <tr class="tr">
                    <th scope="col" class="head" style="width:5px">#</th>
                    <th scope="col" class="head" style="width:100px">Nombre</th>
                    <th scope="col" class="head" style="width:100px">Estatus</th>
                    <th scope="col" class="head" style="width:100px">Acción</th>
                </tr>
            </thead>
            <tbody>
                 <?php $i=1; foreach ($credentials as $credential): ?>
                 <tr>
                 <td class="info"><?= $i ?></td>
                    <td><?= $credential->name ?></td>
                    <td>
                        <?php
                            if ($credential->status==1) {
                                echo '<b style="color:#00ff00;">Activo</b><br>';
                            }
                            else{
                                echo '<b style="color:red;">Inactivo</b><br>';
                            }

                            echo '<b>Creado: </b>'.date("d", strtotime($credential->created))."/".date("m", strtotime($credential->created))."/".date("Y", strtotime($credential->created)).'<br>';
                            echo '<b>Modificado: </b>'.date("d", strtotime($credential->modified))."/".date("m", strtotime($credential->modified))."/".date("Y", strtotime($credential->modified)).'<br>';
                        ?>
                    </td>
                    <td>
                        <button class="btn btn-block"  style="background-color: #1e9b62" onClick="open_edit(<?= $credential->id_credential ?>);">Modificar</button>
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
                <h5 class="modal-title" id="TitleModalAdd">Nueva Credencial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"addcredential"], "name"=>"AddCredential"]) ?>
                <div class="modal-body" id="BodyModalAdd">
                    <fieldset>
                        <?php
                            echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nombre', 'onfocusout'=>'this.value=this.value.toUpperCase();', 'required'=>true]);
                            echo $this->Form->control('home', ['class'=>'form-control', 'label'=>'Home', 'required'=>true]);
                            echo $this->Form->control('menu', ['class'=>'form-control', 'label'=>'Menu', 'required'=>true]);
                            
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
                <h5 class="modal-title" id="TitleModalEdit">Modificar Credencial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"editcredential"], "name"=>"EditCredential"]) ?>
                <div class="modal-body" id="BodyModalEdit">
                    <fieldset>
                        <input type="hidden" name="id_credential" id="id-credential" value="">
                        <?php
                            $estatus = [1=>'Activo',0=>'Inactivo'];
                            echo $this->Form->control('name_e', ['class'=>'form-control', 'label'=>'Nombre', 'onfocusout'=>'this.value=this.value.toUpperCase();', 'required'=>true]);
                            echo $this->Form->control('home_e', ['class'=>'form-control', 'label'=>'Home', 'required'=>true]);
                            echo $this->Form->control('menu_e', ['class'=>'form-control', 'label'=>'Menu', 'required'=>true]);
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
        $("#Credentials").DataTable({
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
        if(document.getElementById("name").value==""){
            swal({ title: "Guardado invalido", text: "<span>Debes llenar todos los con *</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
            swal({
                    title: "Agregar",
                    text: "¿Esta seguro de agregar este nuevo registro?!",   
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#16BA0A",
                    confirmButtonText: "Agregar",
                    showLoaderOnConfirm: true,
                    closeOnConfirm: false 
                }, 
                function(){ 
                    $(".loader").show();
                    document.AddCredential.submit();
                }
            );
        }
    };
    
    function open_edit(ide){
        $.ajax({
            url: route+'Credentials/locatecredential',
            type:'POST',
            data: jQuery.param({_csrfToken: csrfToken, id: ide}),
            
            success: function(result){
                var nueva =jQuery.parseJSON(result);
                nueva = nueva[0];
                var output = jQuery.parseJSON(nueva);
                //console.log(output);
                document.getElementById("id-credential").value = output.id_credential;
                document.getElementById("name-e").value = output.name;
                document.getElementById("home-e").value = output.home;
                document.getElementById("menu-e").value = output.menu;
                document.getElementById("status-e").value = output.status;
            },
            error: function(){
                alert("error");
            }
        });

        $("#modal_edit").modal("show");
    };

    function closeedit(){ 
        if(document.getElementById("name-e").value==""){
            console.log('falta');
            swal({ title: "Guardado invalido", text: "<span>Debes llenar todos los con *</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
            swal({
                    title: "Modificar",
                    text: "¿Esta seguro de modificar este registro?!",   
                    type: "success",   
                    showCancelButton: true,   
                    confirmButtonColor: "#16BA0A",   
                    confirmButtonText: "Modificar",
                    showLoaderOnConfirm: true, 
                    closeOnConfirm: false 
                }, 
                function(){ 
                    $(".loader").show();
                    document.EditCredential.submit();
                }
            );
        }
    };
</script>
