<?php
/* Smarty version 3.1.39, created on 2021-10-28 14:48:37
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\categories\categories-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617a9c258d9749_16896647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4026adca8f246604fa74c7a38fae75e16055863' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\categories\\categories-add.tpl',
      1 => 1635425316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617a9c258d9749_16896647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1682340710617a9c258d8eb3_21940510', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1682340710617a9c258d8eb3_21940510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1682340710617a9c258d8eb3_21940510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Aggiungi Categoria</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/admin/categories" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="nome della categoria" minlength="1" maxlength="20" required>
                                </div>
                            </div>
                        </div>
                        <input required type="file"
                               name="uploadfile"
                               value="" />
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Crea Categoria</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
