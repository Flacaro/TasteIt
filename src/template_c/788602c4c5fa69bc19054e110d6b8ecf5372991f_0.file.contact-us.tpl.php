<?php
<<<<<<< Updated upstream
/* Smarty version 3.1.39, created on 2021-08-21 11:04:39
=======
/* Smarty version 3.1.39, created on 2021-08-21 09:43:55
>>>>>>> Stashed changes
  from 'C:\Users\mohamed\Documents\GitHub\TasteIt\src\templates\contact-us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< Updated upstream
  'unifunc' => 'content_6120c1a7b24676_44585913',
=======
  'unifunc' => 'content_6120aebbeb9d69_23490908',
>>>>>>> Stashed changes
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788602c4c5fa69bc19054e110d6b8ecf5372991f' => 
    array (
      0 => 'C:\\Users\\mohamed\\Documents\\GitHub\\TasteIt\\src\\templates\\contact-us.tpl',
      1 => 1629379589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< Updated upstream
function content_6120c1a7b24676_44585913 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6120aebbeb9d69_23490908 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> Stashed changes
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
<<<<<<< Updated upstream
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7112499266120c1a7b08eb0_34551727', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_554284396120c1a7b0de64_19732815', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "src/templates/base/base.tpl");
}
/* {block 'title'} */
class Block_7112499266120c1a7b08eb0_34551727 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20683173016120aebbdb2805_98071413', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15177546276120aebbdb44c6_46123135', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "src/templates/base/base.tpl");
}
/* {block 'title'} */
class Block_20683173016120aebbdb2805_98071413 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'title' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_7112499266120c1a7b08eb0_34551727',
=======
    0 => 'Block_20683173016120aebbdb2805_98071413',
>>>>>>> Stashed changes
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contattaci<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
<<<<<<< Updated upstream
class Block_554284396120c1a7b0de64_19732815 extends Smarty_Internal_Block
=======
class Block_15177546276120aebbdb44c6_46123135 extends Smarty_Internal_Block
>>>>>>> Stashed changes
{
public $subBlocks = array (
  'body' => 
  array (
<<<<<<< Updated upstream
    0 => 'Block_554284396120c1a7b0de64_19732815',
=======
    0 => 'Block_15177546276120aebbdb44c6_46123135',
>>>>>>> Stashed changes
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="hero-wrap hero-wrap-2" style="background-imagePath: url('../../src/assets/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
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
                                        <p><span>Address:</span><?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getAddress();?>
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
