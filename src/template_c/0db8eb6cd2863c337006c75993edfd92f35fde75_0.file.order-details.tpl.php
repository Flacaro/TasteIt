<?php
/* Smarty version 3.1.39, created on 2021-09-08 18:01:50
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\orders\order-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138de6ec779e3_95699899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db8eb6cd2863c337006c75993edfd92f35fde75' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\orders\\order-details.tpl',
      1 => 1631116908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138de6ec779e3_95699899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15296081296138de6ec6d0b9_62384418', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_15296081296138de6ec6d0b9_62384418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_15296081296138de6ec6d0b9_62384418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="card-title" style="margin-left:20px; font-weight: bold">Info sull'ordine</h5>
                    </div>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                <h5><small>Indirizzo</small><br>Via <?php echo $_smarty_tpl->tpl_vars['address']->value->getStreet();?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value->getHomeNumber();?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value->getCity();?>
</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5><small>Nome Cliente</small><br><?php echo $_smarty_tpl->tpl_vars['customer']->value->getName();?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->getSurname();?>
</h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5><small>Pagato con</small><br>$24,6</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow:hidden">
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value->getQuantity();?>

                                </td>
                                <td>
                                    $<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice()*$_smarty_tpl->tpl_vars['product']->value->getQuantity();?>

                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <h5>$<?php echo $_smarty_tpl->tpl_vars['order']->value->getTotal();?>
</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Accetta Ordine</button>
                        </div>
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Rifiuta Ordine</button>
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
