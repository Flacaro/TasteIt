<?php
/* Smarty version 3.1.39, created on 2021-10-24 19:10:48
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\coupons\coupons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6175939820f882_97006790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766d3d863d8388f7e80c224976ba6ac25a7c961f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\coupons\\coupons.tpl',
      1 => 1635071877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6175939820f882_97006790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1340128098617593982063d1_50417209', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1340128098617593982063d1_50417209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1340128098617593982063d1_50417209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <?php if ($_smarty_tpl->tpl_vars['coupons']->value != array()) {?>
                <div class="card card-user">
                    
                    <div class="card-body">

                        <div class="table-responsive" style="overflow:hidden">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Sconto
                                </th>
                                <th>
                                    Data di Scadenza
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
                                            <?php echo $_smarty_tpl->tpl_vars['coupon']->value->getpriceCut();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['coupon']->value->getExpirationDate();?>

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
            <?php } else { ?>
            <h3>Non ci sono coupon attivi al momento.</h3>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
