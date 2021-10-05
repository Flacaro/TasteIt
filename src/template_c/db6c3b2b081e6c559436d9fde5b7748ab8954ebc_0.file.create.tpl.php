<?php
/* Smarty version 3.1.39, created on 2021-10-04 16:29:42
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\coupons\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b0fd6ebb0e5_67454025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6c3b2b081e6c559436d9fde5b7748ab8954ebc' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\coupons\\create.tpl',
      1 => 1632662588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b0fd6ebb0e5_67454025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461808943615b0fd6e63449_06359994', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_461808943615b0fd6e63449_06359994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_461808943615b0fd6e63449_06359994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <h4>Scegli uno sconto</h4>
                <div class="card card-user">
                  <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['message']->value != NULL) {?>
                            <h3 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
                        <?php }?>
                      <label for="priceCut">Scegli uno sconto per creare un coupon</label>
                        <form action="/admin/coupons" method="post">
                            <input type="number" id="priceCut" name="price_cut">

                            <button class="btn btn-primary" type="submit">Crea</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
