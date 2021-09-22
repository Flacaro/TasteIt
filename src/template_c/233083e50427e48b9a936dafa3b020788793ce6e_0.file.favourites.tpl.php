<?php
/* Smarty version 3.1.39, created on 2021-08-21 12:17:03
  from 'C:\xampp\htdocs\TasteIt\src\templates\favourite\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6120d29fb55541_71133784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233083e50427e48b9a936dafa3b020788793ce6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\favourite\\products.tpl',
      1 => 1629540835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6120d29fb55541_71133784 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favourites']->value, 'favourite');
$_smarty_tpl->tpl_vars['favourite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favourite']->value) {
$_smarty_tpl->tpl_vars['favourite']->do_else = false;
?>

    <li>
        <?php echo $_smarty_tpl->tpl_vars['favourite']->value->getId();?>

    </li>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
