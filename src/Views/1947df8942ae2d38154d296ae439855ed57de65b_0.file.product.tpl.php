<?php
/* Smarty version 3.1.39, created on 2021-08-13 17:01:12
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6116893809af96_19231094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1947df8942ae2d38154d296ae439855ed57de65b' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product.tpl',
      1 => 1628866870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6116893809af96_19231094 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductId();?>
" method="GET">
                <button type="submit">X</button>
            </form>
            <span>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getProductId();?>

            </span>
            <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>

        </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>

<?php }
}
