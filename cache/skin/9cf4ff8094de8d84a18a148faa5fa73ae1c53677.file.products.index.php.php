<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 01:39:43
         compiled from "C:\wamp64\www\admin\skins\default\templates\products.index.php" */ ?>
<?php /*%%SmartyHeaderCode:241865b343c5faf8b65-25033880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf4ff8094de8d84a18a148faa5fa73ae1c53677' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\products.index.php',
      1 => 1529901918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241865b343c5faf8b65-25033880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'DISPLAY_PRODUCT_LIST' => 0,
    'LANG' => 0,
    'CAT_LIST' => 0,
    'cat_dropdown' => 0,
    'CURRENT_CAT' => 0,
    'SORT_CHARACTERS' => 0,
    'character' => 0,
    'SORT_CHARS_RESET_LINK' => 0,
    'THEAD' => 0,
    'PRODUCTS' => 0,
    'product' => 0,
    'SKIN_VARS' => 0,
    'translation' => 0,
    'TOTAL_RESULTS' => 0,
    'PAGINATION' => 0,
    'DISPLAY_PRODUCT_FORM' => 0,
    'PRODUCT' => 0,
    'MANUFACTURERS' => 0,
    'manufacturer' => 0,
    'DISPLAY_MATRIX_STOCK_NOTE' => 0,
    'GOOGLE_CATS' => 0,
    'cat' => 0,
    'CUSTOMER_GROUPS' => 0,
    'group' => 0,
    'TAXES' => 0,
    'tax' => 0,
    'QUANTITY_DISCOUNTS' => 0,
    'discount' => 0,
    'tax_type' => 0,
    'quantity' => 0,
    'CATEGORIES' => 0,
    'category' => 0,
    'PRODUCT_OPTIONS' => 0,
    'options' => 0,
    'option' => 0,
    'OPTIONS_SELECT' => 0,
    'member' => 0,
    'OPTIONS_JSON' => 0,
    'OPTION_SETS' => 0,
    'OPTION_SETS_ENABLED' => 0,
    'set' => 0,
    'option_set' => 0,
    'OPTIONS_MATRIX' => 0,
    'row' => 0,
    'VAL_DIGITALDIR_EMPTY' => 0,
    'CUSTOMER_REVIEWS' => 0,
    'review' => 0,
    'DISPLAY_TRANSLATE' => 0,
    'TRANSLATIONS' => 0,
    'TRANSLATE' => 0,
    'FORM_HASH' => 0,
    'JSON_IMAGES' => 0,
    'DEFAULT_IMAGE' => 0,
    'DISPLAY_TRANSLATE_FORM' => 0,
    'TRANS' => 0,
    'LANGUAGES' => 0,
    'language' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b343c63702ad1_10129297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b343c63702ad1_10129297')) {function content_5b343c63702ad1_10129297($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_PRODUCT_LIST']->value)) {?>
  <div id="general" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_product_inventory'];?>
</h3>

	<table width="100%">
  		<tr>
			<td align="right">
				<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['filter'];?>
: <select id="cat_subset">
					<option value="any"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['any'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['cat_dropdown'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat_dropdown']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CAT_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat_dropdown']->key => $_smarty_tpl->tpl_vars['cat_dropdown']->value) {
$_smarty_tpl->tpl_vars['cat_dropdown']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['cat_dropdown']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat_dropdown']->value['cat_id']==$_smarty_tpl->tpl_vars['CURRENT_CAT']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat_dropdown']->value['name'];?>
</option>
					<?php } ?>
				</select>
			</td>
  		</tr>
  	</table>

  	<table width="100%">
  		<tr>
  			<?php  $_smarty_tpl->tpl_vars['character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SORT_CHARACTERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['character']->key => $_smarty_tpl->tpl_vars['character']->value) {
$_smarty_tpl->tpl_vars['character']->_loop = true;
?>
  			<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['character']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['character']->value['char'];?>
</a></td>
  			<?php } ?>
  			<td width="1%"><a href="<?php echo $_smarty_tpl->tpl_vars['SORT_CHARS_RESET_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['any'];?>
</a></td>
  		</tr>
  	</table>

  	<table width="100%">
  		<thead>
  			<tr>
	  			<th nowrap="nowrap">&nbsp;</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['status'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['digital'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['image'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['name'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['product_code'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['price'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['stock_level'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['updated'];?>
</th>
	  			<th nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['THEAD']->value['translations'];?>
</th>
	  			<th nowrap="nowrap">&nbsp;</th>
  			</tr>
  		</thead>
	  	<tbody class="list">
	  		<?php if (isset($_smarty_tpl->tpl_vars['PRODUCTS']->value)) {?>
	  		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	  		<tr>
		  		<td align="center" width="10"><input type="checkbox" name="delete[]" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" class="table" /></td>
		  		<td align="center"><input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
]" id="status_<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['status'];?>
" class="toggle" /></td>
		  		<td align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['type_icon'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['type_alt'];?>
" /></td>
				<td align="center">
					<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['image_path_tiny'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['image_path_large'];?>
" class="colorbox" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image_path_tiny'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" /></a>
					<?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['image_path_large'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['image_path_large'];?>
" class="colorbox" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/image.png" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" /></a>
					<?php }?>
				</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['category'])) {?>
				<br />
				<span class="light-category"><?php echo $_smarty_tpl->tpl_vars['product']->value['category'];?>
</span>
				<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['product']->value['product_code'];?>
</td>
		 		<td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
	 			<td align="center"><?php echo $_smarty_tpl->tpl_vars['product']->value['stock_level'];?>
</td>
		  		<td>
		  		<?php if ($_smarty_tpl->tpl_vars['product']->value['updated']=='0000-00-00 00:00:00') {?>
		  			<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['unknown'];?>

		  		<?php } else { ?>
		  			<?php echo $_smarty_tpl->tpl_vars['product']->value['updated'];?>

		  		<?php }?>
		  		</td>
		  		<td align="center">
		  			<?php  $_smarty_tpl->tpl_vars['translation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['translation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['translations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['translation']->key => $_smarty_tpl->tpl_vars['translation']->value) {
$_smarty_tpl->tpl_vars['translation']->_loop = true;
?>
		  			<a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['link'];?>
"><img src="language/flags/<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
" /></a>
		  			<?php } ?>
		  		</td>
		  		<td align="center">
		  		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['link_clone'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_clone'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['clone'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['clone'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/clone.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['clone'];?>
" /></a>
				<?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_preview'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['preview'];?>
" target="_blank" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['preview'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/magnifier.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['preview'];?>
" /></a>
		 			<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_edit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a>
				</td>
	  		</tr>
	  		<?php } ?>
	  	</tbody>
	  	<tfoot>
	  	  <tr>
	  		<td width="10">
	  		  <span><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/select_all.gif" alt="" />
	  		</td>
	  		<td colspan="11"><a href="#" class="check-all" rel="table"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['check_uncheck'];?>
</a>
	  		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['maintain']['db_with_selected'];?>

	  		  <select name="action" class="textbox">
	    	    <optgroup label="">
	      	      <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
		  		  <option value="delete"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
</option>
	    	    </optgroup>
			  </select>
	  		</td>
	  	  </tr>
	  		<?php } else { ?>
	  		<tr>
		  		<td align="center" colspan="11"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</td>
	  		</tr>
	  		<?php }?>
	  		<tr>
	  		<td colspan="11">
	  		<div class="pagination">
		  	<span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['total'];?>
: <?php echo $_smarty_tpl->tpl_vars['TOTAL_RESULTS']->value;?>
</span>
		  	<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
&nbsp;</div>
	  		</td>
	  		</tr>
	  	</tfoot>
  	</table>
  </div>
  
  
  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  <div class="form_control">
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_PRODUCT_FORM']->value)) {?>
  <div id="general" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_information_general'];?>
</h3>
	<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_id'];?>
" />
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_information_basic'];?>
</legend>
	  <div><label for=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label><span><input type="hidden" name="status" id="product_status" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['status'];?>
" class="toggle" /></span></div>
	  <div><label for="name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_name'];?>
</label><span><input name="name" id="name" class="textbox required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" /></span></div>
	  <div><label for="manufacturer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_manufacturer'];?>
</label>
	    <span>
	  		<select name="manufacturer" id="manufacturer" class="textbox" type="text">
	  			<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</option>
	  			<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MANUFACTURERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
	  			<option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
	  			<?php } ?>
	  		</select>
	  	</span>
	   </div>
	   <div><label for="condition"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['condition'];?>
</label>
	    <span>
	  		<select name="condition" id="condition" class="textbox" type="text">
	  			<option value="new" <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['condition']=='new') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['condition_new'];?>
</option>
				<option value="used" <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['condition']=='used') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['condition_used'];?>
</option>
				<option value="refurbished" <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['condition']=='refurbished') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['condition_refurbished'];?>
</option>
	  		</select>
	  	</span>
	   </div>
	  <div><label for="product_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code'];?>
</label><span><input name="product_code" id="product_code" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_code'];?>
" /> <input name="product_code_auto" id="product_code_auto" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['auto_code_checked'];?>
 /> <input name="product_code_old" id="product_code_old" type="hidden" value="" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code_auto'];?>
</span></div>
	  <div><label for="product_weight"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_weight'];?>
</label><span><input name="product_weight" id="product_weight" class="textbox number" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_weight'];?>
" /></span></div>
	  <div><label for="featured"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_latest'];?>
</label><span><input type="hidden" name="featured" id="featured" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['featured'];?>
" /></span></div>
	</fieldset>

	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_stock_control'];?>
</legend>
	  <div><label for="use_stock_level"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level_use'];?>
</label><span><input type="hidden" name="use_stock_level" id="use_stock_level" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['use_stock_level'];?>
" /></span></div>
	  <div><label for="stock_level"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level'];?>
</label><span><input name="stock_level" id="stock_level" class="textbox number" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level'];?>
" /></span><?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_MATRIX_STOCK_NOTE']->value)) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['matrix_stock_level'];?>
<?php }?></div>
	  <div><label for="stock_warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level_warn'];?>
</label><span><input name="stock_warning" id="stock_warning" class="textbox number" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['stock_warning'];?>
" /></span></div>
	</fieldset>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_misc'];?>
</legend>
	  <div><label for="upc_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_upc'];?>
</label><span><input name="upc" id="upc" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['upc'];?>
" maxlength="20" /></span></div>
	  <div><label for="ean_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_ean'];?>
</label><span><input name="ean" id="ean" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['ean'];?>
" maxlength="20" /></span></div>
	  <div><label for="jan_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_jan'];?>
</label><span><input name="jan" id="jan" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['jan'];?>
" maxlength="20" /></span></div>
	  <div><label for="isbn_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_isbn'];?>
</label><span><input name="isbn" id="isbn" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['isbn'];?>
" maxlength="20" /></span></div> 
	  <div><label for="gtin_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_gtin'];?>
</label><span><input name="gtin" id="gtin" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['gtin'];?>
" maxlength="20" /></span></div>
	  <div><label for="mpn_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_mpn'];?>
</label><span><input name="mpn" id="mpn" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['mpn'];?>
" maxlength="20" /></span></div>
	  <!--<div><label for="brand_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_brand'];?>
</label><span><input name="brand" id="brand" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['brand'];?>
" maxlength="20" /></span></div>-->
	  <div><label for="google_cat_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_google_category'];?>
</label><span>
	  <?php if ($_smarty_tpl->tpl_vars['GOOGLE_CATS']->value) {?>
	  	<select name="google_category" id="google_category" class="textbox" style="font-size: 10px;">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['please_select'];?>
 &hellip;</option>
		  <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_CATS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value==$_smarty_tpl->tpl_vars['PRODUCT']->value['google_category']&&!empty($_smarty_tpl->tpl_vars['PRODUCT']->value['google_category'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</option><?php } ?>
		</select>
	  <?php } else { ?>
	  <input name="google_category" id="google_category" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['google_category'];?>
" maxlength="250" />
	  <?php }?>
	  </span></div>
	</fieldset>
  </div>

  <div id="description" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['description'];?>
</h3>
	<textarea name="description" class="textbox fck"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['description'];?>
</textarea>
  </div>

  <div id="pricing" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_pricing'];?>
</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value)) {?>
	<div>
	  <select class="field_select" rel="group_">
		<option value="0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['pricing_standard'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</option><?php } ?>
	  </select>
	</div>
	<?php }?>

	<div id="group_0" class="field_select_target">
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['pricing_standard'];?>
</p>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_pricing'];?>
</legend>
		<div><label for="price"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price_standard'];?>
</label><span><input name="price" id="price" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
" /></span></div>
		<div><label for="sale_price"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price_sale'];?>
</label><span><input name="sale_price" id="sale_price" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['sale_price'];?>
" /></span></div>
		<div><label for="cost_price"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price_cost'];?>
</label><span><input name="cost_price" id="cost_price" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['cost_price'];?>
" /></span></div>
		<div><label for="tax_type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tax_class'];?>
</label><span><?php if (isset($_smarty_tpl->tpl_vars['TAXES']->value)) {?><select name="tax_type" id="tax_type" class="textbox">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['please_select'];?>
 &hellip;</option>
		  <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAXES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['tax']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['tax']->value['tax_name'];?>
</option><?php } ?>
		</select><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['no_taxes_setup'];?>
<?php }?></span></div>
		<div><label for="tax_inclusive"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tax_included'];?>
</label><span><input type="hidden" name="tax_inclusive" id="tax_inclusive" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['tax_inclusive'];?>
" /></span></div>
		<div><label for="minimum_quantity"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['minimum_quantity'];?>
</label><span><input name="minimum_quantity" id="minimum_quantity" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['minimum_quantity'];?>
" /></span></div>
	  </fieldset>

	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_discount_quantity'];?>
</legend>
		<div><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['quantity'];?>
</label><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price'];?>
</span></div>
		<div style="width: 500px;">
		  <div id="qty_discount_0" class="list">
		    <?php if (isset($_smarty_tpl->tpl_vars['QUANTITY_DISCOUNTS']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['QUANTITY_DISCOUNTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
			<div><span class="actions"><a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['discount']->value['discount_id'];?>
" class="remove" name="discount_delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span><label><span class="editable number-right" name="discount[<?php echo $_smarty_tpl->tpl_vars['discount']->value['discount_id'];?>
][quantity]" title="Click to edit"><?php echo $_smarty_tpl->tpl_vars['discount']->value['quantity'];?>
</span></label>
			<input type="text" name="discount[<?php echo $_smarty_tpl->tpl_vars['discount']->value['discount_id'];?>
][price]" class="textbox number-right" value="<?php echo $_smarty_tpl->tpl_vars['discount']->value['price'];?>
" />
			</div>
			<?php } ?><?php }?>
		  </div>
		  <div class="inline-add">
			<span class="actions"><a href="#" class="add" target="qty_discount_0"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" /></a></span>
			<label><input type="text" rel="quantity" class="editable textbox number not-empty" /></label>
			<input type="text" rel="price" class="textbox number-right not-empty" />
		  </div>
		  <!-- Source for inline adding -->
		  <div class="inline-source" name="discount_add[0]">
			<span class="actions"><a href="#" class="remove dynamic" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span>
			<label rel="quantity"></label><input type="hidden" rel="quantity" /><input type="text" class="textbox number-right" rel="price" />
		  </div>

		</div>
	  </fieldset>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOMER_GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
	<div id="group_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" class="field_select_target">
	  <p><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
</p>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_pricing'];?>
</legend>
		<div><label for="price"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price_standard'];?>
</label><span><input name="group[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][price]" id="price" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['price'];?>
" /></span></div>
		<div><label for="sale_price"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price_sale'];?>
</label><span><input name="group[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][sale_price]" id="sale_price" class="textbox number-right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['sale_price'];?>
" /></span></div>
		<div>
		  <label for="tax_type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tax_class'];?>
</label>
		  <span>
			<select name="group[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][tax_type]" id="tax_type" class="textbox">
			<?php  $_smarty_tpl->tpl_vars['tax_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['tax_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_type']->key => $_smarty_tpl->tpl_vars['tax_type']->value) {
$_smarty_tpl->tpl_vars['tax_type']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['tax_type']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['tax_type']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['tax_type']->value['tax_name'];?>
</option><?php } ?>
			</select>
		  </span>
		</div>
		<div>
		  <label for="tax_inclusive"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['tax_included'];?>
</label>
		  <span>
			<input type="hidden" name="group[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
][tax_inclusive]" id="tax_inclusive_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['tax_inclusive'];?>
" />
		  </span>
		</div>
	  </fieldset>
	  <fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_discount_quantity'];?>
</legend>
	    <div><label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['quantity'];?>
</label><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price'];?>
</span></div>
		<div style="width: 500px;">
		  <div id="discount_list_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" >
			<?php  $_smarty_tpl->tpl_vars['quantity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['quantities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity']->key => $_smarty_tpl->tpl_vars['quantity']->value) {
$_smarty_tpl->tpl_vars['quantity']->_loop = true;
?>
			<div>
			  <span class="actions"><a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['quantity']->value['discount_id'];?>
" class="remove" name="discount_delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span>
			  <label><span class="editable number-right" name="discount[<?php echo $_smarty_tpl->tpl_vars['quantity']->value['discount_id'];?>
][quantity]" title="Click to edit"><?php echo $_smarty_tpl->tpl_vars['quantity']->value['quantity'];?>
</span></label><input type="text" name="discount[<?php echo $_smarty_tpl->tpl_vars['quantity']->value['discount_id'];?>
][price]" class="textbox number-right" value="<?php echo $_smarty_tpl->tpl_vars['quantity']->value['price'];?>
" />
			</div>
			<?php } ?>
		  </div>
		  <div class="inline-add">
			<span class="actions"><a href="#" class="add" target="discount_list_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" /></a></span>
			<label><input type="text" rel="quantity" class="textbox number not-empty" /></label>
			<input type="text" rel="price" class="textbox number-right not-empty" />
		  </div>
		  <!-- Source for inline adding -->
		  <div class="inline-source" name="discount_add[<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
]">
			<span class="actions"><a href="#" class="remove dynamic" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span>
			<label rel="quantity"></label><input type="hidden" rel="quantity" /><input type="text" class="textbox number-right" rel="price" />
		  </div>
		</div>
	  </fieldset>
	</div>
	<?php } ?>
	<?php }?>
  </div>

  <div id="category" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_categories'];?>
</h3>
	<table class="list">
		<thead>
		  <tr>
		    <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['category_primary'];?>
</th>
		    <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['category_additional'];?>
</th>
		    <th width="90%"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_name'];?>
</th>
		  </tr>
		</thead>
		<tbody>
		  <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CATEGORIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		  <tr>
		    <td align="center"><input type="radio" name="primary_cat" class="check-primary" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" rel="cat_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['category']->value['primary'];?>
 /></td>
		    <td align="center"><input type="checkbox" id="cat_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" name="categories[<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="check_cat" <?php echo $_smarty_tpl->tpl_vars['category']->value['selected'];?>
 /></td>
		    <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
		  </tr>
		  <?php } ?>
	  </tbody>
	  <tfoot>
		<tr>
		  <td>&nbsp;</td>
		  <td align="center"><input type="checkbox" class="check-all" rel="check_cat" /></td>
		  <td><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['check_uncheck'];?>
</strong></td>
		</tr>
	  </tfoot>
	</table>
  </div>

  <div id="Options" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_product_options'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_product_options'];?>
</legend>
	  <table class="list">
		<thead>
		  <tr>
			<td width="20"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</td>
			<td width="20"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_product_options_matrix'];?>
</td>
			<td width="302"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['type'];?>
</td>
			<td width="50"  align="right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['negative'];?>
</td>
			<td width="102"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['price'];?>
</td>
			<td width="102"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['weight'];?>
</td>
			<td width="20">&nbsp;</td>
		  </tr>
		</thead>
		<tbody id="options_added">
		<?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCT_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
?>
		  <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
		  <?php if ($_smarty_tpl->tpl_vars['option']->value['from_assigned']) {?>
		  <tr id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
">
			<td align="center"><input type="hidden" id="enable_<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][set_enabled]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['set_enabled'];?>
" class="toggle" /></td>
			<td align="center"><input type="hidden" id="matrix_include_<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][matrix_include]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['matrix_include'];?>
" class="toggle" /></td>
			<td><?php echo $_smarty_tpl->tpl_vars['option']->value['display'];?>
</td>
			<td align="right"><input type="checkbox" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][option_negative]" <?php if (isset($_smarty_tpl->tpl_vars['option']->value['option_negative'])&&$_smarty_tpl->tpl_vars['option']->value['option_negative']==1) {?>checked="checked"<?php }?> value="1" /></td>
			<td><span class="editable number-right" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][option_price]" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['option_price'];?>
</span></td>
			<td><span class="editable number" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][option_weight]" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['option_weight'];?>
</span></td>
			<td align="center">
			  <?php if (!$_smarty_tpl->tpl_vars['option']->value['set_member_id']) {?><a href="#" name="option_remove" class="remove" rel="<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a><?php } else { ?><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete_disabled.png" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['delete_option_disabled'];?>
" class="delete_disabled" /></a><?php }?>
			  <input type="hidden" id="data_<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['data'];?>
" />
			</td>
		  </tr>
		  <?php } else { ?>

		  <tr id="option_member_<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
">
			<td align="center"><input type="hidden" id="enable_member_<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
" name="option_create[<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
][set_enabled]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['set_enabled'];?>
" class="toggle" /></td>
			<td align="center"><input type="hidden" id="matrix_include_<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
" name="option_update[<?php echo $_smarty_tpl->tpl_vars['option']->value['assign_id'];?>
][matrix_include]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['matrix_include'];?>
" class="toggle" /></td>
			<td><?php echo $_smarty_tpl->tpl_vars['option']->value['display'];?>
</td>
			<td align="right"><input type="checkbox" name="option_create[<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
][option_negative]" <?php if (isset($_smarty_tpl->tpl_vars['option']->value['option_negative'])&&$_smarty_tpl->tpl_vars['option']->value['option_negative']==1) {?>checked="checked"<?php }?>  value="1" /></td>
			<td><span class="editable number-right" name="option_create[<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
][option_price]" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['option_price'];?>
</span></td>
			<td><span class="editable number" name="option_create[<?php echo $_smarty_tpl->tpl_vars['option']->value['set_member_id'];?>
][option_weight]" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['option_weight'];?>
</span></td>
			<td><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete_disabled.png" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['delete_option_disabled'];?>
" class="delete_disabled" /></a></td>
		  </tr>
		  <?php }?>
		  <?php } ?>
		<?php } ?>
		</tbody>
		<tfoot>
		  <th><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_option_add'];?>
</td></th>
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			  <select id="opt_mid" class="textbox data">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['OPTIONS_SELECT']->value)) {?>
				  <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OPTIONS_SELECT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<?php if (isset($_smarty_tpl->tpl_vars['group']->value['members'])) {?>
				<optgroup id="<?php echo $_smarty_tpl->tpl_vars['group']->value['option_id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['group']->value['option_name'];?>
">
					  <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
				  <option value="<?php echo $_smarty_tpl->tpl_vars['member']->value['value_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value['value_name'];?>
</option>
					  <?php } ?>
				</optgroup>
					<?php } else { ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['option_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['option_name'];?>
</option>
					<?php }?>
				  <?php } ?>
				<?php }?>
			  </select>
			</td>
			<td align="right"><input type="checkbox" id="opt_negative" rel="negative" class="checkbox data" /></td>
			<td><input type="text" id="opt_price" rel="price" class="textbox number-right data" /></td>
			<td><input type="text" id="opt_weight" rel="weight" class="textbox number data" /></td>
			<!-- td><input type="text" id="opt_stock" rel="stock" class="textbox number data" /></td -->
			<td align="center"><a href="#" onclick="optionAdd('option_template', 'options_added'); return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" /></a></td>
		  </tr>

		  <tr class="inline-source">
			<td>&nbsp;</td>
			<td class="name"><input type="hidden" rel="" /></td>
			<td class="negative"><input type="hidden" rel="" /></td>
			<td class="price"><input type="hidden" rel="" /></td>
			<td class="weight"><input type="hidden" rel="" /></td>
			<!-- td class="stock"><input type="hidden" rel="" /></td -->
			<td align="center"><a href="#" class="remove dynamic"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></td>
		  </tr>

		  <tr id="option_template" class="dynamic">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td class="name"><input type="hidden" name="option_add[value][]" value="" disabled="disabled" /></td>
			<td class="negative" align="right"><input type="checkbox" name="option_add[negative][]" value="1" disabled="disabled" /></td>
			<td class="price"><input type="hidden" name="option_add[price][]" value="" disabled="disabled" /></td>
			<td class="weight"><input type="hidden" name="option_add[weight][]" value="" disabled="disabled" /></td>
			<!-- td class="stock"><input type="hidden" name="option_add[stock][]" value="" disabled="disabled" /></td -->
			<td align="center"><a href="#" class="remove" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></td>
		  </tr>
		</tfoot>
	  </table>
	  <script language="text/javascript">
		var optionJSON = <?php echo $_smarty_tpl->tpl_vars['OPTIONS_JSON']->value;?>
;
	  </script>
	</fieldset>

	<?php if (isset($_smarty_tpl->tpl_vars['OPTION_SETS']->value)) {?>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_option_sets'];?>
</legend>
	  <div id="option_sets" class="list" style="width: 850px;">
		<?php if (isset($_smarty_tpl->tpl_vars['OPTION_SETS_ENABLED']->value)) {?> <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OPTION_SETS_ENABLED']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value) {
$_smarty_tpl->tpl_vars['set']->_loop = true;
?>
		<div id="">
		  <span class="actions">
		  	<a href="#" name="set_remove" class="remove" rel="<?php echo $_smarty_tpl->tpl_vars['set']->value['set_product_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a>
		  </span>
		  <?php echo $_smarty_tpl->tpl_vars['set']->value['set_name'];?>

		</div>
		<?php } ?>
		<?php }?>
	  </div>
	  <div class="list-footer">
		<label for=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['set_assign'];?>
</label>
		<span>
		<select id="" name="set_assign">
		  <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
		  <?php  $_smarty_tpl->tpl_vars['option_set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OPTION_SETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_set']->key => $_smarty_tpl->tpl_vars['option_set']->value) {
$_smarty_tpl->tpl_vars['option_set']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['option_set']->value['set_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['option_set']->value['set_name'];?>
</option><?php } ?>
		</select> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" />
		</span>
	  </div>
	</fieldset>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value) {?>
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_product_options_matrix'];?>
</h3>
	<table>
	  <thead>
	  	<tr>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['combination'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level_use'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_upc'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_ean'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_jan'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_isbn'];?>
</th>
	      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['restock_note'];?>
</th>
	    </tr>
	  </thead>
	  <tbody class="list">
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['all_possible']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	    <tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['options_values'];?>
</td>
		  <td align="center"><input type="hidden" id="use_stock_<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][use_stock]" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['use_stock'];?>
" class="toggle" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][stock_level]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['stock_level'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][product_code]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['product_code'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][upc]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['upc'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][ean]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['ean'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][jan]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['jan'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][isbn]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['isbn'];?>
" /></td>
		  <td><input type="text" name="option_matrix[<?php echo $_smarty_tpl->tpl_vars['row']->value['options_identifier'];?>
][restock_note]" class="textbox number" value="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_MATRIX']->value['existing'][$_smarty_tpl->tpl_vars['row']->value['options_identifier']]['restock_note'];?>
" maxlength="255"  /></td>
	    </tr>
	<?php } ?> 
	  </tbody>
	</table>
	<?php }?>
  </div>

  <div id="image" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_images'];?>
</h3>
	
	<img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/star.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_main'];?>
" /> - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_main'];?>

	<img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/1.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_included'];?>
" /> - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_included'];?>

	<img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/0.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_excluded'];?>
" /> - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_excluded'];?>

	<div class="fm-container">
	  <div id="image" rel="1" class="fm-filelist"></div>
	  <div class="master_image">
	  <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['image_main'];?>
:<br /><br />
	  <img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['master_image'];?>
" id="master_image_preview" />
	  </div>
	</div>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['file_upload_note'];?>
</p>
	<div><label for="uploader"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['file_upload'];?>
</label><span><input name="image" id="uploader" type="file" class="multiple" /></span></div>

  </div>

  <div id="digital" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_digital_options'];?>
</h3>
	<div class="fm-container">
	  <div id="download" rel="2" class="fm-filelist unique"></div>
	</div>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_file_path_custom'];?>
</legend>
	<div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['file_path_help'];?>
</div>
	<div id="digital_freetype"><label for="digital_path"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['file_path'];?>
</label><span> <input name="digital_path" id="digital_path" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['digital_path'];?>
" <?php echo $_smarty_tpl->tpl_vars['VAL_DIGITALDIR_EMPTY']->value;?>
 /></span></div>
	</fieldset>
  </div>
  <div id="seo" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['tab_seo'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo_meta_data'];?>
</legend>
	  <div><label for="seo_meta_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_title'];?>
</label><span><input name="seo_meta_title" id="seo_meta_title" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['seo_meta_title'];?>
" /></span></div>
	  <div><label for="seo_path"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_path'];?>
</label><span><input name="seo_path" id="seo_path" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['seo_path'];?>
" /></span></div>
	  <div><label for="seo_meta_keywords"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_keywords'];?>
</label><span><textarea name="seo_meta_keywords" id="seo_meta_keywords" class="textbox"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['seo_meta_keywords'];?>
</textarea></span></div>
	  <div><label for="seo_meta_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_description'];?>
</label><span><textarea name="seo_meta_description" id="seo_meta_description" class="textbox"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['seo_meta_description'];?>
</textarea></span></div>
	</fieldset>
  </div>

  <div id="reviews" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['customer_reviews'];?>
</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['CUSTOMER_REVIEWS']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOMER_REVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
	<div class="note">
	  <span class="actions">
		<input type="hidden" name="review[<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
]" id="review_<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['approved'];?>
" class="toggle" />
		<a href="?_g=reviews&amp;edit=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" /></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a>
	  </span>
	  <strong><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</strong>
	  <div><?php echo $_smarty_tpl->tpl_vars['review']->value['review'];?>
</div>
	  <div class="details">
		<span style="float: right;">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<input type="radio" class="rating" name="rating_<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['review']->value['rating']==$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>checked="checked"<?php }?> />
		<?php endfor; endif; ?>
		</span>
		<?php echo $_smarty_tpl->tpl_vars['review']->value['date'];?>
 :: <a href="mailto:<<?php echo $_smarty_tpl->tpl_vars['review']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['name'];?>
</a> (<a href="http://api.hostip.info/get_html.php?ip=<?php echo $_smarty_tpl->tpl_vars['review']->value['ip_address'];?>
&amp;position=true" class="colourbox hostip"><?php echo $_smarty_tpl->tpl_vars['review']->value['ip_address'];?>
</a>)
	  </div>
	</div>
	<?php } ?>
	<?php }?>
  </div>

  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_TRANSLATE']->value)) {?>
  <div id="translate" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_translations'];?>
</h3>
	<fieldset class="list">
	  <?php if (isset($_smarty_tpl->tpl_vars['TRANSLATIONS']->value)) {?>
	  <?php  $_smarty_tpl->tpl_vars['translation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['translation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TRANSLATIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['translation']->key => $_smarty_tpl->tpl_vars['translation']->value) {
$_smarty_tpl->tpl_vars['translation']->_loop = true;
?>
	  <div>
		<span class="actions">
		  <a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['edit'];?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" /></a>
		  <a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a>
		</span>
		<input type="hidden" name="" id="" class="" />
		<a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['edit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['translation']->value['name'];?>
"><img src="language/flags/<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['translation']->value['name'];?>
" /></a>
		&nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['edit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['translation']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['translation']->value['name'];?>
</a>
	  </div>
	  <?php } ?>
	  <?php } else { ?>
	  <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['trans_none'];?>
</div>
	  <?php }?>
	</fieldset>
	<div><a href="<?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['trans_add'];?>
</a></div>
  </div>
  <?php }?>
  
  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div class="form_control">
	<input type="hidden" name="save" value="<?php echo $_smarty_tpl->tpl_vars['FORM_HASH']->value;?>
" />
	<input type="hidden" name="previous-tab" id="previous-tab" value="" />
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" /> <input type="submit" name="submit_cont" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save_reload'];?>
" />
  </div>
  <script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['JSON_IMAGES']->value)) {?>var file_list		= <?php echo $_smarty_tpl->tpl_vars['JSON_IMAGES']->value;?>
;<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['DEFAULT_IMAGE']->value)) {?>var file_default	= <?php echo $_smarty_tpl->tpl_vars['DEFAULT_IMAGE']->value;?>
;<?php }?>
  </script>
<?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_TRANSLATE_FORM']->value)) {?>
  <div id="general" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['general'];?>
</h3>
	<fieldset>
	  <div><label for="trans_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_name'];?>
</label><span><input type="text" name="translate[name]" id="trans_name" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['name'];?>
" class="textbox" /></span></div>
	  <div><label for="trans_lang"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['language'];?>
</label><span><select name="translate[language]" id="trans_lang" class="textbox">
	  <?php if (isset($_smarty_tpl->tpl_vars['LANGUAGES']->value)) {?> <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"<?php echo $_smarty_tpl->tpl_vars['language']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option><?php } ?> <?php }?>
	  </select></span></div>
	</fieldset>
  </div>
  <div id="description" class="tab_content">
    <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_translate'];?>
</h3>
	<textarea name="translate[description]" class="textbox fck"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['description'];?>
</textarea>
  </div>
  <div id="seo" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo_meta_data'];?>
</legend>
	  <div><label for="seo_meta_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_title'];?>
</label><span><input name="translate[seo_meta_title]" id="seo_meta_title" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_title'];?>
" /></span></div>
	  <div><label for="seo_path"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_path'];?>
</label><span><input name="seo_path" id="seo_path" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_path'];?>
" /></span></div>
	  <div><label for="seo_meta_keywords"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_keywords'];?>
</label><span><textarea name="translate[seo_meta_keywords]" id="seo_meta_keywords" class="textbox"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_keywords'];?>
</textarea></span></div>
	  <div><label for="seo_meta_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_description'];?>
</label><span><textarea name="translate[seo_meta_description]" id="prod_seo_description" class="textbox"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_description'];?>
</textarea></span></div>
	</fieldset>
  </div>
  
  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  <div class="form_control">
	<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['product_id'];?>
" />
	<input type="hidden" name="translation_id" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['translation_id'];?>
" />
	<input type="hidden" name="previous-tab" id="previous-tab" value="" />
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>

<?php }?>
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
</form>

<?php }} ?>
