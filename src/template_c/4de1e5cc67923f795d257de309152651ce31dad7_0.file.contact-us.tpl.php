<?php
/* Smarty version 3.1.39, created on 2021-10-06 17:52:21
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\contact-us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615dc635095249_91951137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4de1e5cc67923f795d257de309152651ce31dad7' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\contact-us.tpl',
      1 => 1633535539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615dc635095249_91951137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1155841794615dc63508fdb9_92250040', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148232627615dc6350908b7_43534553', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "src/templates/base/base.tpl");
}
/* {block 'title'} */
class Block_1155841794615dc63508fdb9_92250040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1155841794615dc63508fdb9_92250040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contattaci<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1148232627615dc6350908b7_43534553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1148232627615dc6350908b7_43534553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contattaci<i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Contattaci</h2>
            </div>
        </div>
    </div>
</section>

    <section class="ftco-section bg-light">
        <div class="container">
            <!--div con le pallette per address ecc e la mappa con accanto il form -->
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">
                        <!--parte con le pallette per address ecc -->
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span>Via <?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getAddress()->getStreet();?>
 <?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getAddress()->getHomeNumber();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getAddress()->getCity();?>
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920"><?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getPhone();?>
</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getEmail();?>
</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="#">tasteit.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fine parte bianca prima del footer -->
        </div>
    </section>
<?php
}
}
/* {/block 'body'} */
}
