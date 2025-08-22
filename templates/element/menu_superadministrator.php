<?php 
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

$Users = TableRegistry::getTableLocator()->get('Users');

$id = Router::getRequest()->getSession()->read('Users.id_user');
$user = $Users->get($id, contain: ['Credentials']);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<?php echo $this->Html->css("menu_style3.css"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" style="background: linear-gradient(to bottom, #0d499d, #072146);">
        <div id="dismiss" style="background:#2e7dea">
            <i class="fas fa-arrow-right"></i>
        </div>
        <div class="sidebar-header" style="background: linear-gradient(to bottom, #072146, #0d499d);">
             <?php echo $this->Html->image('heartland_logo.png', array('class' => 'img-responsive','alt'=>'Heartland FPG', 'title' => "Heartland FPG", 'style'=>"padding-top: 0px;padding-bottom: 8px;max-height: 50px;min-width: auto;left: 110px;position: relative;")); ?>
        </div>

        <ul class="list-unstyled components" >
            <li>
                <a href="#Usuarios" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user-friends"></i> Usuarios  <i class="fa-solid fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="Usuarios">
                    <li>
                        <a href="<?= Router::url(['controller' =>'Users', 'action' =>'index']) ?>"><i class="fas fa-caret-right"></i> Usuarios </a>
                    </li>
                    <li>
                        <a href="<?= Router::url(['controller' =>'SuperAdministrators', 'action' =>'index']) ?>"><i class="fas fa-caret-right"></i> Super Administradores </a>
                    </li>
                    <li>
                        <a href="<?= Router::url(['controller' =>'Administrators', 'action' =>'index']) ?>"><i class="fas fa-caret-right"></i> Administradores </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#Catalogos" data-toggle="collapse" aria-expanded="false"><i class="fas fa-book"></i> Catálogos  <i class="fa-solid fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="Catalogos">
                    <a href="#General" data-toggle="collapse" aria-expanded="false"><i class="fas fa-clipboard-list"></i> Catálogo General <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="collapse list-unstyled" id="General">
                        <li>
                            <a href="<?= Router::url(['controller' =>'Credentials', 'action' =>'index'])?>"><i class="fas fa-caret-right"></i> Catálogo Credenciales</a>
                        </li>
                    </ul>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a class="navbar-brand btn btn-outline-light" href=" <?= Router::url(['controller' =>'Users', 'action' =>'logout']) ?> "><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar sesión </a>
            </li>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul style="padding-right: 50px;">
                <div>
                    <?php echo $this->Html->image('heartland_logo.png', array('class' => 'img-responsive','alt'=>'Heartland FPG', 'title' => "Heartland FPG", 'style'=>" padding-left:5px; max-height: 60px; min-width: auto; ")); ?>
                </div>
            </ul>

            <ul class="nav navbar-nav ml-auto" style="padding-right: 15px;">
                <li class="nav-item active">
                    <a type="button"  class="btn btn-outline-light" href=" <?= Router::url(['controller' =>'Users', 'action' =>'logout']) ?> "><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar sesión</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto" style="padding-right: 30px;">
                <li class="nav-item active">
                    <a type="button"  class="btn btn-outline-light" href=" <?= Router::url(['controller' =>'Users', 'action' =>'home']) ?> "><i class="fa-solid fa-house"></i> Home</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto" style="padding-right: 15px;">
                <li class="nav-item">
                    <a class="navbar-brand" style="color: white;"><?= $user->credential->name ?></a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto" style="padding-right: 15px;">
                <li class="nav-item">
                    <a class="navbar-brand" style="color: white;"><?= $user->username ?><br>Heartland</a>
                </li>
            </ul>
            
            <!--<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                
            </div>

            <button type="button" id="sidebarCollapse" class="btn" style="background:#2e7dea">
                <i class="fas fa-align-left"></i>
                <span>Ver menú</span>
            </button>
        </div>
    </nav>
</div>

<div class="overlay"></div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
