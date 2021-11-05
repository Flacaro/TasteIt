<?php
/* Smarty version 3.1.40, created on 2021-11-05 14:00:03
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\customers\customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61852ad3542a08_63278121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c1b5108a62ca287847c329943f402f1058e015' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\customers\\customer.tpl',
      1 => 1636117033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61852ad3542a08_63278121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55118933761852ad353afe8_66934480', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_55118933761852ad353afe8_66934480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_55118933761852ad353afe8_66934480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Clienti</h4>
                        <a class="btn btn-primary" href="/admin/customers/best">Show best</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive" style="overflow:hidden">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Cognome
                                </th>
                                <th>
                                    Email
                                </th>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>

                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getId();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getName();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getSurname();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getEmail();?>

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
