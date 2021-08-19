<?php
/* Smarty version 3.1.39, created on 2021-08-19 12:39:59
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e34ff5ccfa8_47483667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cef1634db851b574f69b01d45e779fbac635899c' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\base\\base.tpl',
      1 => 1629369479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/base/nav.tpl' => 1,
    'file:src/templates/base/footer.tpl' => 1,
  ),
),false)) {
function content_611e34ff5ccfa8_47483667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_497113075611e34ff5c7fb4_35103858', 'title');
?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TasteIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/src/assets/css/animate.css">

    <link rel="stylesheet" href="/src/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/src/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/src/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/src/assets/css/flaticon.css">
    <link rel="stylesheet" href="/src/assets/css/style.css">
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_779526333611e34ff5cb6c9_55750505', 'products');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1076009965611e34ff5cbcb7_82295388', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2126169296611e34ff5cc1e5_26935331', 'allProducts');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1723240036611e34ff5cc6c2_16661203', 'productsOfCart');
?>


<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php echo '<script'; ?>
 src="/src/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/scrollax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/google-map.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'title'} */
class Block_497113075611e34ff5c7fb4_35103858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_497113075611e34ff5c7fb4_35103858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
aaaaaa<?php
}
}
/* {/block 'title'} */
/* {block 'products'} */
class Block_779526333611e34ff5cb6c9_55750505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products' => 
  array (
    0 => 'Block_779526333611e34ff5cb6c9_55750505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'products'} */
/* {block 'body'} */
class Block_1076009965611e34ff5cbcb7_82295388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1076009965611e34ff5cbcb7_82295388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'allProducts'} */
class Block_2126169296611e34ff5cc1e5_26935331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'allProducts' => 
  array (
    0 => 'Block_2126169296611e34ff5cc1e5_26935331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'allProducts'} */
/* {block 'productsOfCart'} */
class Block_1723240036611e34ff5cc6c2_16661203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productsOfCart' => 
  array (
    0 => 'Block_1723240036611e34ff5cc6c2_16661203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'productsOfCart'} */
}
