<?php
/* Smarty version 3.1.39, created on 2021-08-17 15:35:05
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bbb09ad6344_95162601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f854a86381a894d1157517208f41d5c86b9e9dc9' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\home.tpl',
      1 => 1629207304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611bbb09ad6344_95162601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298301672611bbb09ad5343_13562951', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1384459112611bbb09ad5c62_20455277', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_1298301672611bbb09ad5343_13562951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1298301672611bbb09ad5343_13562951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1384459112611bbb09ad5c62_20455277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1384459112611bbb09ad5c62_20455277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="hero-wrap" style="background-image: url('../../src/templates/images/bg_5.jpg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Taste<span>It</span>.</h1>
                        <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                     </div>
                        </div>
        </div>
    </div>


<?php
}
}
/* {/block 'body'} */
}
