<?php
/* Smarty version 3.1.39, created on 2021-08-21 12:22:22
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\favourite\favourites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6120d3de524e57_32375795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40f1d5cff0f47ed662acf3af70356f26b8558107' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\favourite\\favourites.tpl',
      1 => 1629541318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6120d3de524e57_32375795 (Smarty_Internal_Template $_smarty_tpl) {
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
