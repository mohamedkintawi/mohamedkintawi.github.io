<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:50
         compiled from "C:\wamp64\www\skins\mican\templates\box.basket.php" */ ?>
<?php /*%%SmartyHeaderCode:67795b3457965a8be0-45058322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164d1cf8908127c77536263f4b2e322cbf8a57f2' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.basket.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67795b3457965a8be0-45058322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'CONTENTS' => 0,
    'item' => 0,
    'CART_ITEMS' => 0,
    'CART_TOTAL' => 0,
    'STORE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b3457967e8c23_77161241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3457967e8c23_77161241')) {function content_5b3457967e8c23_77161241($_smarty_tpl) {?><div id="basket_summary">
  <h3 class="hidden"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
</h3>
  <ul>
  	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CONTENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li class="hidden">
	  <span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
 &times; <?php echo $_smarty_tpl->tpl_vars['item']->value['name_abbrev'];?>
</a>
	</li>
	<?php } ?>
  </ul>
  <p class="basket_items">
	<?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_item_count'];?>

  </p>
  <p class="basket_total">
	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['total'];?>
: <?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>

  </p>
  <p class="view_basket animate_basket"><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=basket" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['view_basket'];?>
" class="button_default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['view_basket'];?>
 &raquo;</a></p>
</div><?php }} ?>
