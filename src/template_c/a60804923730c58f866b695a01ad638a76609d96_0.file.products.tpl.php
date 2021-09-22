<?php
/* Smarty version 3.1.39, created on 2021-09-22 18:10:40
  from 'C:\xampp\htdocs\TasteIt\src\templates\favourite\favourite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b55803e4919_10848924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60804923730c58f866b695a01ad638a76609d96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\favourite\\favourite.tpl',
      1 => 1632327039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b55803e4919_10848924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1037329163614b55803dc833_46907121', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033885640614b55803dd174_33604202', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1037329163614b55803dc833_46907121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1037329163614b55803dc833_46907121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Preferiti<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2033885640614b55803dd174_33604202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2033885640614b55803dd174_33604202',
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
                        </span> <span>Preferiti <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Lista dei preferiti</h2>
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
                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['product']->value->getImagePath();?>
);">
                                        <div class="desc">
                                            <p class="meta-prod d-flex">
                                                <a href="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToCart" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                                <a href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                            </p>
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
