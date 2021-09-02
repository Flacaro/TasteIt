<?php
/* Smarty version 3.1.39, created on 2021-08-27 19:07:04
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product\product-update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61291bb846c6f5_53459489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0d02cbd9c2878eecdb30e61635d1e0a0cafdbc3' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product\\product-update.tpl',
      1 => 1630082289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61291bb846c6f5_53459489 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>ID: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h1>
        <form action="/products/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">

        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" name="description">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" name="price">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
" name="categoryId" hidden>
        <button type="submit">Aggiorna</button>
    </form>
</body>
</html><?php }
}
