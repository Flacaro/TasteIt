<?php
/* Smarty version 3.1.39, created on 2021-08-11 23:39:27
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6114438f3ad388_66502844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a0d64c795e23f6ef102fd176ddc6a761e335fa' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\order.tpl',
      1 => 1628717965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6114438f3ad388_66502844 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <h1> <?php echo $_smarty_tpl->tpl_vars['yourName']->value;?>
</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>

        <li>
            <form action="/orders/<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" method="GET">
            </form>
            <span>
            <?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>

        </span>
            <?php echo $_smarty_tpl->tpl_vars['order']->value->getCreationDate();?>

            <?php echo $_smarty_tpl->tpl_vars['order']->value->getTotal();?>

            <?php echo $_smarty_tpl->tpl_vars['order']->value->getArrivalTime();?>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html><?php }
}
