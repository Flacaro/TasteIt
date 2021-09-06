<?php
/* Smarty version 3.1.39, created on 2021-09-05 16:29:00
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\leftMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6134d42c2aa743_66281034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c35c90bccb08b6e42b1c347b0b91be7ee9c3ebaf' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\leftMenu.tpl',
      1 => 1630852133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6134d42c2aa743_66281034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/src/templates/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/src/templates/admin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/src/templates/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/src/templates/admin/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/src/templates/admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="../../src/templates/admin/assets/img/logo-small.png">
                </div>
                <!-- <p>CT</p> -->
            </a>
            <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
                <!-- <div class="logo-image-big">
                  <img src="../assets/img/logo-big.png">
                </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="/admin">
                        <i class="nc-icon nc-bank"></i>
                        <p>Ricavi Mensili</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/categories">
                        <i class="nc-icon nc-diamond"></i>
                        <p>Categorie</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/products">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Prodotti più venduti</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Clienti</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Coupon</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-caps-small"></i>
                        <p>Ordini</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="../templates/admin/coupon.tpl">
                        <i class="nc-icon nc-spaceship"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="javascript:;">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="javascript:;">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16055961786134d42c2a90e9_58250092', 'admin');
?>


<!--   Core JS Files   -->
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/core/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/core/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/core/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"><?php echo '</script'; ?>
>
<!--  Google Maps Plugin    -->
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"><?php echo '</script'; ?>
>
<!-- Chart JS -->
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/plugins/chartjs.min.js"><?php echo '</script'; ?>
>
<!--  Notifications Plugin    -->
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/plugins/bootstrap-notify.js"><?php echo '</script'; ?>
>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"><?php echo '</script'; ?>
><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<?php echo '<script'; ?>
 src="/src/templates/admin/assets/demo/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
<?php echo '</script'; ?>
>
</body>
</html>

<?php }
/* {block 'admin'} */
class Block_16055961786134d42c2a90e9_58250092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_16055961786134d42c2a90e9_58250092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'admin'} */
}
