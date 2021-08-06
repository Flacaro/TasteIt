<?php
/* Smarty version 3.1.39, created on 2021-08-05 22:50:32
  from 'C:\xampp\htdocs\TasteIt\src\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610c4f18e05431_93556226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ffd5fb7517d68913aa89aeff5087f6bf0296ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product.tpl',
      1 => 1628196631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610c4f18e05431_93556226 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

        <li>
            <span>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>

            </span>
            <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>

        </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html><?php }
}
