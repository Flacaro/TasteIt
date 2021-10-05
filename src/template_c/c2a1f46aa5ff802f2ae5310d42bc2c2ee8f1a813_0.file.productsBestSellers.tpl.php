<?php
/* Smarty version 3.1.39, created on 2021-10-04 16:28:40
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\products\productsBestSellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b0f98cf2835_79953549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a1f46aa5ff802f2ae5310d42bc2c2ee8f1a813' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\products\\productsBestSellers.tpl',
      1 => 1633357719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b0f98cf2835_79953549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1256499267615b0f98ce60f6_00264492', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1256499267615b0f98ce60f6_00264492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1256499267615b0f98ce60f6_00264492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Statistiche prodotti</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow:hidden">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Nome Categoria
                        </th>
                        <th>
                            Prodotto più venduto
                        </th>
                        <th>
                            Prodotto meno venduto
                        </th>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>

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
