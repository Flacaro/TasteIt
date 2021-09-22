<?php
/* Smarty version 3.1.39, created on 2021-09-22 12:36:42
  from 'C:\xampp\htdocs\TasteIt\src\templates\prov.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b073a5889f7_62643804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbee6db4879eca91ba399b28121969184856a64c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\prov.tpl',
      1 => 1632307001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b073a5889f7_62643804 (Smarty_Internal_Template $_smarty_tpl) {
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
ciaoo
<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['product']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</foreach>
</body>
</html><?php }
}
