<?php
/* Smarty version 3.1.39, created on 2021-09-23 18:38:42
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\orders\order-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cad92803a15_70147854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d7fc5464908fca752b245b63962a8f2a769ac53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\orders\\order-details.tpl',
      1 => 1632414660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614cad92803a15_70147854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208357246614cad927a1978_41668565', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1208357246614cad927a1978_41668565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1208357246614cad927a1978_41668565',
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
                                <h5><small>Indirizzo</small><br>Via <?php echo $_smarty_tpl->tpl_vars['order']->value->getAddress()->getStreet();?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->getAddress()->getHomeNumber();?>
, <?php echo $_smarty_tpl->tpl_vars['order']->value->getAddress()->getCity();?>
</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5><small>Nome Cliente</small><br><?php echo $_smarty_tpl->tpl_vars['customer']->value->getName();?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->getSurname();?>
</h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5><small>Pagato con</small><br><?php if (get_class($_smarty_tpl->tpl_vars['order']->value->getPayment()) == "App\Models\Cash") {?>Contanti<?php } else { ?>Carta di Credito<?php }?></h5>
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
                    <?php if ($_smarty_tpl->tpl_vars['order']->value->getState() == "Pending") {?>
                    <div class="d-flex" >
                        <form method="POST" action="">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Accetta Ordine</button>
                            </div>
                        </form>
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Rifiuta Ordine</button>
                            </div>
                    </div>
                    <?php } else { ?>
                        <div style="text-align: center">
                        <h3><?php echo $_smarty_tpl->tpl_vars['order']->value->getState();?>
</h3>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
