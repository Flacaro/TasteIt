<?php
/* Smarty version 3.1.39, created on 2021-09-23 15:41:45
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\customers\showBest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c8419d682b0_90621804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1beb4d20da8ba52b4a7bc667b478cd11e14e0bec' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\customers\\showBest.tpl',
      1 => 1632404499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c8419d682b0_90621804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782111109614c8419d5f012_91756591', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_782111109614c8419d5f012_91756591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_782111109614c8419d5f012_91756591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-12">


                <form action="/admin/customers" method="post">
                    
                    <div class="row">
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label>Percentuale%</label>
                                <input type="text" class="form-control" name="pricecut" placeholder="Percentuale di sconto del coupon" maxlength="20">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Data di Scadenza</label>
                                <input type="date" class="form-control" name="expiration">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Invia</button>

                    <h6>I coupon verranno inviati a:</h6>

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
                                <input type="text" hidden name="customers[]" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->getId();?>
">
                                <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->getName();?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->getSurname();?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->getEmail();?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['customer']->value[1];?>

                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
