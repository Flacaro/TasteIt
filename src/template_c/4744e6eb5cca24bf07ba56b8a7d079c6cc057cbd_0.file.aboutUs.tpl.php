<?php
/* Smarty version 3.1.39, created on 2021-09-27 21:08:12
  from 'C:\xampp\htdocs\TasteIt\src\templates\aboutUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6152169c1cec45_04727573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4744e6eb5cca24bf07ba56b8a7d079c6cc057cbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\aboutUs.tpl',
      1 => 1632565451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6152169c1cec45_04727573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6549439266152169c1cdc49_65276875', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8391429746152169c1ce563_88098743', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_6549439266152169c1cdc49_65276875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6549439266152169c1cdc49_65276875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
aboutUs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8391429746152169c1ce563_88098743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8391429746152169c1ce563_88098743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    


    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div >
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">About Us</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <!-- c'era ftco-animate ma rompe tutto, le animazioni le dobbiamo riguarda per forza-->
                    <div class="intro d-lg-flex w-100">
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
                    <div class="intro color-2 d-lg-flex w-100">
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
                    <div class="intro color-1 d-lg-flex w-100">
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
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../../src/assets/images/image_4.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5">
                    <div class="heading-section">
                        <span class="subheading">Since 1998</span>
                        <h2 class="mb-4">Prova il nostro ristorante TasteIt  </h2>


                        <p>Arrivare nel cuore di Montepulciano, città dalle sensazioni magiche, già di per sé rappresenta un viaggio attraverso i sensi. La vista, l’olfatto, l’udito. Dopo qualche serpentina in un’erta caratterizzata da un panorama mozzafiato che non nasconde certo il Tempio di San Biagio, capolavoro del Sangallo, ecco che passando da una porta, fiancheggiando la Fortezza di Montepulciano, baluardo della cittadina del Poliziano, si incontra TasteIt.

                            Flaviana, Selene dopo tanti anni nel settore dell’enogastronomia e della ristorazione, hanno deciso di dare vita a questo piccolo e accogliente locale dove chi vi arriva può completare il viaggio dei sensi a Montepulciano unendo ai precedenti tre il tatto e il gusto da ritrovare nei semplici, ma prelibati piatti della tradizione senese.</p>
                        <!-- questo nel dubbio ce lo lascio ma non so se lo vogliamo lascia-->
                        <p class="year">
                            <strong class="number" data-number="25">0</strong>
                            <span>Anni di esperienza</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section ftco-no-pb">




<?php
}
}
/* {/block 'body'} */
}
