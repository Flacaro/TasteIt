<?php
/* Smarty version 3.1.39, created on 2021-09-02 11:46:22
  from 'C:\xampp\htdocs\TasteIt\src\templates\product\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61309d6e576985_68259568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8df914dc60fa83490a95da5676b2a2ca69d3a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product\\product.tpl',
      1 => 1630575980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61309d6e576985_68259568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- Inizio barra rossa in alto dove ce sign up e login  -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78088879961309d6e561402_45481815', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117067338861309d6e561d41_38170940', 'body');
?>

<!-- Fine della barra di Description , Reviews ecc  --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_78088879961309d6e561402_45481815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_78088879961309d6e561402_45481815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
product<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_117067338861309d6e561d41_38170940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_117067338861309d6e561d41_38170940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!--  inizio schermata del Home e del product con la foto del liquore e delle rose -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('/src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div >
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Produtti <i class="fa fa-chevron-right"></i></a></span> <span> Prodotto <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Prodotto </h2>
            </div>
        </div>
    </div>
    <!-- fine  schermata del Home e del product con la foto del liquore e delle rose -->
</section>
<!-- inizio della schermata del  liquore , prezzo e la sua descrizione -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(/src/assets/images/prod-9.jpg);">
            </div>
            <div class="col-lg-6 product-details pl-md-5 ">
                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <?php if ($_smarty_tpl->tpl_vars['avg']->value != 0) {?>
                        <a href="#" class="mr-2"><?php echo $_smarty_tpl->tpl_vars['avg']->value;?>
</a>

                        <a href="#">
                            <span>
                                                    <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? round($_smarty_tpl->tpl_vars['avg']->value)+1 - (1) : 1-(round($_smarty_tpl->tpl_vars['avg']->value))+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
                                                    <i class="fa fa-star"></i>
                                                   <?php }
}
?>
							   					</span>
                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                        </a>
                        <?php }?>
                </div>
                <p class="price"><span> £ <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</span></p>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</p>
                <div class="row mt-4">
                    <div class="input-group col-md-6 d-flex mb-3">

                        <form id="addProductToCardForm" action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="POST">
                            <div class="d-flex mb-4">
                                <button id="minus" class="mr-2" type="button"><i class="fa fa-minus"></i></button>
                                <input type="text" id="productQuantity" name="quantity" class="quantity form-control input-number" value="1">
                                <button id="plus" class="ml-2" type="button"><i class="fa fa-plus"></i></button>
                            </div>

                                                        <button class="btn btn-primary" style="padding-bottom: 2rem;" type="submit">Add to cart</button>
                        </form>

                        <?php echo '<script'; ?>
>
                            const input = document.querySelector('#productQuantity');
                            input.value = 1;

                            const minusBtn = document.querySelector('#minus');
                            const plusBtn = document.querySelector('#plus');

                            const form = document.querySelector('#addProductToCardForm');


                            if(minusBtn && plusBtn) {
                                minusBtn.addEventListener('click', () => {
                                    if (input.value > 1) {
                                        input.value = parseInt(input.value, 10) - 1;
                                    }
                                });

                                plusBtn.addEventListener('click', () => {
                                    input.value = parseInt(input.value, 10) + 1;
                                });
                            }
                        <?php echo '</script'; ?>
>

                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                    </div>
                </div>

            </div>
        </div>

        <!-- Inizio la barra  del Description , Manifacture , Reviews sotto la foto del liquore  -->
            <div class="row mt-5">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                        <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Manufacturer</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>

                    </div>

                </div>
            <!-- fine della barra  -->
            <div class="col-md-12 ">
                <!-- inizio della descrizione  -->
                <div  class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active"  id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <p class="mb-4"><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</p>
                        </div>
                    </div>

                    <!-- inizio della Manifacture   -->
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Prodotto da TasteIt</h3>
                            <p>Skrewball è stato creato da un team di marito e moglie Americani . Ha creato un cocktail di whisky al burro di arachidi. L'ha trasformato in un marchio, Skrewball.</p>
                        </div>
                    </div>
                    <!-- inizio della Reviews -->
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4"><?php echo count($_smarty_tpl->tpl_vars['reviews']->value);?>
 Recensione/i</h3>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                                <div class="review">
                                    <div class="user-img" style="background-image: url(../../src/assets/images/Fla.jpg)"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left"><?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getName();?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getSurname();?>
</span>
                                            <span class="text-right">25 Aprile 2020</span>
                                        </h4>
                                        <p class="star">
								   				<span>
                                                    <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['review']->value->getStars()+1 - (1) : 1-($_smarty_tpl->tpl_vars['review']->value->getStars())+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
								   					    <i class="fa fa-star"></i>
                                                    <?php }
}
?>
							   					</span>
                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                        </p>
                                        <div >
                                                <div class="item">
                                                    <div >
                                                        <div class="text">
                                                            <p class="mb-4"><?php echo $_smarty_tpl->tpl_vars['review']->value->getComment();?>
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
                            <div>
                                <div class="contact-wrap w-100 p-md-5">
                                    <h3 class="mb-5">Lascia una recensione</h3>

                                    <form  method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Stelle</label>
                                                    <input type="text" class="form-control" name="stars" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Commento</label>
                                                    <textarea name="comment" class="form-control" id="message" cols="100" rows="2" placeholder="Descrivi il prodotto"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Invia" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
