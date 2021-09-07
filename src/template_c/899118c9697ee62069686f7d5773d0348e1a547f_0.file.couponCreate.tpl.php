<?php
/* Smarty version 3.1.39, created on 2021-09-07 10:20:31
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\couponCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613720cf9fd9c8_65437317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '899118c9697ee62069686f7d5773d0348e1a547f' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\couponCreate.tpl',
      1 => 1631002504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613720cf9fd9c8_65437317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156878600613720cf9f2701_43439562', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_1156878600613720cf9f2701_43439562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_1156878600613720cf9f2701_43439562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Crea il coupon</h5>
            <div class="col-md-3 px-1">
              <div class="form-group">
                <label>inviato da:</label>
                <p>Taste IT</p>
              </div>
            </div>
            <div class="col-md-3 px-1">
              <div class="form-group">
                <label>Indirizzo Email:</label>
                <p>tasteIt@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5 pr-1">
                                   <form action="/admin/couponCreate" method="post">
                    <div>
                      <label for="color">Percentuale sconto:</label>
                      <select name="sconto" id="sconto">
                        <option value="">Seleziona una percentuale di sconto</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricesCut']->value, 'priceCut');
$_smarty_tpl->tpl_vars['priceCut']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['priceCut']->value) {
$_smarty_tpl->tpl_vars['priceCut']->do_else = false;
?>
                          <option value="pricesCut"><?php echo $_smarty_tpl->tpl_vars['priceCut']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
                      <button class="btn btn-primary" type="submit">Invia</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <label>Clienti a cui verrà inviato il coupon</label>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>
                  <div class="form-group">
                    <input type="email" disabled="" class="form-control" placeholder="tasteit@gmail.com" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->getEmail();?>
">
                  </div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </form>
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
