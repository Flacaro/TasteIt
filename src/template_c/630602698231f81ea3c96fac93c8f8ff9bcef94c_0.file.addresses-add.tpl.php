<?php
/* Smarty version 3.1.39, created on 2021-10-21 12:41:33
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\user\addresses-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617143dd0e9639_82241057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630602698231f81ea3c96fac93c8f8ff9bcef94c' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\user\\addresses-add.tpl',
      1 => 1634812892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617143dd0e9639_82241057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197598297617143dd0e7ef3_85672708', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2006093801617143dd0e89e8_36759094', 'categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1016831379617143dd0e9048_99093953', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_197598297617143dd0e7ef3_85672708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_197598297617143dd0e7ef3_85672708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Carrello<?php
}
}
/* {/block 'title'} */
/* {block 'categories'} */
class Block_2006093801617143dd0e89e8_36759094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_2006093801617143dd0e89e8_36759094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
/* {block 'body'} */
class Block_1016831379617143dd0e9048_99093953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1016831379617143dd0e9048_99093953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Aggiungi un Indirizzo</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <form method="POST" id="contactForm" name="payment" class="contactForm" action="/address/add">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="label" for="email">Città</label>
                        <input required type="text" class="form-control" style="text-align: center" id="city" name="city" minlength="2" maxlength="40">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="label" for="name">CAP</label>
                    <input required type="number" class="form-control" style="text-align: center"  id="cap" name="cap" minlength="5" maxlength="5">
                </div>
            </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="label" for="surname">Via</label>
                        <input required type="text" class="form-control" style="text-align: center"  id="street" name="street">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="label" for="#">Numero</label>
                        <input required type="number" class="form-control" style="text-align: center" id="number" name="number" maxlength="5">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 mt-4" style="text-align: center">
                <div class="form-group">
                    <input hidden type="text" value="signup" name="option">
                    <input type="submit" value="Aggiungi Indirizzo" class="btn btn-primary">
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
