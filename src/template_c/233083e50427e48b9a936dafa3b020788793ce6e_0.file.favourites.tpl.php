<?php
/* Smarty version 3.1.39, created on 2021-11-02 18:29:57
  from 'C:\xampp\htdocs\TasteIt\src\templates\favourite\favourites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618175951f8bf4_72961340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233083e50427e48b9a936dafa3b020788793ce6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\favourite\\favourites.tpl',
      1 => 1635872722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618175951f8bf4_72961340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908469815618175951ed961_14530392', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690089536618175951ee2e8_68515911', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_908469815618175951ed961_14530392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_908469815618175951ed961_14530392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
All products<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1690089536618175951ee2e8_68515911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1690089536618175951ee2e8_68515911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://s1.1zoom.me/b6359/903/Meat_products_Salt_536334_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animated mb-5 text-center">
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
                    <?php if ($_smarty_tpl->tpl_vars['products']->value != array()) {?>
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
                                            <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products" method="POST">
                                                <input type="text" name="productId" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" hidden>
                                                <button style="margin-right: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                            </form>
                                            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                                <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                            </form>
                                            <form action="/favourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="POST">
                                                <div class="button delete">

                                                    <input hidden type="text" value="DELETE" name="_method">
                                                    <input hidden type="text" value="delete" name="option">
                                                    <input type="text" name="productId" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" hidden>

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
                    <?php } else { ?>
                        <h3>Non hai ancora inserito prodotti tra i preferiti</h3>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'body'} */
}
