<?php
/* Smarty version 3.1.39, created on 2021-08-17 19:48:37
  from 'C:\xampp\htdocs\TasteIt\src\templates\base\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bf675cde8e4_20547035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b657e664d33a900b4dc48834f9c726d66b1c7ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\base\\nav.tpl',
      1 => 1629221828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611bf675cde8e4_20547035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> tasteit@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="reg">
                    <p class="mb-0"><a href="#" class="mr-2">Sign Up</a> <a href="#">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Taste<span>It</span></a>
        <div class="order-lg-last btn-group">
            <!-- menu dropdown del carrello -->
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(../../assets/images/prod-1.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Bacardi 151</h4>
                        <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
        </div>
        <!-- fine menu dropdown del carrello -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="category.tpl"> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_606646150611bf675cddf64_57740521', 'categories');
?>
 </a>
                    </div>
                </li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav><?php }
/* {block 'categories'} */
class Block_606646150611bf675cddf64_57740521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'categories' => 
  array (
    0 => 'Block_606646150611bf675cddf64_57740521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'categories'} */
}
