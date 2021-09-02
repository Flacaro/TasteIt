<?php
/* Smarty version 3.1.39, created on 2021-08-17 11:28:01
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611b8121955b94_83891251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b79caf3c9298592864858d1f0cf78f44049c6b7' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\all_products.tpl',
      1 => 1629192480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611b8121955b94_83891251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1757103833611b812194b9a7_07005807', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379377050611b812194c5c2_64013566', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base.tpl');
}
/* {block 'title'} */
class Block_1757103833611b812194b9a7_07005807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1757103833611b812194b9a7_07005807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotti<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_379377050611b812194c5c2_64013566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_379377050611b812194c5c2_64013566',
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
