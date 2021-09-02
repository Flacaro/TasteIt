<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:27:43
  from 'C:\Users\mohamed\Documents\GitHub\TasteIt\src\templates\product\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c0daf36aeb9_55712361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052b1b74ab0bbdfa90ecea6fbaa6b8aaba63e0d9' => 
    array (
      0 => 'C:\\Users\\mohamed\\Documents\\GitHub\\TasteIt\\src\\templates\\product\\product.tpl',
      1 => 1629211469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c0daf36aeb9_55712361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95945588611c0daf130e55_91008121', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808569490611c0daf135ca2_83376420', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_95945588611c0daf130e55_91008121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_95945588611c0daf130e55_91008121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotto<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1808569490611c0daf135ca2_83376420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1808569490611c0daf135ca2_83376420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="GET">
                <button type="submit">X</button>
            </form>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>

            <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>




<?php
}
}
/* {/block 'body'} */
}
