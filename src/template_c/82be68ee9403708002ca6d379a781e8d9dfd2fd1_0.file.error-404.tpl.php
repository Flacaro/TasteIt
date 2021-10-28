<?php
/* Smarty version 3.1.39, created on 2021-10-28 14:06:35
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\error-404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617a924b2de3c2_49812641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82be68ee9403708002ca6d379a781e8d9dfd2fd1' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\error-404.tpl',
      1 => 1635418935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617a924b2de3c2_49812641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153394483617a924b2dd120_79338887', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371510340617a924b2ddae0_40098205', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_153394483617a924b2dd120_79338887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_153394483617a924b2dd120_79338887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_371510340617a924b2ddae0_40098205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_371510340617a924b2ddae0_40098205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section style="background-image: url('../../src/assets/images/error-pages-background.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="text w-100 text-center">
                    <section class="ftco-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-4">
                                    <i class="fa fa-frown-o" aria-hidden="true" style="color: white; font-size: 100px"></i>
                                    <span style="font-size: 100px; color: white">404</span>
                                    <a style="font-size: 20px; color: white">La pagina non esiste.</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</section>
<?php
}
}
/* {/block 'body'} */
}
