<?php
/* Smarty version 3.1.39, created on 2021-08-17 18:49:41
  from 'C:\xampp\htdocs\TasteIt\src\templates\category\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611be8a50b1a26_29037944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6167b168a6959b64481d30d60f8e0d3c7f9c141b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\category\\category.tpl',
      1 => 1629218979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611be8a50b1a26_29037944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1072977171611be8a50a8c28_82632715', 'categories');
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>

            <?php echo $_smarty_tpl->tpl_vars['category']->value->getCategoryName();?>

            <?php echo $_smarty_tpl->tpl_vars['category']->value->getRestaurantId();?>

        </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'categories'} */
class Block_1072977171611be8a50a8c28_82632715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_1072977171611be8a50a8c28_82632715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Category<?php
}
}
/* {/block 'categories'} */
}
