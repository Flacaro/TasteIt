<?php
/* Smarty version 3.1.39, created on 2021-08-14 22:46:26
  from 'C:\xampp\htdocs\TasteIt\src\templates\user-update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61182ba229abc6_81525609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53107cca763d8cbef7dbebcd8cb74e7c6aa9774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user-update.tpl',
      1 => 1628973978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61182ba229abc6_81525609 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form action="/users/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">

        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" name="surname">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" name="password">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" name="cartId" hidden>
        <button type="submit">Aggiorna </button>

    </form>
</body>
</html><?php }
}
