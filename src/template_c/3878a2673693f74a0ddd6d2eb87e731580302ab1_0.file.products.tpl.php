<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:42:14
  from 'C:\Users\mohamed\Documents\GitHub\TasteIt\src\templates\product\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c1116a453f7_07748312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3878a2673693f74a0ddd6d2eb87e731580302ab1' => 
    array (
      0 => 'C:\\Users\\mohamed\\Documents\\GitHub\\TasteIt\\src\\templates\\product\\products.tpl',
      1 => 1629211469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c1116a453f7_07748312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1165818682611c1116a3fda5_43088187', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890100751611c1116a429a7_42041790', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base.tpl');
}
/* {block 'title'} */
class Block_1165818682611c1116a3fda5_43088187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1165818682611c1116a3fda5_43088187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prodotti<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1890100751611c1116a429a7_42041790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1890100751611c1116a429a7_42041790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Prodotti <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Products</h2>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h4 class="product-select">Select Types of Products</h4>
                        <select class="selectpicker" multiple>
                            <option>Brandy</option>
                            <option>Gin</option>
                            <option>Rum</option>
                            <option>Tequila</option>
                            <option>Vodka</option>
                            <option>Whiskey</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-1.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="sale">Sale</span>
                                <span class="category">Brandy</span>
                                <h2>Bacardi 151</h2>
                                <p class="mb-0"><span class="price price-sale">$69.00</span> <span class="price">$49.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-2.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="seller">Best Seller</span>
                                <span class="category">Gin</span>
                                <h2>Jim Beam Kentucky Straight</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-3.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="new">New Arrival</span>
                                <span class="category">Rum</span>
                                <h2>Citadelle</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-4.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Rum</span>
                                <h2>The Glenlivet</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-5.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>Black Label</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-6.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Tequila</span>
                                <h2>Macallan</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-7.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Vodka</span>
                                <h2>Old Monk</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-8.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>Jameson Irish Whiskey</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-9.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>Screwball</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-10.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>Screwball</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-11.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>McClelland's</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../public/assets/images/prod-12.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category">Whiskey</span>
                                <h2>Plantation</h2>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                    </div>
                </div>

<?php
}
}
/* {/block 'body'} */
}
