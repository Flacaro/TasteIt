<?php
/* Smarty version 3.1.39, created on 2021-09-22 20:32:02
  from 'C:\xampp\htdocs\TasteIt\src\templates\user\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b76a2dfeb19_34244854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2ad3375eacfdc3ea60014ca5c837f51c13a28e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user\\profile.tpl',
      1 => 1632335521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b76a2dfeb19_34244854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2011842468614b76a2df2759_27563569', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840722446614b76a2df31e6_44443695', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_2011842468614b76a2df2759_27563569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2011842468614b76a2df2759_27563569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_840722446614b76a2df31e6_44443695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_840722446614b76a2df31e6_44443695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hero-wrap" style="background-image: url();" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animated d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Profilo</span></h1>
                        <section class="ftco-section ftco-no-pb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <form action="/profile" method="GET">
                                            <div class="sort w-100 text-center ftco-animated">
                                                <div class="img" style="background-image: url('https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png');" ></div>
                                                <h3><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
                                                <h3><?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</h3>
                                                <h3><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h3>
                                            </div>
                                        </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">I tuoi ordini</span>
                    <h2>Piatti Migliori</h2>
                </div>
            </div>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestrateds']->value, 'bestrated');
$_smarty_tpl->tpl_vars['bestrated']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestrated']->value) {
$_smarty_tpl->tpl_vars['bestrated']->do_else = false;
?>
                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animated">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getImagePath();?>
);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="/" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <a href="/products/<?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getId();?>
">
                                <div class="text text-center">
                                    <span class="sale">Sale</span>
                                    <span class="category"><?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getCategory()->getCategoryName();?>
</span>
                                    <h2><?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getName();?>
</h2>
                                    <p class="mb-0"> <span class="price">$<?php echo $_smarty_tpl->tpl_vars['bestrated']->value->getPrice();?>
</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animated">
                    <span class="subheading">i nostri</span>
                    <h2>Best Seller del Mese</h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestsellers']->value, 'bestseller');
$_smarty_tpl->tpl_vars['bestseller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bestseller']->value) {
$_smarty_tpl->tpl_vars['bestseller']->do_else = false;
?>
                    <div class="col-lg-6 d-flex align-items-stretch ftco-animated">
                        <div class="blog-entry d-flex">
                            <a href="/products/<?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getId();?>
" class="block-20 img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getImagePath();?>
);">
                            </a>
                            <div class="text p-4 bg-light">

                                <h3 class="heading mb-3"><a href="/products/<?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getName();?>
</a></h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getDescription();?>
</p>
                                <p class="mb-0"> <span class="price">$<?php echo $_smarty_tpl->tpl_vars['bestseller']->value->getPrice();?>
</span></p>

                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
