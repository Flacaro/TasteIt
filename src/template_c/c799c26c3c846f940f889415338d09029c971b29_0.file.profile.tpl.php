<?php
/* Smarty version 3.1.39, created on 2021-10-15 10:57:07
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\user\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61694263ce4fa2_15937719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c799c26c3c846f940f889415338d09029c971b29' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\user\\profile.tpl',
      1 => 1634144580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61694263ce4fa2_15937719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31037556061694263cd8301_49744712', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115969243161694263cd8c08_65595168', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/base/base.tpl');
}
/* {block 'title'} */
class Block_31037556061694263cd8301_49744712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_31037556061694263cd8301_49744712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profilo<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_115969243161694263cd8c08_65595168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_115969243161694263cd8c08_65595168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hero-wrap" style="background-image: url('https://en.free-wallpapers.su/data/media/2319/big/fd0251.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animated d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Profilo</span></h1>
                        <section class="ftco-section ftco-no-pb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <form action="/profile" method="GET">
                                            <div class="sort w-100 text-center ftco-animated">
                                                <div class="img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
');" ></div>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</h3>
                                                <h3 style="color: white"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h3>
                                            </div>
                                        </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animated">
                    <span class="subheading">I tuoi ordini</span>
                    <h2>Ordini</h2>
                        <div class="row">
                            <div class="table-wrap" style="overflow:hidden">
                                <table class="table">

                                    <thead class="thead-primary">
                                    <tr>
                                        <th>Data</th>
                                        <th>Totale</th>
                                        <th>Pagato con</th>
                                        <th>Dettagli</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                        <tr class="alert" role="alert">
                                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->getCreationDate();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->getTotal();?>
</td>
                                            <td><?php if (get_class($_smarty_tpl->tpl_vars['order']->value->getPayment()) == "App\Models\Cash") {?>Contanti<?php } else { ?>Carta di Credito<?php }?></td>
                                            <td>
                                                <form action="/profile/<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
/details" method="POST">
                                                    <input type="text" name="orderId" class="quantity form-control input-number" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" hidden>
                                                    <button style="margin-right: 1rem" class="btn btn-primary btn-number" type="submit">Vai ai Dettagli</button>
                                                </form>
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
    </section>

<?php
}
}
/* {/block 'body'} */
}
