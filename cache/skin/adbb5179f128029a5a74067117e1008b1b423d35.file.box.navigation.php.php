<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:50
         compiled from "C:\wamp64\www\skins\mican\templates\box.navigation.php" */ ?>
<?php /*%%SmartyHeaderCode:289135b345796e66530-03364510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adbb5179f128029a5a74067117e1008b1b423d35' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.navigation.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289135b345796e66530-03364510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'STORE_URL' => 0,
    'NAVIGATION_TREE' => 0,
    'CTRL_CERTIFICATES' => 0,
    'CATALOGUE_MODE' => 0,
    'URL' => 0,
    'CTRL_SALE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b3457972259d3_82316388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3457972259d3_82316388')) {function content_5b3457972259d3_82316388($_smarty_tpl) {?><div>
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['title'];?>
</h3>
  <ul id="menu" class="accordion">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['homepage'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['homepage'];?>
</a></li>

	<?php echo $_smarty_tpl->tpl_vars['NAVIGATION_TREE']->value;?>


	<?php if ($_smarty_tpl->tpl_vars['CTRL_CERTIFICATES']->value&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value) {?>
	<li class="li-nav"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['certificates'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CTRL_SALE']->value) {?>
	<!--<li class="li-nav"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['saleitems'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
</a></li>-->
	<?php }?>
  </ul>
</div><?php }} ?>
