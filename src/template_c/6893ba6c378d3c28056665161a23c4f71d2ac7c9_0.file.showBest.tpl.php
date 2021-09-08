<?php
/* Smarty version 3.1.39, created on 2021-09-08 13:55:23
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\customers\showBest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138a4ab5aef46_46267513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6893ba6c378d3c28056665161a23c4f71d2ac7c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\customers\\showBest.tpl',
      1 => 1631102120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138a4ab5aef46_46267513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18743747166138a4ab5a1e19_22310344', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_18743747166138a4ab5a1e19_22310344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_18743747166138a4ab5a1e19_22310344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-md-12">


                <form action="/admin/customers" method="post">
                    <select name="couponId" id="coupons">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coupons']->value, 'coupon');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['coupon']->value->getId();?>
 con sconto di <?php echo $_smarty_tpl->tpl_vars['coupon']->value->priceCut;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </select>

                    <br/>

                    <button class="btn btn-primary" type="submit">Invia</button>

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
                                <input type="text" hidden name="customers[]" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->getId();?>
">
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

                </form>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'admin'} */
}
