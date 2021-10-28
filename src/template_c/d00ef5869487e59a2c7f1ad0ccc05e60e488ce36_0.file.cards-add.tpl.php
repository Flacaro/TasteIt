<?php
/* Smarty version 3.1.39, created on 2021-10-25 20:03:09
  from 'C:\xampp\htdocs\TasteIt\src\templates\user\cards-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176f15d04d267_98914681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00ef5869487e59a2c7f1ad0ccc05e60e488ce36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user\\cards-add.tpl',
      1 => 1635184845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176f15d04d267_98914681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1471116246176f15d04b690_66396648', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29258506176f15d04c4d6_75353605', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4498213136176f15d04cb32_62802507', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1471116246176f15d04b690_66396648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1471116246176f15d04b690_66396648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_29258506176f15d04c4d6_75353605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_29258506176f15d04c4d6_75353605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_4498213136176f15d04cb32_62802507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4498213136176f15d04cb32_62802507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <h2 class="mb-0 bread">Aggiungi una Carta</h2>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-section">
    <div class="container">
    <form method="POST" id="contactForm" name="payment" class="contactForm" action="/cards">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label" for="name">Numero di Carta</label>
                    <input required type="number" class="form-control" style="text-align: center"  id="number" name="number" minlength="10" maxlength="40">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label" for="email">Proprietario</label>
                    <input required type="text" class="form-control" style="text-align: center" id="holder" name="holder" placeholder="Proprietario" minlength="2" maxlength="40">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="label" for="surname">Data di Scadenza</label>
                    <input required type="date" class="form-control" style="text-align: center"  id="date" name="date">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="label" for="#">CVV</label>
                    <input required type="number" class="form-control" style="text-align: center" id="cvv" name="cvv" maxlength="5">
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4" style="text-align: center">
            <div class="form-group">
                <input hidden type="text" value="signup" name="option">
                <input type="submit" value="Aggiungi Carta" class="btn btn-primary">
                <div class="submitting"></div>
            </div>
        </div>
    </form>
    </div>
</section>
<?php
}
}
/* {/block 'body'} */
}