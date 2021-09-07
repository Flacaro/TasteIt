<?php
/* Smarty version 3.1.39, created on 2021-09-06 20:30:12
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61365e34569076_00571444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ba3c289ebda10070ec4b2aed941bdc0dd73a2b' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\customers.tpl',
      1 => 1630952925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61365e34569076_00571444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83084857161365e3447e442_40284895', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_83084857161365e3447e442_40284895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_83084857161365e3447e442_40284895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Clienti che hanno speso di più</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Cognome
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Totale
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
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getName();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getSurname();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getEmail();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value->getTotal();?>

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
