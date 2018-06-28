<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:39:25
         compiled from "C:\wamp64\www\admin\skins\default\templates\modules.index.php" */ ?>
<?php /*%%SmartyHeaderCode:249255b34586ddf5022-51831787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4915662171aea0757bcc80c0a3fa6bd86c2f7db9' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\modules.index.php',
      1 => 1529901918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249255b34586ddf5022-51831787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'MODULES_TYPE' => 0,
    'LANG' => 0,
    'ORDER_SELECT' => 0,
    'PLUGINS_LINK' => 0,
    'MODULES' => 0,
    'module' => 0,
    'SKIN_VARS' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b34586e22f822_41399896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34586e22f822_41399896')) {function content_5b34586e22f822_41399896($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
  <div id="modules" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['MODULES_TYPE']->value;?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['sort_by'];?>
 
	  <select name="order" class="auto_submit show_submit">
	    <option value="alpha"<?php echo $_smarty_tpl->tpl_vars['ORDER_SELECT']->value['alpha'];?>
><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</option>
	    <option value="pop"<?php echo $_smarty_tpl->tpl_vars['ORDER_SELECT']->value['pop'];?>
><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['popularity'];?>
</option>
	  </select>
	</p>
	<?php if ($_smarty_tpl->tpl_vars['PLUGINS_LINK']->value) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gateway']['plugins_link'];?>
</p>
	<?php }?>
	<div class="list">
	<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
	  <div class="module">
		<span class="actions">
		  <?php if ($_smarty_tpl->tpl_vars['module']->value['mobile_optimized']) {?>
		  <a href="javascript:alert('<?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['mobile_optimized'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/phone.png" /></a>
		  <?php }?>
		  <a href="?_g=modules&amp;type=<?php echo $_smarty_tpl->tpl_vars['module']->value['type'];?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
" class="edit">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" />
		  </a>
		</span>
		<span class="toggle"><input type="hidden" id="status_<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
" name="status[<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['status'];?>
" class="toggle" /></span>
		<a href="?_g=modules&amp;type=<?php echo $_smarty_tpl->tpl_vars['module']->value['type'];?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</a>
	  </div>
	<?php } ?>
	</div>
  </div>
  
  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
  <div class="form_control">
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
</form><?php }} ?>
