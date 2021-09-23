<?php
/* Smarty version 3.1.39, created on 2021-09-23 16:45:20
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\coupons\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c93001f2557_56200361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6c3b2b081e6c559436d9fde5b7748ab8954ebc' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\coupons\\create.tpl',
      1 => 1631096003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c93001f2557_56200361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320617705614c93001b04d9_18486554', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1320617705614c93001b04d9_18486554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1320617705614c93001b04d9_18486554',
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
