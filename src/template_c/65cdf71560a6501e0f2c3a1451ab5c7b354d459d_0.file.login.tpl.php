<?php
/* Smarty version 3.1.39, created on 2021-09-04 16:56:10
  from 'C:\xampp\htdocs\TasteIt\src\templates\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6133890a9f0bc7_84948311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65cdf71560a6501e0f2c3a1451ab5c7b354d459d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\auth\\login.tpl',
      1 => 1630767365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6133890a9f0bc7_84948311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021651056133890a9e0c52_86112123', 'title');
?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TasteIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/src/assets/css/animate.css">

    <link rel="stylesheet" href="/src/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/src/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/src/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/src/assets/css/flaticon.css">
    <link rel="stylesheet" href="/src/assets/css/style.css">
</head>
<body class="row justify-content-center pb-5">
<div class="col-md-7" style="text-align: center">
    <div class="contact-wrap w-100 p-md-5 p-4">
        <h3 class="mb-4">Login</h3>
        <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="/login">

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="subject">Email</label>
                        <input type="text" class="form-control" style="text-align:center" name="email" id="subject" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="#">Password</label>
                        <input type="text" class="form-control" style="text-align:center" name="password" id="subject" placeholder="Password">
                    </div>
                </div>
            <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <?php }?>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Accedi" class="btn btn-primary">
                        <div class="submitting"></div>
                    </div>
                </div>
        </form>
    </div>
</div>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php echo '<script'; ?>
 src="/src/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/scrollax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/assets/js/main.js"><?php echo '</script'; ?>
><?php }
/* {block 'title'} */
class Block_2021651056133890a9e0c52_86112123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2021651056133890a9e0c52_86112123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
aaaaaa<?php
}
}
/* {/block 'title'} */
}