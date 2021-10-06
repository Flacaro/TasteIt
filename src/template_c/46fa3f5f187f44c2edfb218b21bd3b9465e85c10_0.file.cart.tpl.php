<?php
/* Smarty version 3.1.39, created on 2021-10-06 19:04:01
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\cart\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615dd7018eb9b6_59695181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46fa3f5f187f44c2edfb218b21bd3b9465e85c10' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\cart\\cart.tpl',
      1 => 1633539840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615dd7018eb9b6_59695181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_734495521615dd7018d5393_48803383', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888770550615dd7018d5d34_92214601', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846207739615dd7018d62c1_29356684', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_734495521615dd7018d5393_48803383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_734495521615dd7018d5393_48803383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_1888770550615dd7018d5d34_92214601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_1888770550615dd7018d5d34_92214601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_846207739615dd7018d62c1_29356684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_846207739615dd7018d62c1_29356684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\selen\\OneDrive\\Documents\\app\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Carrello<i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Il mio carrello</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="table-wrap">
                <table class="table" style="overflow: hidden">

                    <!--zona rossa dove stanno product, price... -->
                    <thead class="thead-primary">
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>total</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <!--fine zona rossa -->

                    <!--parte bianca dove sono le immagini dei prodotti -->
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->getProducts(), 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <!--primo prodotto-->
                    <tr class="alert" role="alert">
                        <td>
                            <label class="checkbox-wrap checkbox-primary">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="img" style="background-image: url('https://assets.wallpapersin4k.org/uploads/2017/04/3D-Food-Wallpaper-18.jpg');"></div>
                        </td>
                        <td>
                            <div class="email">
                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getName();?>
</span>
                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getDescription();?>
</span>
                            </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getPrice();?>
</td>
                        <td class="quantity">
                            <div class="input-group" style="width: 9em">
                                <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cart']->value->getId();?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
/update" method="POST" style="float: left">
                                    <div class="button minus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="minus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value[1] == 1) {?>
                                                    disabled
                                                <?php }?>
                                        >
                                            -
                                        </button>
                                    </div>
                                </form>

                                <input type="text" name="quantity" class="input-number"  data-min="1" data-max="100" value="<?php echo $_smarty_tpl->tpl_vars['product']->value[1];?>
" style="width: 2em">

                                <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cart']->value->getId();?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
/update" method="POST" style="float: right">
                                    <div class="button plus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="plus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"> + </button>
                                    </div>
                                </form>

                            </div>
                        </td>
                          <td><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value[0]->getPrice())." * ".((string)$_smarty_tpl->tpl_vars['product']->value[1])),$_smarty_tpl);?>
</td>
                        <td>
                                                        <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cart']->value->getId();?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
/delete" method="POST">
                                <div class="button delete">

                                    <input hidden type="text" value="DELETE" name="_method">
                                    <input hidden type="text" value="delete" name="option">

                                    <button class="btn btn-primary btn-number" type="submit"> X </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- fine prodotto 1-->

                    </tbody>
                </table>
            </div>
        </div>
        <!--quadrato in fondo per il checkout -->
        <div class="row justify-content-end">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>
                            Total
                        </span>
                        <span>
                            $ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                        </span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>

                </div>
                <p class="text-center"><a href="/cart/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        <!--fine checkout -->
    </div>
</section>
<?php
}
}
/* {/block 'body'} */
}
