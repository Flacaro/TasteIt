<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:18:10
  from 'C:\xampp\htdocs\TasteIt\src\templates\product\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c0b72c0fc83_84562477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8df914dc60fa83490a95da5676b2a2ca69d3a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product\\all_products.tpl',
      1 => 1629221879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c0b72c0fc83_84562477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846060342611c0b72c07676_87457017', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033078840611c0b72c07fa1_93797759', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_846060342611c0b72c07676_87457017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_846060342611c0b72c07676_87457017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotto<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2033078840611c0b72c07fa1_93797759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2033078840611c0b72c07fa1_93797759',
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
