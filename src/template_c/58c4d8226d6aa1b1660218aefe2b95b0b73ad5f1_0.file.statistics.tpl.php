<?php
/* Smarty version 3.1.39, created on 2021-09-07 11:08:53
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61372c25d94fa0_54880146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c4d8226d6aa1b1660218aefe2b95b0b73ad5f1' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\statistics.tpl',
      1 => 1631005732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61372c25d94fa0_54880146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112603916761372c25d8e2f8_79497882', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_112603916761372c25d8e2f8_79497882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_112603916761372c25d8e2f8_79497882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-delivery-fast text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Ordini del mese</p>
                                    <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['numorders']->value;?>
<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i>
                            <?php echo date("F");?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Ricavi del mese</p>
                                    <p class="card-title">$ <?php echo $_smarty_tpl->tpl_vars['revenues']->value;?>
<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i>
                            <?php echo date("F");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-title">Ordini Annuali</h5>
                <p class="card-category">Numero ordini ricevuti nell'anno attuale</p>
            </div>
            <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
                <?php echo '<script'; ?>
>
                    var speedCanvas = document.getElementById("speedChart");

                    var dataFirst = {
                        data: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
,
                        fill: false,
                        borderColor: '#fbc658',
                        backgroundColor: 'transparent',
                        pointBorderColor: '#fbc658',
                        pointRadius: 4,
                        pointHoverRadius: 4,
                        pointBorderWidth: 8,
                    };


                    var speedData = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [dataFirst]
                    };

                    var chartOptions = {
                        legend: {
                            display: false,
                            position: 'top'
                        }
                    };
                <?php echo '</script'; ?>
>
            </div>
            <div class="card-footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-warning"></i> 20<?php echo date("y");?>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'admin'} */
}
