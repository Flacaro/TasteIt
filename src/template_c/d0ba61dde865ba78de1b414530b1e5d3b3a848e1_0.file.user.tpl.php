<?php
/* Smarty version 3.1.39, created on 2021-08-14 22:46:31
  from 'C:\xampp\htdocs\TasteIt\src\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61182ba7dee588_76596188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ba61dde865ba78de1b414530b1e5d3b3a848e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user.tpl',
      1 => 1628973924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61182ba7dee588_76596188 (Smarty_Internal_Template $_smarty_tpl) {
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
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>

        <li>
        <form action="/users/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" method="GET">
        </form>
        <span>
            <?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>

        </span>
            <?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>

            <?php echo $_smarty_tpl->tpl_vars['user']->value->getSurname();?>

            <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>

            <?php echo $_smarty_tpl->tpl_vars['user']->value->getPassword();?>

            <?php echo $_smarty_tpl->tpl_vars['user']->value->getCartId();?>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</body>
</html><?php }
}
