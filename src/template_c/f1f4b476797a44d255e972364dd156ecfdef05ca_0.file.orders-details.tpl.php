<?php
/* Smarty version 3.1.39, created on 2021-10-25 20:56:13
  from 'C:\xampp\htdocs\TasteIt\src\templates\user\orders-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176fdcde500d8_50248267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1f4b476797a44d255e972364dd156ecfdef05ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasteIt\\src\\templates\\user\\orders-details.tpl',
      1 => 1635187231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176fdcde500d8_50248267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11348763866176fdcde3be71_12800608', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21058013286176fdcde3c7b1_50938009', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_11348763866176fdcde3be71_12800608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11348763866176fdcde3be71_12800608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_21058013286176fdcde3c7b1_50938009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21058013286176fdcde3c7b1_50938009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TasteIt\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Carrello<i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Ordine</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">

            <?php if ($_smarty_tpl->tpl_vars['order']->value->getState() != "Accepted") {?>
            <form action="/profile/<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" method="post">
                <input type="text" name="orderId" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" hidden>
                <div style="display: flex; justify-content: center;">
                    <button class="btn btn-primary btn-number mb-2"  type="submit">Metti Prodotti nel Carrello</button>
                </div>
            </form>
            <?php }?>

            <div class="row">

                <div class="table-wrap order-table" >
                    <table class="table">

                        <thead class="thead-primary">
                        <tr>
                            <th>&nbsp;</th>
                            <th>Prodotto</th>
                            <th>Prezzo</th>
                            <th>Quantità</th>
                            <th>Totale</th>
                            <th>Azioni</th>
                            <th>&nbsp;</th>
                        </tr>

                        </thead>

                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getImagePath();?>
);"></div>
                                </td>
                                <td>
                                    <div class="email">
                                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getName();?>
</span>
                                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getDescription();?>
</span>
                                    </div>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getPrice();?>
</td>
                                <td class="quantity">
                                    <div class="input-group" style="width: 9em">
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value[1];?>


                                    </div>
                                </td>
                                <td><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value[0]->getPrice())." * ".((string)$_smarty_tpl->tpl_vars['product']->value[1])),$_smarty_tpl);?>
</td>

                                <td>
                                    <div class="desc" style="display: flex">
                                        <form action="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
">
                                            <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['order']->value->getState() == "Accepted") {?>
                <div style="display:flex; justify-content: center">
                    <h3>Il tuo ordine è stato accettato </h3>
                </div>
                <div style="display:flex; justify-content: center">
                    <h4> Orario di arrivo previsto: <?php echo $_smarty_tpl->tpl_vars['order']->value->getArrivalTime();?>
</h4>
                </div>
                <div style="display:flex; justify-content: center">
                    <form action="/profile/<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
/confirm" method="post">
                        <input type="text" name="orderId" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" hidden>
                        <button class="btn btn-primary btn-number mb-2"  type="submit">Conferma di aver ricevuto l'ordine</button>
                    </form>
                </div>
            <?php }?>
        </div>
    </section>
<?php
}
}
/* {/block 'body'} */
}
