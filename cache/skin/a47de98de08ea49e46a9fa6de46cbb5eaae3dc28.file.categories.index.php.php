<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 01:39:32
         compiled from "C:\wamp64\www\admin\skins\default\templates\categories.index.php" */ ?>
<?php /*%%SmartyHeaderCode:20635b343c548ce475-84955676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a47de98de08ea49e46a9fa6de46cbb5eaae3dc28' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\categories.index.php',
      1 => 1529901917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20635b343c548ce475-84955676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LIST_CATEGORIES' => 0,
    'LANG' => 0,
    'CATEGORIES' => 0,
    'category' => 0,
    'SKIN_VARS' => 0,
    'translation' => 0,
    'MODE_ADDEDIT' => 0,
    'CATEGORY' => 0,
    'SELECT_CATEGORIES' => 0,
    'JSON_IMAGES' => 0,
    'DISPLAY_SHIPPING' => 0,
    'DISPLAY_TRANSLATIONS' => 0,
    'TRANSLATIONS' => 0,
    'TRANSLATE' => 0,
    'MODE_TRANSLATE' => 0,
    'TRANS' => 0,
    'LANGUAGES' => 0,
    'lang' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b343c563be091_71227434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b343c563be091_71227434')) {function content_5b343c563be091_71227434($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" id="cat_form" name="cat_form" enctype="multipart/form-data">
  <?php if ($_smarty_tpl->tpl_vars['LIST_CATEGORIES']->value) {?>
  <div id="categories" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_category'];?>
</h3>
	<table class="list">
	  <thead>
		<tr>
		  <td width="15" align="center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_id'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['arrange'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['visible'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_name'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_translations'];?>
</td>
		  <td>&nbsp;</td>
		</tr>
	  </thead>
	  <tbody class="reorder-list">
	  <?php if (isset($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {?>
	  <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CATEGORIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	    <tr>
	      <td align="center">
	        <strong><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
</strong>
	      </td>
	      <td align="center">
	        <a href="#" class="handle"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/updown.gif" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ui']['drag_reorder'];?>
" /></a>
	        <input type="hidden" name="order[]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" />
	      </td>
	      <td align="center">
	        <input type="hidden" name="visible[<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
]" id="catv_<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['visible'];?>
" class="toggle" />
	      </td>
	      <td align="center">
	        <input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
]" id="cat_<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['status'];?>
" class="toggle" />
	      </td>
	      <td>
			<?php if ($_smarty_tpl->tpl_vars['category']->value['no_children']) {?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['children'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['alt_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
</a>
		    <?php } else { ?>
		    <?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>

		    <?php }?>
	      </td>
	      <td align="center">
	    	<?php  $_smarty_tpl->tpl_vars['translation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['translation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['translations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['translation']->key => $_smarty_tpl->tpl_vars['translation']->value) {
$_smarty_tpl->tpl_vars['translation']->_loop = true;
?>
	  	    <a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['edit'];?>
"><img src="language/flags/<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
" /></a>
	  	    <?php } ?>
	      </td>
	      <td>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['translate'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['trans_add'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['trans_add'];?>
" /></a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['edit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" /></a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a>
	      </td>
	    </tr>
	    <?php } ?>
	    <?php } else { ?>
	    <tr>
	      <td colspan="6" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['none'];?>
</strong></td>
	    </tr>
	    <?php }?>
	  </tbody>
    </table>
  </div>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['MODE_ADDEDIT']->value)) {?>
  <div id="cat_general" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_category_details'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['general'];?>
</legend>
	  <div><label for="status"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label><span><input type="hidden" name="cat[status]" id="status" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['status'];?>
" class="toggle" /></span></div>
	  <div><label for="visible"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['visible'];?>
</label><span><input type="hidden" name="cat[visible]" id="visible" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['visible'];?>
" class="toggle" /></span></div>
	  <div><label for="name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_name'];?>
</label><span><input type="text" name="cat[cat_name]" <?php if (!empty($_smarty_tpl->tpl_vars['CATEGORY']->value['cat_name'])) {?>id="cat_name"<?php } else { ?>id="name"<?php }?> class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['cat_name'];?>
" /></span></div>
	  <div><label for="parent"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_parent'];?>
</label><span><select name="cat[cat_parent_id]" id="parent" class="textbox">
	  <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SELECT_CATEGORIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	  <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['category']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['category']->value['display'];?>
</option>
	  <?php } ?>
	  </select></span></div>
	</fieldset>
  </div>
  <div id="cat_description" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_description'];?>
</h3>
	<textarea name="cat[cat_desc]" id="description" class="textbox fck"><?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['cat_desc'];?>
</textarea>
  </div>
  <div id="cat_images" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_images'];?>
</h3>
	<div class="fm-container">
	  <div id="image" rel="1" class="fm-filelist unique"></div>
	</div>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['file_upload_note'];?>
</p>
	<div><label for="uploader"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['file_upload'];?>
</label><span><input name="image" id="uploader" type="file" /></span></div>
	<script type="text/javascript">
	var file_list = <?php echo $_smarty_tpl->tpl_vars['JSON_IMAGES']->value;?>

	</script>
  </div>
  <div id="seo" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo'];?>
</h3>
    <fieldset>
	  <div><label for="seo_meta_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_title'];?>
</label><span><input type="text" name="cat[seo_meta_title]" id="seo_meta_title" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['seo_meta_title'];?>
" /></span></div>
	  <div><label for="seo_path"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_path'];?>
</label><span><input type="text" name="seo_path" id="seo_path" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['seo_path'];?>
" /></span></div>
	  <div><label for="seo_meta_keywords"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_keywords'];?>
</label><span><textarea name="cat[seo_meta_keywords]" id="seo_meta_keywords" class="textbox"><?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['seo_meta_keywords'];?>
</textarea></span></div>
	  <div><label for="seo_meta_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_description'];?>
</label><span><textarea name="cat[seo_meta_description]" id="seo_meta_description" class="textbox"><?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['seo_meta_description'];?>
</textarea></span></div>
	</fieldset>
  </div>
	<?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_SHIPPING']->value)) {?>
  <div id="cat_shipping" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_shipping'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_shipping_costs'];?>
</legend>
	  <div><label for="per_ship"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['ship_per_order'];?>
</label><span><input name="cat[per_ship]" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['per_ship'];?>
" type="text" class="textbox" size="6" /></span></div>
  	  <div><label for="item_ship"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['ship_per_item'];?>
</label><span><input name="cat[item_ship]" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['item_ship'];?>
" type="text" class="textbox" size="6" /></span></div>
  	  <div><label for="per_int_ship"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['ship_per_order_intl'];?>
</label><span><input name="cat[per_int_ship]" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['per_int_ship'];?>
" type="text" class="textbox" size="6" /></span></div>
      <div><label for="item_int_ship"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['ship_per_item_intl'];?>
</label><span><input name="cat[item_int_ship]" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['item_int_ship'];?>
" type="text" class="textbox" size="6" /></span></div>
    </fieldset>
  </div>
	<?php }?>
  <input type="hidden" name="cat[cat_id]" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['cat_id'];?>
" />
	<?php if ($_smarty_tpl->tpl_vars['DISPLAY_TRANSLATIONS']->value) {?>
  <div id="cat_translate" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_translate'];?>
</h3>
	<fieldset class="list"><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_translations'];?>
</legend>
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
" title="<?php echo $_smarty_tpl->tpl_vars['translation']->value['cat_name'];?>
 - (<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
)"><img src="language/flags/<?php echo $_smarty_tpl->tpl_vars['translation']->value['language'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['translation']->value['langauge'];?>
" /></a> - <a href="<?php echo $_smarty_tpl->tpl_vars['translation']->value['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['translation']->value['cat_name'];?>
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
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['MODE_TRANSLATE']->value) {?>
  <div id="general" class="tab_content">
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['general'];?>
</legend>
	  <div><label for="trans_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['category_name'];?>
</label><span><input type="text" name="translate[cat_name]" id="trans_name" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['cat_name'];?>
" class="textbox required" required="required" /></span></div>
	  <div><label for="trans_lang"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['language'];?>
</label><span><select name="translate[language]" id="trans_lang" class="textbox">
	  <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['code'];?>
"<?php echo $_smarty_tpl->tpl_vars['lang']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</option><?php } ?>
	  </select></span></div>
	</fieldset>
  </div>
  <div id="description" class="tab_content">
	<textarea name="translate[cat_desc]" class="textbox fck"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['cat_desc'];?>
</textarea>
  </div>
  <div id="seo" class="tab_content">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['title_seo'];?>
</h3>
  <fieldset>
	  <div><label for="seo_meta_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_title'];?>
</label><span><input type="text" name="translate[seo_meta_title]" id="seo_meta_title" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_title'];?>
" /></span></div>
	  <div><label for="seo_path"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_path'];?>
</label><span><input type="text" name="seo_path" id="seo_path" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_path'];?>
" /></span></div>
	  <div><label for="seo_meta_keywords"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_keywords'];?>
</label><span><textarea name="translate[cat_meta_keywords]" id="seo_meta_keywords" class="textbox"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_keywords'];?>
</textarea></span></div>
	  <div><label for="seo_meta_description"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_meta_description'];?>
</label><span><textarea name="translate[seo_meta_description]" id="seo_meta_description" class="textbox"><?php echo $_smarty_tpl->tpl_vars['TRANS']->value['seo_meta_description'];?>
</textarea></span></div>
	</fieldset>
  </div>
  <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['cat_id'];?>
" />
  <input type="hidden" name="translation_id" value="<?php echo $_smarty_tpl->tpl_vars['TRANS']->value['translation_id'];?>
" />
  <?php }?>

  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  <div class="form_control">
	<input type="hidden" name="previous-tab" id="previous-tab" value="" />
	<input type="submit" id="cat_save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" class="button" />
  </div>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
  <?php if (!empty($_smarty_tpl->tpl_vars['CATEGORY']->value['cat_name'])) {?>
  <input type="hidden" name="gen_seo" id="gen_seo" value="0" />
  <div id="dialog-seo" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_rebuild'];?>
" style="display:none;">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['seo_rebuild_description'];?>
</p>
  </div>
  <?php }?>
</form><?php }} ?>
