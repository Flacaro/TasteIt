<?php
/* Smarty version 3.1.39, created on 2021-10-25 20:41:37
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\categories\categories-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176fa61e4c1c0_28718937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3849993bac37003b3ea81e9c3d7ad011ac1013' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\categories\\categories-add.tpl',
      1 => 1634808829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176fa61e4c1c0_28718937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2328483176176fa61e4bb20_52254231', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_2328483176176fa61e4bb20_52254231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_2328483176176fa61e4bb20_52254231',
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
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="nome della categoria" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <input type="file"
                               name="uploadfile"
                               value="" />
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Crea Categoria</button>
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
