<?php
/* Smarty version 3.1.39, created on 2021-09-28 19:47:58
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\categories\categories-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153554e232de1_30832951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3849993bac37003b3ea81e9c3d7ad011ac1013' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\categories\\categories-add.tpl',
      1 => 1632565451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153554e232de1_30832951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700020346153554e232688_89201761', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_700020346153554e232688_89201761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_700020346153554e232688_89201761',
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
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="nome della categoria" maxlength="20">
                                </div>
                            </div>
                        </div>

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
