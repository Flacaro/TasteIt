<?php
/* Smarty version 3.1.39, created on 2021-10-06 19:08:09
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\order\order-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615dd7f97f5037_08805415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b9db232981adc635db5d6046d84834f6f7fa50a' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\order\\order-summary.tpl',
      1 => 1633540084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615dd7f97f5037_08805415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1979913264615dd7f97e6197_67612077', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2083716482615dd7f97e6a34_97315969', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9238625615dd7f97e6fa6_47447333', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1979913264615dd7f97e6197_67612077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1979913264615dd7f97e6197_67612077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_2083716482615dd7f97e6a34_97315969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_2083716482615dd7f97e6a34_97315969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_9238625615dd7f97e6fa6_47447333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9238625615dd7f97e6fa6_47447333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Ordine <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Ordine</h2>
                </div>
            </div>
        </div>
    </section>
    <!--fine blocco prima immagine -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 ftco-animate">


                    <!--Inizio parte sotto il form con cart total e payment method -->
                    <h3 style="text-align: center">Il tuo ordine è arrivato in cucina. Aspetta che il ristorante confermi il tuo ordine.</h3>
                        <div class="row mt-5 pt-3 d-flex">

                            <div class="col-md-4 d-flex">
                                <div class="cart-detail cart-total p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Cart Total</h3>

                                    <p class="d-flex">
                                        <span>Subtotal</span>
                                        <?php $_smarty_tpl->_assignInScope('subtotal', 0);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->getProducts(), 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['subtotal']->value+$_smarty_tpl->tpl_vars['product']->value[0]->getPrice()*$_smarty_tpl->tpl_vars['product']->value[1]);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <span>$<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</span>
                                    </p>
                                    <p class="d-flex">
                                        <span>Discount</span>
                                        <?php if ($_smarty_tpl->tpl_vars['coupon']->value == '') {?>
                                        <span>0%</span>
                                        <?php } else { ?>
                                            <span><?php echo $_smarty_tpl->tpl_vars['coupon']->value->getPriceCut();?>
%</span>
                                        <?php }?>
                                    </p>
                                    <hr>
                                    <p class="d-flex total-price">
                                        <span>Total</span>
                                        <?php if ($_smarty_tpl->tpl_vars['coupon']->value != '') {?>
                                        <span>$<?php echo $_smarty_tpl->tpl_vars['subtotal']->value-($_smarty_tpl->tpl_vars['subtotal']->value*$_smarty_tpl->tpl_vars['coupon']->value->getPriceCut()/100);?>
</span>
                                        <?php } else { ?>
                                            <span>$<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</span>
                                        <?php }?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cart-detail p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Indirizzi</h3>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['address']->value->getCity();?>
</label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cart-detail p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Metodo di pagamento</h3>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['card']->value->getNumber();?>
</label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <form method="get" action="/home">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <button class="btn btn-primary w-25" style="margin-left: 1rem" id="ordine" type="submit">Torna alla home</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!--Sezione carrello dove sono i prodotti -->

<?php
}
}
/* {/block 'body'} */
}
