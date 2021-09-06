<?php
/* Smarty version 3.1.39, created on 2021-09-06 20:04:15
  from 'C:\xampp\htdocs\TasteIt\src\templates\admin\productsBestSellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6136581fea3103_77587193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af90ed7bad35559b07b9f5ac97068be32429a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\admin\\productsBestSellers.tpl',
      1 => 1630951044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136581fea3103_77587193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13522175726136581fe9c0b0_97074506', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_13522175726136581fe9c0b0_97074506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_13522175726136581fe9c0b0_97074506',
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
                <div class="table-responsive">
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
