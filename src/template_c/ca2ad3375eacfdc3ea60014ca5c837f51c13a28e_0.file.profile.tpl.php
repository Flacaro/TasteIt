<?php
/* Smarty version 3.1.39, created on 2021-10-07 11:51:06
  from 'C:\xampp\htdocs\TasteIt\src\templates\user\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ec30a348041_66357822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2ad3375eacfdc3ea60014ca5c837f51c13a28e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user\\profile.tpl',
      1 => 1633600123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ec30a348041_66357822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315210100615ec30a33ac77_25307686', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183206903615ec30a33b576_89790349', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1315210100615ec30a33ac77_25307686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1315210100615ec30a33ac77_25307686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_183206903615ec30a33b576_89790349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_183206903615ec30a33b576_89790349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hero-wrap" style="background-image: url('https://en.free-wallpapers.su/data/media/2319/big/fd0251.jpg');" data-stellar-background-ratio="0.5">
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
                                                <div class="img" style="background-image: url('https://t3.ftcdn.net/jpg/00/22/07/12/500_F_22071281_x49LLrpcJ6ZsCfQBc3XHsZ14U3mNoO5b.jpg');" ></div>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</h3>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
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
                    <h2>Ordini</h2>
                    <div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div class="col-md-3 d-flex">
                                <div class="product ftco-animated">
                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['product']->value->getImagePath();?>
);">
                                        <div class="desc" style="display: flex" >
                                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/add/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                                    <input type="text" id="productQuantity" name="quantity1" class="quantity form-control input-number" value="1" hidden>
                                                    <button style="margin-right: 1rem" id="productQuantity"class="btn btn-primary btn-number" type="submit"><span class="flaticon-shopping-bag"></span></button>
                                                </form>
                                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/addToFavourites/<?php echo $_smarty_tpl->tpl_vars['favId']->value;?>
" method="POST">
                                                    <button class="btn btn-primary btn-number" type="submit"><span class="flaticon-heart"></span></button>
                                                </form>
                                            <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                                                <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="text text-center">
                                        <h2> <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
                                        <h2> <?php echo $_smarty_tpl->tpl_vars['product']->value->getprice();?>
</h2>
                                    </div>
                                </div>
                                <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
/add/<?php echo $_smarty_tpl->tpl_vars['cartId']->value;?>
" method="POST">
                                    <button id="order"class="btn btn-primary btn-number" type="submit">Ordina di nuovo</button>
                                </form>
                            </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
