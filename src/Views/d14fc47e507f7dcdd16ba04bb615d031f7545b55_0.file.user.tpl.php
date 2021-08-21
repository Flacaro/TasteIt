<?php
/* Smarty version 3.1.39, created on 2021-08-21 11:44:00
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\user\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6120cae0223404_39951463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd14fc47e507f7dcdd16ba04bb615d031f7545b55' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\user\\user.tpl',
      1 => 1629369479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6120cae0223404_39951463 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>

                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>

                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getSurname();?>

                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>

                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getPassword();?>

                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getCartId();?>

                </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul
</body>
</html>

<?php }
}
