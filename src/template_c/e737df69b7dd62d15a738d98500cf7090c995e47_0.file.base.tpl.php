<?php
/* Smarty version 3.1.40, created on 2021-11-07 21:47:51
  from 'C:\xampp\htdocs\TasteIt\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61883b775b0270_57264504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e737df69b7dd62d15a738d98500cf7090c995e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\base\\base.tpl',
      1 => 1636314926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/templates/base/nav.tpl' => 1,
    'file:src/templates/base/footer.tpl' => 1,
  ),
),false)) {
function content_61883b775b0270_57264504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171656554561883b775a9bb2_70976957', 'title');
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
    <style>
        .order-table {
            overflow-x: auto;
        }


        /* Quando lo schermo e' >= 1200px */
        @media (min-width: 1200px) {
            .order-table {
                overflow: hidden;
            }
        }
    </style>
</head>



<body style="height: 100vh;" onload="myFunction()">

<?php echo '<script'; ?>
>
    function myFunction() {
        if (!navigator.cookieEnabled){
            alert('Attenzione! Il sito potrebbe non funzionare correttamente se i cookie non sono abilitati. Prima di continuare a navigare, assicurati di aver abilitato i cookie.')
        }
    }
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114491533761883b775af413_39854099', 'body');
?>


<?php $_smarty_tpl->_subTemplateRender('file:src/templates/base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- loader -->

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
class Block_171656554561883b775a9bb2_70976957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_171656554561883b775a9bb2_70976957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
nav<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_114491533761883b775af413_39854099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_114491533761883b775af413_39854099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
