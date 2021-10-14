<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:20:06
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\categories\product-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616866c6e63074_86969720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2301cb73be568433011bbf5453a2bd1a25a6a8f' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\categories\\product-edit.tpl',
      1 => 1634232003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616866c6e63074_86969720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355322623616866c6e5f045_56320760', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1355322623616866c6e5f045_56320760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1355322623616866c6e5f045_56320760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Modifica Prodotto</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/products/<?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
/edit" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-7 pr-1">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" required maxlength="20" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
">
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Prezzo$</label>
                                    <input type="number" step="0.01" class="form-control" required name="price" value=<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descrizione</label>
                                <textarea class="form-control textarea" required maxlength="100" name="description"><?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>
</textarea>
                            </div>
                        </div>
                    </div>
                    <input type="file"
                                 name="uploadfile"
                                 value="" />
                    <div class="row">

                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Aggiorna Prodotto</button>
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
