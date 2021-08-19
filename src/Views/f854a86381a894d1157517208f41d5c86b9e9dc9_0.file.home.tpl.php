<?php
/* Smarty version 3.1.39, created on 2021-08-19 16:25:39
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e69e33ea0b3_47823821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f854a86381a894d1157517208f41d5c86b9e9dc9' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\home.tpl',
      1 => 1629383138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e69e33ea0b3_47823821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234283393611e69e33dee10_48698618', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208192454611e69e33df798_27672615', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_234283393611e69e33dee10_48698618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_234283393611e69e33dee10_48698618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1208192454611e69e33df798_27672615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1208192454611e69e33df798_27672615',
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
                        <p><a href="/src/templates/product/all_products.tpl" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
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
                        <!-- questo nel dubbio ce lo lascio ma non so se lo vogliamo lascia-->
                        <p class="year">
                            <strong class="number" data-number="23">0</strong>
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
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animated">
                            <!--prendi come path il path dell'immagine che ha come id imageId di category-->
                            <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['category']->value->getImagePath();?>
);"></div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['category']->value->getCategoryName();?>
</h3>
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
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">Scopri i Nostri</span>
                    <h2>Piatti Migliori</h2>
                </div>
            </div>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestrateds']->value, 'bestrated');
$_smarty_tpl->tpl_vars['bestrated']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestrated']->value) {
$_smarty_tpl->tpl_vars['bestrated']->do_else = false;
?>
                <div class="col-md-3 d-flex">
                    <div class="product ftco-animated">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url('/src/assets/images/prod-1.jpg');">
                            <div class="desc">
                                <p class="meta-prod d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="text text-center">
                            <span class="sale">Sale</span>
                            <span class="category"><?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getCategory()->getCategoryName();?>
</span>
                            <h2><?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getName();?>
</h2>
                            <p class="mb-0"> <span class="price">$<?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getPrice();?>
</span></p>
                        </div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url(../../src/assets/images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animated">
                    <span class="subheading">placeholder</span>
                    <h2 class="mb-3">Cosa Dicono di Noi</h2>
                </div>
            </div>
            <div class="row ftco-animated">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestreviews']->value, 'bestreview');
$_smarty_tpl->tpl_vars['bestreview']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestreview']->value) {
$_smarty_tpl->tpl_vars['bestreview']->do_else = false;
?>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4"><?php echo $_smarty_tpl->tpl_vars['bestreview']->value->getComment();?>
</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(../../src/assets/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestsellers']->value, 'bestseller');
$_smarty_tpl->tpl_vars['bestseller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestseller']->value) {
$_smarty_tpl->tpl_vars['bestseller']->do_else = false;
?>
                    <div class="col-lg-6 d-flex align-items-stretch ftco-animated">
                        <div class="blog-entry d-flex">
                            <a href="blog-single.html" class="block-20 img" style="background-image: url('../../src/assets/images/image_1.jpg');">
                            </a>
                            <div class="text p-4 bg-light">

                                <h3 class="heading mb-3"><a href="#"><?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getName();?>
</a></h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getDescription();?>
</p>
                                <a href="#" class="btn-custom">Acquista <span class="fa fa-long-arrow-right"></span></a>

                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
