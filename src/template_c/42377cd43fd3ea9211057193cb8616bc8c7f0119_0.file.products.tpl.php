<?php
/* Smarty version 3.1.39, created on 2021-10-05 11:20:38
  from 'C:\xampp\htdocs\TasteIt\src\templates\product\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c18e6924b55_77675518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42377cd43fd3ea9211057193cb8616bc8c7f0119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product\\products.tpl',
      1 => 1633425637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c18e6924b55_77675518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402880797615c18e6918c91_49218078', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1750630262615c18e6919910_73776985', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_402880797615c18e6918c91_49218078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_402880797615c18e6918c91_49218078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotti<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1750630262615c18e6919910_73776985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1750630262615c18e6919910_73776985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['category']->value->getImage();?>
');" data-stellar-background-ratio="0.5">
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
                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['product']->value->getImagePath();?>
');">
                                        <div class="desc">
                                            <p class="meta-prod d-flex">
                                                <?php if ($_smarty_tpl->tpl_vars['cartId']->value) {?>
                                                    <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/add/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                                        <input type="text" id="productQuantity" name="quantity1" class="quantity form-control input-number" value="1" hidden>
                                                        <button style="margin-right: 1rem" id="productQuantity"class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                                    </form>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['favId']->value) {?>
                                                    <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToFavourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" method="POST">
                                                        <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                                    </form>
                                                <?php }?>
                                            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                                <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                            </form>
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
/* {/block 'body'} */
}
