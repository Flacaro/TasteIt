<?php
/* Smarty version 3.1.39, created on 2021-08-27 14:56:25
  from 'C:\xampp\htdocs\TasteIt\src\templates\product\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128e0f9ad6434_73076632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8df914dc60fa83490a95da5676b2a2ca69d3a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\product\\product.tpl',
      1 => 1630068984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128e0f9ad6434_73076632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- Inizio barra rossa in alto dove ce sign up e login  -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7589644416128e0f9acb5e6_80559570', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10984246316128e0f9acc282_57501855', 'body');
?>

<!-- Fine della barra di Description , Reviews ecc  --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_7589644416128e0f9acb5e6_80559570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7589644416128e0f9acb5e6_80559570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
product<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_10984246316128e0f9acc282_57501855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10984246316128e0f9acc282_57501855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!--  inizio schermata del Home e del product con la foto del liquore e delle rose -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
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
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                    </p>

                </div>
                <p class="price"><span> £ <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</span></p>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</p>
                <div class="row mt-4">
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
                         <form action="/products/<?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
/update" method="POST" style="float: right">
                                <input hidden type="text" value="PUT" name="_method">
                                <input hidden type="text" value="minus" name="option">
	                	<button type="submit" class="quantity-left-minus btn"  data-type="minus" data-field="" value="minus">
	                   <i class="fa fa-minus"></i>
	                	</button>
                         </form>
	            		</span>
                        <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
" min="1" max="100">
                        <span class="input-group-btn ml-2">
                           <form action="/products/<?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
/update" method="POST" style="float: right">
                                <input hidden type="text" value="PUT" name="_method">
                                <input hidden type="text" value="plus" name="option">

                                 <button type="submit" class="quantity-right-plus btn" data-type="plus" data-field="" value="plus">

	                                <i class="fa fa-plus"></i>
	                            </button>
                            </form>
	             	</span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                    </div>
                </div>

                <!-- i due buttoni  rossi per aggiungere al carrello o comprare subito   -->
                <p><a href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToCart" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a><a href="cart.html" class="btn btn-primary py-3 px-5">Buy now</a></p>
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
                                            <span class="text-left">Flaviana Caroselli </span>
                                            <span class="text-right">25 Aprile 2020</span>
                                        </h4>
                                        <p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
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
                            <div class="col-md-4">
                                <div class="rating-wrap">
                                    <h3 class="mb-4">Lascia una recensione</h3>
                                    <p class="star">
							   				<span>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					(98%)
						   					</span>
                                        <span>20 Reviews</span>
                                    </p>
                                    <p class="star">
							   				<span>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					(85%)
						   					</span>
                                        <span>10 Reviews</span>
                                    </p>
                                    <p class="star">
							   				<span>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					(98%)
						   					</span>
                                        <span>5 Reviews</span>
                                    </p>
                                    <p class="star">
							   				<span>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					(98%)
						   					</span>
                                        <span>0 Reviews</span>
                                    </p>
                                    <p class="star">
							   				<span>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					<i class="fa fa-star"></i>
							   					(98%)
						   					</span>
                                        <span>0 Reviews</span>
                                    </p>
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
