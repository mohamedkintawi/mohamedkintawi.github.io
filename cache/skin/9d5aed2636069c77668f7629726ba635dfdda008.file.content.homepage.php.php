<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:47
         compiled from "C:\wamp64\www\skins\mican\templates\content.homepage.php" */ ?>
<?php /*%%SmartyHeaderCode:264635b345793378235-93400232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5aed2636069c77668f7629726ba635dfdda008' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\content.homepage.php',
      1 => 1529902002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264635b345793378235-93400232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOCUMENT' => 0,
    'LATEST_PRODUCTS' => 0,
    'LANG' => 0,
    'VAL_SELF' => 0,
    'product' => 0,
    'CTRL_REVIEW' => 0,
    'i' => 0,
    'STORE_URL' => 0,
    'SKIN_FOLDER' => 0,
    'CATALOGUE_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b345795066065_78658752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b345795066065_78658752')) {function content_5b345795066065_78658752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\includes\\lib\\smarty\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['DOCUMENT']->value)) {?>
<div id="announcement">
  <h1><?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['title'];?>
</h1>
  <?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['content'];?>

</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value)) {?>
<div>
  <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['checkout_latest_products'];?>
</h2>
  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
  <div class="latest_product">
	<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="addForm">
	  <p class="image">
		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
		</a>
	  </p>
	  <div class="bottom">
		  <p class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],38,"&hellip;");?>
</a></p>
		  <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']&&$_smarty_tpl->tpl_vars['CTRL_REVIEW']->value) {?>
		  <!-- Please uncomment to enable
		  <p class="rating">
		  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=5) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
		    <?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']>=$_smarty_tpl->tpl_vars['i']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/common/star.png" alt="" />
			<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['review_score']>($_smarty_tpl->tpl_vars['i']->value-1)&&$_smarty_tpl->tpl_vars['product']->value['review_score']<$_smarty_tpl->tpl_vars['i']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/common/star_half.png" alt="" />
			<?php } else { ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/common/star_off.png" alt="" />
			<?php }?>
		  <?php }} ?>
		  </p>
		  -->
		  <?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?>
		  <p class="price"><span class="price_previous"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="price_sale"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span></p>
		  <?php } else { ?>
		  <p class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</p>
		  <?php }?>
		  <p class="actions">
			<!--<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="button_black"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['info'];?>
</a>-->
			<input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" />
			<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_stock']&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
			<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['buy_now'];?>
 &raquo;" class="button_default" />
			<?php } elseif (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
			<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>
" class="button_default disabled" disabled="disabled" />
			<?php }?>
		  </p>
	  </div>
	  	</form>
  </div>
  <?php } ?>
</div>
<?php }?><?php }} ?>
