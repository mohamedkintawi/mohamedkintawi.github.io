<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:51
         compiled from "C:\wamp64\www\skins\mican\templates\box.featured.php" */ ?>
<?php /*%%SmartyHeaderCode:110535b345797e9cf23-27459693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b654e1b6252c5046d8d00d655d2db1a5d154e3' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.featured.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110535b345797e9cf23-27459693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'VAL_SELF' => 0,
    'featured' => 0,
    'CATALOGUE_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b345798170ca3_84238058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b345798170ca3_84238058')) {function content_5b345798170ca3_84238058($_smarty_tpl) {?><div id="featured_product">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_feature'];?>
</h3>
  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="addForm" enctype="application/x-www-form-urlencoded">
	  <div class="wrapper_top">
	  <p class="image">
		<a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
" />
		</a>
	  </p>
	  <p class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</a></p>
	  </div>
	  <div class="wrapper_bottom">
	  <?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_sale']) {?>
	  <p class="price"><span class="price_previous"><?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>
</span> <span class="price_sale"><?php echo $_smarty_tpl->tpl_vars['featured']->value['sale_price'];?>
</span></p>
	  <?php } else { ?>
	  <p class="price"><?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>
</p>
	  <?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_purchase']&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
  	  <input type="hidden" name="add[<?php echo $_smarty_tpl->tpl_vars['featured']->value['product_id'];?>
][quantity]" value="1" />
  	  <input type="submit" class="button_default" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['buy_now'];?>
 &raquo;" />
  	  <?php }?>
  	  </div>
  	    </form>
</div><?php }} ?>
