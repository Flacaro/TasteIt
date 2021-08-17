<?php
/* Smarty version 3.1.39, created on 2021-08-17 16:06:03
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bc24b20e782_53655922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb478c455c4e93fe3cb7b6e42ac03ed3d2641027' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product\\product.tpl',
      1 => 1629209153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611bc24b20e782_53655922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861007347611bc24b207816_34497352', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_481287526611bc24b208173_74419184', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1861007347611bc24b207816_34497352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1861007347611bc24b207816_34497352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotto<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_481287526611bc24b208173_74419184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_481287526611bc24b208173_74419184',
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
