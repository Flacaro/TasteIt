<?php
/* Smarty version 3.1.39, created on 2021-09-06 13:54:44
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61360184ec2677_41029112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dbbb6acd01b20e0e43ca0e2baa6d4281792e952' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\orders.tpl',
      1 => 1630929283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61360184ec2677_41029112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10208462561360184ec1e14_90548645', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_10208462561360184ec1e14_90548645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_10208462561360184ec1e14_90548645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="card card-upgrade">
          <div class="card-header text-center">
            <h3 class="card-title">Paper Dashboard PRO</h3>
            <p class="card-category">Are you looking for more components? Please check our Premium Version of Paper Dashboard PRO.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive table-upgrade">
              <table class="table">
                <th class="text-center">Nome</th>
                <thead>
                <th></th>
                <th class="text-center">totale</th>
                </thead>
                <tbody>
                <tr>
                  <td>Components</td>
                  <td class="text-center">16</td>
                  <td class="text-center">160</td>
                </tr>
                <tr>
                  <td>Plugins</td>
                  <td class="text-center">4</td>
                  <td class="text-center">13</td>
                </tr>
                <tr>
                  <td>Example Pages</td>
                  <td class="text-center">7</td>
                  <td class="text-center">27</td>
                </tr>
                <tr>
                  <td>Login, Register, Pricing, Lock Pages</td>
                  <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                  <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                </tr>
                <tr>
                  <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                  <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                  <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                </tr>
                <tr>
                  <td>Mini Sidebar</td>
                  <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                  <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                </tr>
                <tr>
                  <td>Premium Support</td>
                  <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                  <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="text-center">Free</td>
                  <td class="text-center">Just $39</td>
                </tr>
                <tr>
                  <td class="text-center"></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                  </td>
                  <td class="text-center">
                    <a target="_blank" href="https://www.creative-tim.com/product/paper-dashboard-2-pro?ref=pd-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                  </td>
                </tr>
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
