<?php
/* Smarty version 3.1.39, created on 2021-09-06 19:52:36
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61365564603a75_08980991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3068c8b88a56e46348a02ff2ec2aa0aa8133392' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\customers.tpl',
      1 => 1630950755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61365564603a75_08980991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360893833613655645fd3d0_38268029', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1360893833613655645fd3d0_38268029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1360893833613655645fd3d0_38268029',
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
                  <div>
                    <th>
                      Nome
                    </th>
                    <th>
                      Cognome
                    </th>
                    <th class="text-right">
                      Totale
                    </th>
                  </div>
                  </thead>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>
                      <td>
                        ciao
                      </td>
                      <td>
                        ciao
                      </td>
                      <td class="text-right">
                        $36,738
                      </td>

                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>

<?php
}
}
/* {/block 'admin'} */
}
