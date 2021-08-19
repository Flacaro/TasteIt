<?php
/* Smarty version 3.1.39, created on 2021-08-19 17:22:15
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\category\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e77271037e5_20348191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb6629f5921c793d44ed0185afddf4a295abf93f' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\category\\category.tpl',
      1 => 1629386532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e77271037e5_20348191 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <a class="dropdown-item" href="category.tpl"> <?php echo $_smarty_tpl->tpl_vars['category']->value->getCategoryName();?>
 </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
