<?php
/* Smarty version 3.1.39, created on 2021-08-11 22:15:05
  from 'C:\xampp\htdocs\TasteIt\src\templates\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61142fc91a91e0_67918214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ffd5fb7517d68913aa89aeff5087f6bf0296ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\all_products.tpl',
      1 => 1628712898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61142fc91a91e0_67918214 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="GET">
                <button type="submit">X</button>
            </form>
            <span>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>

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
