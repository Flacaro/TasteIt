<?php
/* Smarty version 3.1.39, created on 2021-09-24 16:50:26
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614de5b21fb0e5_25771456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cef1634db851b574f69b01d45e779fbac635899c' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\base\\base.tpl',
      1 => 1632410285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/base/nav.tpl' => 1,
    'file:src/templates/base/footer.tpl' => 1,
  ),
),false)) {
function content_614de5b21fb0e5_25771456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_897230269614de5b21aa497_50482445', 'title');
?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TasteIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5382893614de5b21f98d5_91390836', 'products');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461631966614de5b21fa0b3_07495415', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_403354197614de5b21fa6f1_84705816', 'productsOfCart');
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
 src="/src/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'title'} */
class Block_897230269614de5b21aa497_50482445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_897230269614de5b21aa497_50482445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
nav<?php
}
}
/* {/block 'title'} */
/* {block 'products'} */
class Block_5382893614de5b21f98d5_91390836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products' => 
  array (
    0 => 'Block_5382893614de5b21f98d5_91390836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'products'} */
/* {block 'body'} */
class Block_461631966614de5b21fa0b3_07495415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_461631966614de5b21fa0b3_07495415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'productsOfCart'} */
class Block_403354197614de5b21fa6f1_84705816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productsOfCart' => 
  array (
    0 => 'Block_403354197614de5b21fa6f1_84705816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'productsOfCart'} */
}
