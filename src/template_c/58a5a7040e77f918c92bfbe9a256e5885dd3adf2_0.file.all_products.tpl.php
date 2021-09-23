<?php
/* Smarty version 3.1.39, created on 2021-09-23 12:02:38
  from 'C:\xampp\htdocs\TasteIt\src\templates\product\all_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c50bed7d717_53984755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58a5a7040e77f918c92bfbe9a256e5885dd3adf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product\\all_products.tpl',
      1 => 1632391356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c50bed7d717_53984755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105507491614c50bed74f82_41972447', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_915440603614c50bed75ac3_73878419', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_105507491614c50bed74f82_41972447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_105507491614c50bed74f82_41972447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
All products<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_915440603614c50bed75ac3_73878419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_915440603614c50bed75ac3_73878419',
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
                        </span> <span>Prodotti<i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Tutti i prodotti</h2>
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
            <h4 class="product-select">Seleziona un prodotto</h4>
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
                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToCart/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                    <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1" hidden>
                                    <button id="productQuantity" class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                </form>
                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToFavourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" method="POST">
                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                </form>
                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="text text-center">
                            <h2> <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
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
/* {/block 'body'} */
}
