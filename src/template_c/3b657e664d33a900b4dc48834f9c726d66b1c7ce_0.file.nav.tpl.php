<?php
/* Smarty version 3.1.39, created on 2021-09-24 18:21:18
  from 'C:\xampp\htdocs\TasteIt\src\templates\base\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614dfafe0842c0_83637710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b657e664d33a900b4dc48834f9c726d66b1c7ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\base\\nav.tpl',
      1 => 1632500476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614dfafe0842c0_83637710 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrap">
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
        <a class="navbar-brand" href="/home">Taste<span>It</span></a>
        <div class="order-lg-last btn-group">
            <!-- menu dropdown del carrello -->
            <?php if ($_smarty_tpl->tpl_vars['cartId']->value) {?>
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small></small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-toggle="dropdown04">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsC']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <div class="dropdown-item d-flex align-items-start" href="#" id="dropdown-menu">
                        <div class="text pl-3">
                            <h4><?php echo $_smarty_tpl->tpl_vars['p']->value[1];?>
</h4>
                            <p class="mb-0"><a href="#" class="price"></a><span class="quantity ml-3"><?php echo $_smarty_tpl->tpl_vars['p']->value[3];?>
</span></p>
                        </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <a class="dropdown-item text-center btn-link d-block w-100" href="#">

                    <form action="/carts/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
/products">
                        <button class="btn btn-primary btn-number" type="submit">Vai al carrello</span></button>
                    </form>

                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
            <?php }?>
        </div>
        <!-- fine menu dropdown del carrello -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="/aboutUs" class="nav-link">About</a></li>
                <?php if ($_smarty_tpl->tpl_vars['favId']->value) {?>
                <li class="nav-item"><a href="/favourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" class="nav-link">Preferiti</a></li>
                <?php }?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <a class="dropdown-item" href="/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
/products"> <?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
 </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php echo '<script'; ?>
>
    const dropdownLink = document.querySelector('#dropdown04');
    const dropdown = document.querySelector('#dropdown-menu');

    dropdownLink.addEventListener('mouseenter', () => dropdown.classList.add('show'));
    dropdown.addEventListener('mouseleave', () => dropdown.classList.remove('show'));

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    const dropdownLink = document.querySelector('#dropdown');
    const dropdown = document.querySelector('#dropd');

    dropdownLink.addEventListener('mouseenter', () => dropdown.classList.add('show'));
    dropdown.addEventListener('mouseleave', () => dropdown.classList.remove('show'));

<?php echo '</script'; ?>
><?php }
}
