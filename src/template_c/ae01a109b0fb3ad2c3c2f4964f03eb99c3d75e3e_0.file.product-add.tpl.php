<?php
/* Smarty version 3.1.39, created on 2021-09-08 11:55:15
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\categories\product-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61388883b85f82_81808939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae01a109b0fb3ad2c3c2f4964f03eb99c3d75e3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\categories\\product-add.tpl',
      1 => 1631011166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61388883b85f82_81808939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188363032461388883b83624_66651188', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_188363032461388883b83624_66651188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_188363032461388883b83624_66651188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Aggiungi Prodotto</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/products/create">
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="nome del prodotto" maxlength="20">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Prezzo$</label>
                                    <input type="number" step="0.01" class="form-control" name="price" placeholder="prezzo del prodotto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descrizione</label>
                                    <textarea class="form-control textarea" name="description" placeholder="piccola descrizione del prodotto" maxlength="100"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Crea Prodotto</button>
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
