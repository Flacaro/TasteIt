<?php
/* Smarty version 3.1.39, created on 2021-10-24 19:10:32
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\leftMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617593880267d4_15602714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca67fd711e070b25d703e32efc8fbac889ad9416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\leftMenu.tpl',
      1 => 1635071877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617593880267d4_15602714 (Smarty_Internal_Template $_smarty_tpl) {
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

        Admin Panel

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

<div class="wrapper"  style="background-color: #F4F3EF">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo" style="display: flex; justify-content: center; background-color: #A23F25">
            <a class="simple-text logo-normal" style="color:white">
                TasteIt
            </a>
        </div>
        <div class="sidebar-wrapper" style="overflow:hidden; background-color: #B7472A">
            <ul class="nav">
                <li class="">
                    <a href="/admin" style="color:white">
                        <i class="nc-icon nc-chart-bar-32" style="color:white"></i>
                        <p>Statistiche</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/categories" style="color:white">
                        <i class="nc-icon nc-tag-content" style="color:white"></i>
                        <p>Categorie</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/products" style="color:white">
                        <i class="nc-icon nc-favourite-28" style="color:white"></i>
                        <p>Prodotti più venduti</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/customers" style="color:white">
                        <i class="nc-icon nc-single-02" style="color:white"></i>
                        <p>Clienti</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/coupons" style="color:white">
                        <i class="nc-icon nc-money-coins" style="color:white"></i>
                        <p>Coupons</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/orders" style="color:white">
                        <i class="nc-icon nc-cart-simple" style="color:white"></i>
                        <p>Ordini</p>
                    </a>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color: #A23F25">
            <div class="container-fluid" style="background-color: #A23F25">
                <div class="navbar-wrapper" >
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>

                    <a class="navbar-brand" href="javascript:;">Area Riservata</a>

                </div>
            </div>
        </nav>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139636073161759388025c06_92459303', 'admin');
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
class Block_139636073161759388025c06_92459303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_139636073161759388025c06_92459303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'admin'} */
}
