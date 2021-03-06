<?php
/* Smarty version 3.1.40, created on 2021-11-05 13:59:53
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61852ac9cbe234_94714817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78ee453509fc4516f4e4d014268a69fe2066f7a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\statistics.tpl',
      1 => 1636117033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61852ac9cbe234_94714817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143524608261852ac9cb7053_35517993', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_143524608261852ac9cb7053_35517993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_143524608261852ac9cb7053_35517993',
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
                            <i class="fa fa-calendar-o" style="color:#9C9C9C"></i>
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
                            <i class="fa fa-calendar-o" style="color:#9C9C9C"></i>
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
                                    <i class="nc-icon nc-bag-16" style="color: cornflowerblue"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Prodotto pi?? venduto</p>
                                    <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['best']->value->getName();?>
<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            ??? <?php echo $_smarty_tpl->tpl_vars['best']->value->getPrice();?>

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
                                    <i class="nc-icon nc-bag-16" style="color: #FFE22B"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Prodotto meno venduto</p>
                                    <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['worst']->value->getName();?>
<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            ??? <?php echo $_smarty_tpl->tpl_vars['worst']->value->getPrice();?>

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
                        borderColor: '#B7472A',
                        backgroundColor: 'transparent',
                        pointBorderColor: '#B7472A',
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
