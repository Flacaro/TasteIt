<?php
/* Smarty version 3.1.39, created on 2021-09-07 10:51:18
  from 'C:\Users\selen\OneDrive\Documents\app\src\templates\admin\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61372806e67631_34375927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7a54409b6889d91dd047e351f6a2e9bcdae0d9' => 
    array (
      0 => 'C:\\Users\\selen\\OneDrive\\Documents\\app\\src\\templates\\admin\\categories.tpl',
      1 => 1631004670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61372806e67631_34375927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108718618561372806e5f5d9_53527159', 'admin');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'src/templates/admin/leftMenu.tpl');
}
/* {block 'admin'} */
class Block_108718618561372806e5f5d9_53527159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin' => 
  array (
    0 => 'Block_108718618561372806e5f5d9_53527159',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content">
        <div class="row">
          <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Categorie di prodotti</h4>
                    <a href="/admin/categories/add" class="btn btn-round btn-primary">Aggiungi Categoria</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                        <th>
                          Nome
                        </th>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <tr>
                          <td>
                            <a href="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
/products">
                              <?php echo $_smarty_tpl->tpl_vars['category']->value->getCategoryName();?>

                            <a>
                          </a>
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
  <?php echo '<script'; ?>
>
    function SelectText(element) {
      var doc = document,
        text = element,
        range, selection;
      if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
      } else if (window.getSelection) {
        selection = window.getSelection();
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
      }
    }
    window.onload = function() {
      var iconsWrapper = document.getElementById('icons-wrapper'),
        listItems = iconsWrapper.getElementsByTagName('li');
      for (var i = 0; i < listItems.length; i++) {
        listItems[i].onclick = function fun(event) {
          var selectedTagName = event.target.tagName.toLowerCase();
          if (selectedTagName == 'p' || selectedTagName == 'em') {
            SelectText(event.target);
          } else if (selectedTagName == 'input') {
            event.target.setSelectionRange(0, event.target.value.length);
          }
        }

        var beforeContentChar = window.getComputedStyle(listItems[i].getElementsByTagName('i')[0], '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, ""),
          beforeContent = beforeContentChar.charCodeAt(0).toString(16);
        var beforeContentElement = document.createElement("em");
        beforeContentElement.textContent = "\\" + beforeContent;
        listItems[i].appendChild(beforeContentElement);

        //create input element to copy/paste chart
        var charCharac = document.createElement('input');
        charCharac.setAttribute('type', 'text');
        charCharac.setAttribute('maxlength', '1');
        charCharac.setAttribute('readonly', 'true');
        charCharac.setAttribute('value', beforeContentChar);
        listItems[i].appendChild(charCharac);
      }
    }
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'admin'} */
}
