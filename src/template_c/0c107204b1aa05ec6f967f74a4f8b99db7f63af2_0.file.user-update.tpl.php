<?php
/* Smarty version 3.1.39, created on 2021-08-11 22:35:06
  from 'C:\xampp\htdocs\TasteIt\src\templates\user-update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6114347a428559_08232404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c107204b1aa05ec6f967f74a4f8b99db7f63af2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user-update.tpl',
      1 => 1628714105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6114347a428559_08232404 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" name="address">
        <button type="submit">Aggiorna </button>

    </form>
</body>
</html><?php }
}
