<?php
/* Smarty version 3.1.39, created on 2021-09-08 11:43:40
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613885cce92771_17865801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e117c8a92908147aabcd9897dfac342ba97905e' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\orders.tpl',
      1 => 1631094219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613885cce92771_17865801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1016656160613885cce8bb49_76427773', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1016656160613885cce8bb49_76427773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1016656160613885cce8bb49_76427773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
    <div class="row">
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title" style="font-weight: bold">Info dell'ordine</h5>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h5><small>Indirizzo</small><br>placeholder</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <h5><small>Nome del Cliente</small><br><?php echo $_smarty_tpl->tpl_vars['orders']->value[0][1]->getName();?>
</h5>
                </div>
                <div class="col-lg-3 mr-auto">
                  <h5><small>Pagato con</small><br>placeholder</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                  Nome
                </th>
                <th>
                  Quantità
                </th>
                <th>
                  Prezzo
                </th>
                </thead>
                <tbody>
                  <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div style="margin-left:1000px">
              <a class="btn btn-round btn-primary">Accetta ordine</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'admin'} */
}
