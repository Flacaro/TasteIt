<?php
/* Smarty version 3.1.39, created on 2021-08-19 15:22:30
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e5b160cf598_27124084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f306688f028334753b6b9617df5386238f3c0e2f' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product\\products.tpl',
      1 => 1629369479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e5b160cf598_27124084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1044488998611e5b160ba751_49659708', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587027012611e5b160bb573_11288165', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_267297110611e5b160bbbf2_31984068', 'products');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1044488998611e5b160ba751_49659708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1044488998611e5b160ba751_49659708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotti<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_587027012611e5b160bb573_11288165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_587027012611e5b160bb573_11288165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'products'} */
class Block_267297110611e5b160bbbf2_31984068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products' => 
  array (
    0 => 'Block_267297110611e5b160bbbf2_31984068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://wallpapersdsc.net/wp-content/uploads/2016/09/Chinese-Seafood-full-HD.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animated mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2">
                            <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                        </span> <span>Prodotti <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Products</h2>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h4 class="product-select">Select Types of Products</h4>
                    </div>
                </div>


                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animated">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url('https://via.placeholder.com/150');">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <h2> <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
                                <p class="mb-0">
                                    <span class="price">$<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
}
}
/* {/block 'products'} */
}
