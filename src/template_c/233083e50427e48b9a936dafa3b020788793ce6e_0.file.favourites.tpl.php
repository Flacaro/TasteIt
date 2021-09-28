<?php
/* Smarty version 3.1.39, created on 2021-09-28 19:45:27
  from 'C:\xampp\htdocs\TasteIt\src\templates\favourite\favourites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615354b7cdc1d3_60693513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233083e50427e48b9a936dafa3b020788793ce6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\favourite\\favourites.tpl',
      1 => 1632851124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615354b7cdc1d3_60693513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8424458615354b7cd10c8_01334866', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2018913042615354b7cd1f68_33962263', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_8424458615354b7cd10c8_01334866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8424458615354b7cd10c8_01334866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
All products<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2018913042615354b7cd1f68_33962263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2018913042615354b7cd1f68_33962263',
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
                    <h2 class="mb-0 bread">Preferiti</h2>
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
                            <h4 class="product-select">Lista dei preferiti</h4>
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
                                        <div class="desc" style="display: flex">
                                            <p class="meta-prod d-flex">
                                            <form action="/favourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
/addToCart/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                                <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1" hidden>
                                                <button style="margin-right: 1rem" id="productQuantity" class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                            </form>
                                            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                                <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                            </form>
                                            <form action="/favourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/delete" method="POST">
                                                <div class="button delete">

                                                    <input hidden type="text" value="DELETE" name="_method">
                                                    <input hidden type="text" value="delete" name="option">

                                                    <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><i class="fa fa-trash"></i></span></button>
                                                </div>
                                            </form>
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
