<?php
/* Smarty version 3.1.39, created on 2021-08-18 15:15:01
  from 'C:\xampp\htdocs\TasteIt\src\templates\category\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611d07d5054fb4_26671412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6167b168a6959b64481d30d60f8e0d3c7f9c141b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\category\\category.tpl',
      1 => 1629221456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611d07d5054fb4_26671412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926830251611d07d4e73535_00577712', 'categories');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'categories'} */
class Block_926830251611d07d4e73535_00577712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_926830251611d07d4e73535_00577712',
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
