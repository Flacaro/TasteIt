<?php
/* Smarty version 3.1.39, created on 2021-08-06 18:35:59
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product-update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610d64efd009f4_77300624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40fd7aeccb184a5a90301c15ed93f9831460299a' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product-update.tpl',
      1 => 1628267752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610d64efd009f4_77300624 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="/products/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">

        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name">
        <input type=""text" value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" name="description">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" name="price">
        <button type="submit">Aggiorna</button>
    </form>
</body>
</html><?php }
}