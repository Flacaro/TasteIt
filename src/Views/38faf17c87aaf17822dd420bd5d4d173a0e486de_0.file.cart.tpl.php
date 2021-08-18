<?php
/* Smarty version 3.1.39, created on 2021-08-18 22:56:42
  from 'C:\xampp\htdocs\TasteIt\src\templates\cart\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611d740a346922_13150179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38faf17c87aaf17822dd420bd5d4d173a0e486de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\cart\\cart.tpl',
      1 => 1629320190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611d740a346922_13150179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_655725309611d740a33b385_70321042', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_774489395611d740a33bce3_80950695', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2104949136611d740a33c361_23225342', 'productsOfCart');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_655725309611d740a33b385_70321042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_655725309611d740a33b385_70321042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_774489395611d740a33bce3_80950695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_774489395611d740a33bce3_80950695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'productsOfCart'} */
class Block_2104949136611d740a33c361_23225342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productsOfCart' => 
  array (
    0 => 'Block_2104949136611d740a33c361_23225342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">My Cart</h2>
            </div>
        </div>
    </div>
</section>
<!--fine blocco prima immagine -->

<!--Sezione carrello dove sono i prodotti -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="table-wrap">
                <table class="table">

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
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
                            <div class="img" style="background-image: url('https://via.placeholder.com/150');"></div>
                        </td>
                        <td>
                            <div class="email">
                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</span>
                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</span>
                            </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</td>
                        <td class="quantity">
                            <div class="input-group">
                                                                <button class="quantity form-control">-</button>
                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getQuantity();?>
</p>
                                <button class="quantity form-control">+</button>
                            </div>
                        </td>
                          <td>total</td>
                        <td>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </button>
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
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Coupon</span>
                        <span>3%</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        <!--fine checkout -->
    </div>
</section>
<?php
}
}
/* {/block 'productsOfCart'} */
}
