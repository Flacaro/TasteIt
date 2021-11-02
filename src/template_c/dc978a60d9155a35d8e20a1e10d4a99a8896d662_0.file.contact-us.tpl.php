<?php
/* Smarty version 3.1.39, created on 2021-11-02 17:24:32
  from 'C:\xampp\htdocs\TasteIt\src\templates\contact-us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618166402609f7_50374305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc978a60d9155a35d8e20a1e10d4a99a8896d662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\contact-us.tpl',
      1 => 1635870268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618166402609f7_50374305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153408055961816640259401_73089363', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2031810786181664025a288_59780193', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "src/templates/base/base.tpl");
}
/* {block 'title'} */
class Block_153408055961816640259401_73089363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_153408055961816640259401_73089363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contattaci<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2031810786181664025a288_59780193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2031810786181664025a288_59780193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../src/assets/images/cibo.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Contattaci</h2>
            </div>
        </div>
    </div>
</section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper px-md-4">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Indirizzo:</span>Via <?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getAddress()->getStreet();?>
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
                                        <p><span>Telefono:</span> <a href="tel://1234567920"><?php echo $_smarty_tpl->tpl_vars['restaurant']->value->getPhone();?>
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
                                        <p><span>Sito web</span> <a href="#">tasteit.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'body'} */
}
