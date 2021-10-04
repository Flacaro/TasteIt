<?php
/* Smarty version 3.1.39, created on 2021-10-04 16:30:27
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\coupons\coupons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b100312f913_43221342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4296d691c67e027445d3a0bb4cba69bfe3cf07' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\coupons\\coupons.tpl',
      1 => 1633357825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b100312f913_43221342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_419075877615b1003126e82_54701238', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_419075877615b1003126e82_54701238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_419075877615b1003126e82_54701238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-8">
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
