<?php
/* Smarty version 3.1.39, created on 2021-10-25 11:31:11
  from 'C:\xampp\htdocs\TasteIt\src\templates\order\order-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176795f61c251_42123625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdf6e5a75fd89314dc6d3e11d93e00d8291d123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\order\\order-summary.tpl',
      1 => 1634808829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176795f61c251_42123625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13707796176176795f56dbe2_42078098', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7784187146176795f56e577_71841085', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332710566176795f56eba3_40866564', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_13707796176176795f56dbe2_42078098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13707796176176795f56dbe2_42078098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_7784187146176795f56e577_71841085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_7784187146176795f56e577_71841085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_332710566176795f56eba3_40866564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_332710566176795f56eba3_40866564',
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
                                                    <?php if (get_class($_smarty_tpl->tpl_vars['card']->value) == "App\Models\CreditCard") {?>
                                                    <label><?php echo $_smarty_tpl->tpl_vars['card']->value->getNumber();?>
</label>
                                                        <?php } else { ?>
                                                        <label>Contanti</label>
                                                    <?php }?>
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
