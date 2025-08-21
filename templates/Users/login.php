<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
$this->assign('title', 'Login');
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\Collection\Collection;

$route = \Cake\Routing\Router::url('/');
echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken'));
clearstatcache();
echo $this->Html->css("/bootstrapformhelpers/css/bootstrap-formhelpers.css");
echo $this->Html->script("/bootstrapformhelpers/js/bootstrap-formhelpers-phone.js");
?>

<style type="text/css">
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
    .login-block {
        background: #DE6262;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #072146, #0d499d);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #072146, #0d499d);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float: left;
        width: 100%;
        padding: 88px 0;
    }
    .banner-sec {
        /background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;/ background-size: cover;
        min-height: 500px;
        border-radius: 0 10px 10px 0;
        padding: 0;
    }
    /.container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
    }
    /.carousel-inner {
        border-radius: 0 10px 10px 0;
    }
    .carousel-caption {
        text-align: left;
        left: 5%;
    }
    .login-sec {
        padding: 50px 30px;
        position: relative;
    }
    .login-sec .copy-text {
        position: absolute;
        width: 80%;
        bottom: 20px;
        font-size: 13px;
        text-align: center;
    }
    .login-sec .copy-text i {
        color: #FEB58A;
    }
    .login-sec .copy-text a {
        color: #E36262;
    }
    .login-sec h2 {
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 25px;
        color: #FFFFFF;
    }
    .login-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFFFFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }
    .btn-login {
        background: #DE6262;
        color: #fff;
        font-weight: 500;
    }
    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }
    .banner-text h2 {
        color: #fff;
        font-weight: 600;
    }
    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }
    .banner-text p {
        color: #fff;
    }
    /**POPUP DE AYUDA**/
        /*table tr th, table tr td {
            color: #222;
            font-size: 0.875rem;
            padding: 0.5625rem 0.625rem;
            text-align: center;
        }*/
        .popup-header,
        .popup-footer {
            text-align: center;
            margin-bottom: 50px;
        }

        .popup-body {
            text-align: left;
        }

        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: 2px;
        }

        .deleteMeetingClose {
            font-size: 1.5em;
            cursor: pointer;
            position: absolute;
            right: 1px;
            top: -2px;
        }

        .popup .popuptext {
            visibility: hidden;
            width: 350px;
            background-color: #0d499d;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 20px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: -80%;
            margin-left: -138px;
            font-size: 20px;
            line-height: 1.5rem;
        }

        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0;} 
            to {opacity: 1;}
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity:1 ;}
        }
    /**POPUP DE AYUDA**/
    /**PARPADEO DE SOMBRA**/
        .QuestionStyle {
            font-size: 1.5em;
            color: #00b300;
            text-shadow: 2px 2px 4px #00ff00;
            -webkit-animation: myfirst 1s 98765432;
            -moz-animation: myfirst 2s 98765432;
            animation: myfirst 1s 98765432;
        }

        @-webkit-keyframes myfirst
        {
            from {text-shadow: 3px 3px 5px #00ff00;}
            to {text-shadow : none;}
        }

        @-moz-keyframes myfirst
        {
            from {text-shadow: 3px 3px 8px #33ff33;}
            to {text-shadow : none;}
        }

        @keyframes myfirst
        {
            from {text-shadow: 3px 3px 5px #00ff00;}
            to {text-shadow : none;}
        }
    /**PARPADEO DE SOMBRA**/
</style>

<section class="login-block" style="max-width: 100% !important; max-height: 100% !important; padding-top:0px; padding-bottom:300px;">
    <div class="container">
        <p class="text-center" style="color:#00ff00;"><b>Exploradores recomendados Google Chrome - Apple Safari. Favor de verificar que su navegador está actualizado.</b></p>
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Acceso al portal de cobranza</h2>
                <?= $this->Form->create(null, ['name' => 'formulario', 'class' => 'form-group']) ?>
                    <span style="color:#1e9b62" class="h1 fw-bold mb-0 d-flex align-items-center mb-1 pb-1">Iniciar sesión</span>
                    <div class="form-outline mb-4">
                        <label for="UserNameLogin" class="text-uppercase" style="color: white;">Usuario</label>
                        <input type="text" placeholder="" autocomplete="off" name="username" id="UserNameLogin" class="form-control form-control-lg"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="PasswordLogin" class="text-uppercase" style="color: white;">Contraseña</label>
                        <input type="password" placeholder="" autocomplete="off" name="password" id="PasswordLogin" class="form-control form-control-lg"/>
                    </div>
                    <button type="submit" class=" btn btn-block" style="background-color:#1e9b68">Ingresar</button>
                <?= $this->Form->end() ?>
                <button type="button" class="btn btn-block" style="background-color:#00a386" onClick="open_recovery();">Recuperar Contraseña</button>
            </div>
            <br>
            <!--Carrusel-->
            <div class="col banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <?php echo $this->Html->image('inicio_1.jpg', array('class' => 'd-block img-fluid','alt'=>'First slide', 'title' => "Heartland")); ?>
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                        <div class="carousel-item">
                            <?php echo $this->Html->image('inicio_1.jpg', array('class' => 'd-block img-fluid','alt'=>'First slide', 'title' => "Heartland")); ?>
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                        <div class="carousel-item">
                            <?php echo $this->Html->image('inicio_1.jpg', array('class' => 'd-block img-fluid','alt'=>'First slide', 'title' => "Heartland")); ?>
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                    </div>     
                </div>
            </div>
            <!--fin Carrusel-->
        </div>
    </div>
</section>

<div style="display: none;" class="modal bd-example-modal-lg" id="modal_recovery" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #0d499d; color:white;">
                <h5 class="modal-title" id="TitleModalRecovery">Recuperación de usuario y password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= $this->Form->create(null, ["url"=>["action"=>"recovery"], "name"=>"RecoverForm"]) ?>
                <fieldset>
                    <div class="modal-body" id="BodyModalRecovery">
                        <?php
                            echo $this->Form->control('email_recover', ['class'=>'form-control', 'label'=>'Por favor introduce tu correro electrónico registrado previamente:', 'placeholder'=>'ejemplo@mail.com', 'onfocusout' => 'return validarEmail(value);', 'required'=>true]);
                        ?>
                    </div>
                    <div class="modal-footer" id="FooterModalRecovery">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="close_recovery();"><i class="fas fa-check"></i> Recuperar</button>
                    </div>
                </fieldset>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    var route = '<?= $route ?>';
    var csrfToken = $('meta[name="csrfToken"]').attr('content');

    window.onload = function() {

    };
    
    $(document).ready(function() {

    });

    function open_recovery() {
        $("#modal_recovery").modal();
    };

    function close_recovery() {
        if(document.getElementById("email-recover").value==""){
            swal({ title: "Guardado invalido", text: "<span>Debes de agregar el Correo Electrónico</span>", type: "warning", confirmButtonColor: "#098CD2",   confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
        }
        else{
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
                    document.RecoverForm.submit();
                }
            );
        }
    };
</script>
