<?php
/* Smarty version 3.1.39, created on 2021-10-07 09:00:42
  from 'C:\xampp\htdocs\TasteIt\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e9b1a18b556_65696640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9669fcc47ea045bd5d11a9f88449e7a267b40e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\home.tpl',
      1 => 1633549332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e9b1a18b556_65696640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1797280813615e9b1a16a6e4_16229550', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_871995340615e9b1a16b764_48779520', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1797280813615e9b1a16a6e4_16229550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1797280813615e9b1a16a6e4_16229550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_871995340615e9b1a16b764_48779520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_871995340615e9b1a16b764_48779520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hero-wrap" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animated d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Taste<span>It</span>.</h1>
                        <p><a href="/products" class="btn btn-primary py-2 px-4">Prodotti</a> <a href="/aboutUs" class="btn btn-white btn-outline-white py-2 px-4">Leggi di più</a></p>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Supporto</h2>
                            <p>Per qualsiasi esigenza non esitare a contattarci tramite numero di telefono o indirizzo e-mail.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-free-delivery"></span>
                        </div>
                        <div class="text">
                            <h2>Consegna Gratuita</h2>
                            <p>I nostri rider consegneranno i tuoi piatti gratuitamente in tutta la città.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animated">
                        <div class="icon">
                            <span class="flaticon-visibility"></span>
                        </div>
                        <div class="text">
                            <h2>Nuovi coupon ogni mese</h2>
                            <p>I clienti più fedeli riceveranno ogni mese un nuovo coupon al loro indirizzo di posta elettronica.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../../src/assets/images/Restaurant.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5">
                    <div class="heading-section">
                        <span class="subheading">Since 1998</span>
                        <h2 class="mb-4">Prova la cucina del ristorante giapponese più vecchio de L'Aquila</h2>

                        <p>descrizione placeholder</p>
                        <p>secondo paragrafo blah blah continuo a scrivere solo perchè così si allunga l'immagine e viene più carino sennò è tagliata brutta lalalalalala scrivo almeno un paio di righe dai
                        non so più che scrivere aaaaaaaagsgsjsiakalksjksjakal</p>
                        <p class="year">
                            <strong class="number" data-number="23">23</strong>
                            <span>Years of Experience In Business</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <div class="col-lg-2 col-md-4">
                        <a href="/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
/products">
                        <div class="sort w-100 text-center ftco-animated">
                            <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['category']->value->getImage();?>
)" ></div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
</h3>
                        </div>
                        </a>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">Scopri i Nostri</span>
                    <h2>Piatti Migliori</h2>
                </div>
            </div>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestRateds']->value, 'bestRated');
$_smarty_tpl->tpl_vars['bestRated']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestRated']->value) {
$_smarty_tpl->tpl_vars['bestRated']->do_else = false;
?>
                <div class="col-md-3 d-flex">
                    <div class="product ftco-animated">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getImagePath();?>
);">
                            <div class="desc" style="display: flex">
                                <p class="meta-prod d-flex">

                                <?php if ($_smarty_tpl->tpl_vars['cartId']->value) {?>
                                <form action="/home/products/<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getId();?>
/addToCart/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                    <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1" hidden>
                                    <button style="margin-right: 1rem" id="productQuantity" class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                </form>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['favId']->value) {?>
                                <form action="/home/products/<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getId();?>
/addToFav/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" method="POST">
                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                </form>
                                <?php }?>
                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getId();?>
">
                                    <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                </form>
                                </p>
                            </div>
                        </div>
                        <a href="/products/<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getId();?>
">
                        <div class="text text-center">
                                                        <h2><?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getName();?>
</h2>
                            <p class="mb-0"> <span class="price">€<?php echo $_smarty_tpl->tpl_vars['bestRated']->value->getPrice();?>
</span></p>
                        </div>
                        </a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url('../../src/assets/images/bg_4.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animated">
                        <h2 class="mb-3">Cosa Dicono dei nostri piatti</h2>
                    </div>
                </div>

                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                            <div class="col-4">
                                <div class="item">
                                    <div class="testimony-wrap py-4">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                        <div class="text">
                                            <p class="mb-4"><?php echo $_smarty_tpl->tpl_vars['review']->value->getComment();?>
</p>
                                            <div class="d-flex align-items-center">
                                                <div class="user-img"style="background-image: url('https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png');"></div>
                                                <div class="pl-3">
                                                    <p class="name"><?php echo $_smarty_tpl->tpl_vars['review']->value->getCustomer()->getName();?>
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">i nostri</span>
                    <h2>Best Seller del Mese</h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestSellers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animated">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['product']->value->getImagePath();?>
);">
                                <div class="desc" style="display: flex" >
                                    <?php if ($_smarty_tpl->tpl_vars['cartId']->value) {?>
                                        <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/add/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                            <input type="text" id="productQuantity" name="quantity1" class="quantity form-control input-number" value="1" hidden>
                                            <button style="margin-right: 1rem" id="productQuantity"class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                        </form>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['favId']->value) {?>
                                        <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToFavourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" method="POST">
                                            <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                        </form>
                                    <?php }?>
                                    <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                        <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="text text-center">
                                <h2> <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
                                <h2> €<?php echo $_smarty_tpl->tpl_vars['product']->value->getprice();?>
</h2>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
