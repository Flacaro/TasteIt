<?php
/* Smarty version 3.1.39, created on 2021-09-22 18:36:23
  from 'C:\xampp\htdocs\TasteIt\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b5b873fd148_55721689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e737df69b7dd62d15a738d98500cf7090c995e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\base\\base.tpl',
      1 => 1632328297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/base/nav.tpl' => 1,
    'file:src/templates/base/footer.tpl' => 1,
  ),
),false)) {
function content_614b5b873fd148_55721689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260581540614b5b8739f7d6_75409586', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426153545614b5b873fafb5_62567287', 'products');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146076576614b5b873fba25_80612608', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261730130614b5b873fc2f9_15856179', 'productsOfCart');
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
class Block_260581540614b5b8739f7d6_75409586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_260581540614b5b8739f7d6_75409586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
nav<?php
}
}
/* {/block 'title'} */
/* {block 'products'} */
class Block_1426153545614b5b873fafb5_62567287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products' => 
  array (
    0 => 'Block_1426153545614b5b873fafb5_62567287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'products'} */
/* {block 'body'} */
class Block_146076576614b5b873fba25_80612608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_146076576614b5b873fba25_80612608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'productsOfCart'} */
class Block_261730130614b5b873fc2f9_15856179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productsOfCart' => 
  array (
    0 => 'Block_261730130614b5b873fc2f9_15856179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'productsOfCart'} */
}
