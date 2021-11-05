<?php
<<<<<<< Updated upstream
/* Smarty version 3.1.39, created on 2021-08-21 11:04:28
=======
/* Smarty version 3.1.39, created on 2021-08-21 10:37:04
>>>>>>> Stashed changes
  from 'C:\Users\mohamed\Documents\GitHub\TasteIt\src\templates\aboutUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< Updated upstream
  'unifunc' => 'content_6120c19c77c843_20094099',
=======
  'unifunc' => 'content_6120bb30f1c920_69756279',
>>>>>>> Stashed changes
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea69cfae38009bd980bd5012faca7a85082548a' => 
    array (
      0 => 'C:\\Users\\mohamed\\Documents\\GitHub\\TasteIt\\src\\templates\\aboutUs.tpl',
<<<<<<< Updated upstream
      1 => 1629536652,
=======
      1 => 1629535023,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< Updated upstream
function content_6120c19c77c843_20094099 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6120bb30f1c920_69756279 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> Stashed changes
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
<<<<<<< Updated upstream
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1916750976120c19c779b42_07752265', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2025494946120c19c77b379_91500126', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1916750976120c19c779b42_07752265 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19060854786120bb30f16059_05383591', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10604834756120bb30f1a0e5_17590485', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_19060854786120bb30f16059_05383591 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_1916750976120c19c779b42_07752265',
=======
    0 => 'Block_19060854786120bb30f16059_05383591',
>>>>>>> Stashed changes
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
aboutUs<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
<<<<<<< Updated upstream
class Block_2025494946120c19c77b379_91500126 extends Smarty_Internal_Block
=======
class Block_10604834756120bb30f1a0e5_17590485 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'body' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_2025494946120c19c77b379_91500126',
=======
    0 => 'Block_10604834756120bb30f1a0e5_17590485',
>>>>>>> Stashed changes
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<<<<<<< Updated upstream
        
=======
    
>>>>>>> Stashed changes
    <!-- fine barra con home, about... -->

    <!-- immagine con about us -->

    <section class="hero-wrap hero-wrap-2" style="background-imagePath: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
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
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-imagePath: url(../../src/assets/images/image_4.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5">
                    <div class="heading-section">
                        <span class="subheading">Since 1998</span>
                        <h2 class="mb-4">Prova il nostro ristorante TasteIt  </h2>


                        <p>Arrivare nel cuore di Montepulciano, città dalle sensazioni magiche, già di per sé rappresenta un viaggio attraverso i sensi. La vista, l’olfatto, l’udito. Dopo qualche serpentina in un’erta caratterizzata da un panorama mozzafiato che non nasconde certo il Tempio di San Biagio, capolavoro del Sangallo, ecco che passando da una porta, fiancheggiando la Fortezza di Montepulciano, baluardo della cittadina del Poliziano, si incontra TasteIt.

                            Flaviana, Selene e Mohamed , dopo tanti anni nel settore dell’enogastronomia e della ristorazione, hanno deciso di dare vita a questo piccolo e accogliente locale dove chi vi arriva può completare il viaggio dei sensi a Montepulciano unendo ai precedenti tre il tatto e il gusto da ritrovare nei semplici, ma prelibati piatti della tradizione senese.</p>
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
