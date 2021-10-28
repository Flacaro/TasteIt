<?php
/* Smarty version 3.1.39, created on 2021-10-28 18:29:45
  from 'C:\xampp\htdocs\TasteIt\src\templates\order\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617acff99c64a6_90641824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46c2e046a286bd15db509c4044c5be36b67d558' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\order\\order.tpl',
      1 => 1635437184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617acff99c64a6_90641824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_604993968617acff9983526_86747800', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1091024026617acff9983f09_53894163', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620703425617acff9984549_04082447', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_604993968617acff9983526_86747800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_604993968617acff9983526_86747800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_1091024026617acff9983f09_53894163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_1091024026617acff9983f09_53894163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_1620703425617acff9984549_04082447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1620703425617acff9984549_04082447',
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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 ftco-animate">


                    <!--Inizio parte sotto il form con cart total e payment method -->
                    <?php if ($_smarty_tpl->tpl_vars['valid']->value == false) {?>
                        <h3>Alcuni campi non sono validi. Inserisci un indirizzo, un metodo di pagamento valido e, se hai un coupon, assicurati che sia valido.</h3>
                    <?php }?>
                    <form method="post" action="/cart/checkout/confirmation" id="ordine">
                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-4 d-flex">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Totale</h3>

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
                                                                <hr>
                                                                <label for="streetaddress">Coupon</label>
                                <div class="d-flex">

                                        <div class="row">
                                            <input id="coupon" type="text" class="form-control w-75" name="option" placeholder="Codice Coupon">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Indirizzi</h3>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
                                        <div class="form-group">
                                             <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" id="ordine" name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value->getId();?>
" class="mr-2" required="required">Via <?php echo $_smarty_tpl->tpl_vars['address']->value->getStreet();?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value->getHomeNumber();?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value->getCity();?>
</label>
                                                </div>
                                             </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <a href="/address" class="btn btn-primary w-50">Aggiungi un Indirizzo</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Metodo di pagamento</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment" id="ordine" value="cash" class="mr-2" required="required"> Contanti</label>
                                        </div>
                                    </div>
                                </div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cards']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                                <label><input type="radio" name="payment" id="ordine" value="<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
" class="mr-2" required="required"> <?php echo $_smarty_tpl->tpl_vars['card']->value->getNumber();?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <a href="/cards" class="btn btn-primary w-50">Aggiungi una Carta</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn btn-primary w-25" style="margin-left: 1rem" id="ordine" type="submit">Ordina</button>
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
