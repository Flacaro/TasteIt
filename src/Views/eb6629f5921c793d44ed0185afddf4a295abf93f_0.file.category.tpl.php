<?php
/* Smarty version 3.1.39, created on 2021-08-18 16:51:19
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\category\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611d1e67709472_67033702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb6629f5921c793d44ed0185afddf4a295abf93f' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\category\\category.tpl',
      1 => 1629231931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611d1e67709472_67033702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225913082611d1e676d01c2_71751641', 'categories');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'categories'} */
class Block_1225913082611d1e676d01c2_71751641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_1225913082611d1e676d01c2_71751641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['category']->value->getCategoryName();?>

        </li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}
}
/* {/block 'categories'} */
}
