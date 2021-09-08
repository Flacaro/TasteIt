<?php
/* Smarty version 3.1.39, created on 2021-09-08 11:25:04
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\coupons\coupons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138817086df56_47465236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766d3d863d8388f7e80c224976ba6ac25a7c961f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\coupons\\coupons.tpl',
      1 => 1631093103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138817086df56_47465236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64293105613881708675e3_18337337', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_64293105613881708675e3_18337337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_64293105613881708675e3_18337337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <a class="btn btn-round btn-primary" href="/admin/coupons/create">
                            Crea un coupon
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Sconto
                                </th>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coupons']->value, 'coupon');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['coupon']->value->getId();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['coupon']->value->priceCut;?>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
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
