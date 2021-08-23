<?php
/* Smarty version 3.1.39, created on 2021-08-23 22:34:54
  from 'C:\xampp\htdocs\TasteIt\src\templates\cart\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6124066e1dd714_16116747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38faf17c87aaf17822dd420bd5d4d173a0e486de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\cart\\cart.tpl',
      1 => 1629750770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6124066e1dd714_16116747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14636520576124066e1c3352_85872377', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8908674006124066e1c3cb8_62972161', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15867584326124066e1c4321_05151573', 'productsOfCart');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_14636520576124066e1c3352_85872377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14636520576124066e1c3352_85872377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_8908674006124066e1c3cb8_62972161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_8908674006124066e1c3cb8_62972161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'productsOfCart'} */
class Block_15867584326124066e1c4321_05151573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productsOfCart' => 
  array (
    0 => 'Block_15867584326124066e1c4321_05151573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TasteIt\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
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
                            <div class="img" style="background-image: url('https://assets.wallpapersin4k.org/uploads/2017/04/3D-Food-Wallpaper-18.jpg');"></div>
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
                            <div class="input-group" style="width: 9em">
                                <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/update" method="POST" style="float: left">
                                    <div class="button minus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="minus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value->getQuantity() == 1) {?>
                                                    disabled
                                                <?php }?>
                                        >
                                            -
                                        </button>
                                    </div>
                                </form>

                                <input type="text" name="quantity" class="input-number"  data-min="1" data-max="100" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getQuantity();?>
" style="width: 2em">

                                <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/update" method="POST" style="float: right">
                                    <div class="button plus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="plus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"> + </button>
                                    </div>
                                </form>

                            </div>
                        </td>
                          <td><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value->getPrice())." * ".((string)$_smarty_tpl->tpl_vars['product']->value->getQuantity())),$_smarty_tpl);?>
</td>
                        <td>
                                                        <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
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
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                 <?php $_smarty_tpl->_assignInScope('partialTotal', $_smarty_tpl->tpl_vars['partialTotal']->value+$_smarty_tpl->tpl_vars['product']->value->getPrice()*$_smarty_tpl->tpl_vars['product']->value->getQuantity());?>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            $ <?php echo $_smarty_tpl->tpl_vars['partialTotal']->value;?>

                        </span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['product']->value->getPrice()*$_smarty_tpl->tpl_vars['product']->value->getQuantity());?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            $ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                        </span>
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
