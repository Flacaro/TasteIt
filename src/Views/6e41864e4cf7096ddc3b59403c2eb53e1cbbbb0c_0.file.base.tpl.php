<?php
/* Smarty version 3.1.39, created on 2021-08-17 11:31:43
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611b81ff99d007_42772934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e41864e4cf7096ddc3b59403c2eb53e1cbbbb0c' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\base.tpl',
      1 => 1629192702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/nav.tpl' => 1,
    'file:src/templates/footer.tpl' => 1,
  ),
),false)) {
function content_611b81ff99d007_42772934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1831759595611b81ff998284_02951267', 'title');
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

    <link rel="stylesheet" href="src/templates/scss/animate.css">

    <link rel="stylesheet" href="src/templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="src/templates/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="src/templates/css/magnific-popup.css">

    <link rel="stylesheet" href="src/templates/css/flaticon.css">
    <link rel="stylesheet" href="src/templates/css/style.css">
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:src/templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221890366611b81ff99c4b8_92686809', 'body');
?>


<?php $_smarty_tpl->_subTemplateRender('file:src/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php echo '<script'; ?>
 src="src/templates/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/scrollax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/google-map.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/templates/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'title'} */
class Block_1831759595611b81ff998284_02951267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1831759595611b81ff998284_02951267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
aaaaaa<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1221890366611b81ff99c4b8_92686809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1221890366611b81ff99c4b8_92686809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
