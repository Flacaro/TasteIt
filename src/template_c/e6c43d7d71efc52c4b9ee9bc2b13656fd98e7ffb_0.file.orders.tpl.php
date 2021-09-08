<?php
/* Smarty version 3.1.39, created on 2021-09-08 11:17:01
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\orders\orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61387f8dc9af58_48437261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c43d7d71efc52c4b9ee9bc2b13656fd98e7ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\orders\\orders.tpl',
      1 => 1631011166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61387f8dc9af58_48437261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121076048861387f8dc9a775_95992637', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_121076048861387f8dc9a775_95992637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_121076048861387f8dc9a775_95992637',
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
