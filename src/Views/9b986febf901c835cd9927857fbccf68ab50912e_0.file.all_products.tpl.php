<?php
/* Smarty version 3.1.39, created on 2021-08-21 09:42:39
  from 'C:\Users\mohamed\Documents\GitHub\TasteIt\src\templates\product\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6120ae6f2603e8_64573241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b986febf901c835cd9927857fbccf68ab50912e' => 
    array (
      0 => 'C:\\Users\\mohamed\\Documents\\GitHub\\TasteIt\\src\\templates\\product\\all_products.tpl',
      1 => 1629531717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6120ae6f2603e8_64573241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16877848756120ae6f221448_02857011', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14393171326120ae6f22ce55_50227999', 'allProducts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_16877848756120ae6f221448_02857011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16877848756120ae6f221448_02857011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
All products<?php
}
}
/* {/block 'title'} */
/* {block 'allProducts'} */
class Block_14393171326120ae6f22ce55_50227999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'allProducts' => 
  array (
    0 => 'Block_14393171326120ae6f22ce55_50227999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://s1.1zoom.me/b6359/903/Meat_products_Salt_536334_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animated mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2">
                            <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                        </span> <span>Prodotti <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">All Products</h2>
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
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url('https://assets.wallpapersin4k.org/uploads/2017/04/3D-Food-Wallpaper-18.jpg');">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToCart" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToFavourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
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
/* {/block 'allProducts'} */
}
