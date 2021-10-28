<?php
/* Smarty version 3.1.39, created on 2021-10-28 15:44:26
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\categories\product-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617aa93a24b5c9_44797926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4edbd2f6272fd12d061337cbf7b71ba72c5a5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\categories\\product-edit.tpl',
      1 => 1635071877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617aa93a24b5c9_44797926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1817702932617aa93a2466a4_90141103', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1817702932617aa93a2466a4_90141103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1817702932617aa93a2466a4_90141103',
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
                            <button type="submit" class="btn btn-primary">Aggiorna Prodotto</button>
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
