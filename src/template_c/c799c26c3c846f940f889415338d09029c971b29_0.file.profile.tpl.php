<?php
/* Smarty version 3.1.39, created on 2021-09-29 10:45:08
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\user\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615427949e51a3_61247980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c799c26c3c846f940f889415338d09029c971b29' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\user\\profile.tpl',
      1 => 1632902349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615427949e51a3_61247980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317750666615427949e1089_65349933', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863420514615427949e1ca6_88151322', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1317750666615427949e1089_65349933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1317750666615427949e1089_65349933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1863420514615427949e1ca6_88151322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1863420514615427949e1ca6_88151322',
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
                </div>
            </div>

        </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
