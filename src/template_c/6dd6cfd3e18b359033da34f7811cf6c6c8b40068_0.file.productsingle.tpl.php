<?php
/* Smarty version 3.1.39, created on 2021-08-26 21:56:48
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\product\productsingle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6127f200cc9295_45773948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd6cfd3e18b359033da34f7811cf6c6c8b40068' => 
    array (

      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\product\\product.tpl',
      1 => 1629540761,

      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6127f200cc9295_45773948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- Inizio barra rossa in alto dove ce sign up e login  -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3241588386127f200cbe387_24942092', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11554166646127f200cbf967_62357448', 'body');
?>

<!-- Fine della barra di Description , Reviews ecc  --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_3241588386127f200cbe387_24942092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3241588386127f200cbe387_24942092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
productsingle<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11554166646127f200cbf967_62357448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11554166646127f200cbf967_62357448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- fine barra rossa -->
<!-- inizio l'interfaccia nera dove ce Liquor Store  -->

<!-- fine della barra di navigazione con le categorie  -->
<!--  inizio schermata del Home e del product con la foto del liquore e delle rose -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div >
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Products <i class="fa fa-chevron-right"></i></a></span> <span> Single Product <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Single Product </h2>
            </div>
        </div>
    </div>
    <!-- fine  schermata del Home e del product con la foto del liquore e delle rose -->
</section>
<!-- inizio della schermata con tutti il tipo  del  liquore , prezzo e la sua descrizione -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../../src/assets/images/prod-9.jpg);">
            </div>
            <div class="col-lg-6 product-details pl-md-5 ">
                <h3>Vino Abruzzese</h3>
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
                <p class="price"><span>$120.00</span></p>
                <p>Questo è il miglior vino che assaggerai nella tua vita perchè è fatto in abruzzo .</p>
                <p>vino fatto con passione del mare abruzzese , montagne abruzzese e le pecore.
                </p>
                <div class="row mt-4">
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="fa fa-minus"></i>
	                	</button>
	            		</span>
                        <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="fa fa-plus"></i>
	                 </button>
	             	</span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">80 pezzi disponibili</p>
                    </div>
                </div>
                <!-- i due buttoni  rossi per aggiungere al carrello o comprare subito   -->
                <p><a href="cart.html" class="btn btn-primary py-3 px-5 mr-2">Aggiungi al Carrello </a><a href="cart.html" class="btn btn-primary py-3 px-5">Compra Subito</a></p>
            </div>
        </div>

        <!-- class="row mt-5" -->

        <!-- Inizio la barra  del Description , Manifacture , Reviews sotto la foto del liquore  -->
        <div class=" row primary py-3 px-5 mr-2">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link ftco-mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Descrizione</a>

                    <a class="nav-link ftco-mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Produttore</a>

                    <a class="nav-link ftco-mr-lg-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Recensioni </a>

                </div>

            </div>
            <!-- fine della barra  -->
            <div class="col-md-12 ">
                <!-- inizio della descrizione  -->
                <div  class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active"  id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Vino Abruzzese grado 12 %</h3>
                            <p>Colore dorato ambrato. Aromi di nocciola di cremoso burro di arachidi, lanugine di marshmallow e scia si mescolano con un corpo medio molto dolce e un wafer al burro di arachidi liscio, interessante, medio-lungo, torta al caramello al burro di arachidi salato, cioccolato al latte e finale di gelato al burro di arachidi. Qualcosa del genere non dovrebbe essere così buono, ma lo è; bevi questo e poi bevi ancora..</p>
                        </div>
                    </div>

                    <!-- inizio della Manifacture   -->
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Product By TasteIT Resturant</h3>
                            <p>Skrewball è stato creato da un team di marito e moglie Americani . Ha creato un cocktail di whisky al burro di arachidi. L'ha trasformato in un marchio, Skrewball.</p>
                        </div>
                    </div>
                    <!-- inizio della Reviews -->
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4"><?php echo count($_smarty_tpl->tpl_vars['reviews']->value);?>
 Recensioni</h3>
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