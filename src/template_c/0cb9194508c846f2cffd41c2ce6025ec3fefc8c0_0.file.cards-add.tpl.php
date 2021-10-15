<?php
/* Smarty version 3.1.39, created on 2021-10-15 17:46:02
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\user\cards-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6169a23a7e3ad8_17904558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb9194508c846f2cffd41c2ce6025ec3fefc8c0' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\user\\cards-add.tpl',
      1 => 1634312090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6169a23a7e3ad8_17904558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18518059366169a23a7e25d8_16212827', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14439774686169a23a7e2fc8_68794868', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17398694896169a23a7e3575_66106650', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_18518059366169a23a7e25d8_16212827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18518059366169a23a7e25d8_16212827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_14439774686169a23a7e2fc8_68794868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_14439774686169a23a7e2fc8_68794868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_17398694896169a23a7e3575_66106650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17398694896169a23a7e3575_66106650',
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
    <form method="POST" id="contactForm" name="payment" class="contactForm" action="/cards/add">
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
