<?php
/* Smarty version 3.1.39, created on 2021-09-08 11:43:26
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\coupons\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613885be14f7d1_29186544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0702d38d93a79a3962735a89bc8a5cbf284236e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\coupons\\create.tpl',
      1 => 1631094205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613885be14f7d1_29186544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_844896003613885be14b7b6_86235795', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_844896003613885be14b7b6_86235795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_844896003613885be14b7b6_86235795',
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
                            <input type="text" id="priceCut" name="price_cut">

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