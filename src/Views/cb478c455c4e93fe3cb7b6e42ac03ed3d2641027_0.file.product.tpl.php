<?php
/* Smarty version 3.1.39, created on 2021-08-17 23:52:20
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c2f94aabb37_13192081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb478c455c4e93fe3cb7b6e42ac03ed3d2641027' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product\\all_products.tpl',
      1 => 1629231931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c2f94aabb37_13192081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1429407623611c2f94aa2e16_95040102', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_929523449611c2f94aa3767_28577023', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1429407623611c2f94aa2e16_95040102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1429407623611c2f94aa2e16_95040102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotto<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_929523449611c2f94aa3767_28577023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_929523449611c2f94aa3767_28577023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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

                <?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>

                <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>

                <?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>

                <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>

            </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>


<?php
}
}
/* {/block 'body'} */
}
