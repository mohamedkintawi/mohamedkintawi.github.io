<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:51
         compiled from "C:\wamp64\www\skins\mican\templates\box.search.php" */ ?>
<?php /*%%SmartyHeaderCode:135265b3457974762d1-88739932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df8371bedf0af6ece09c6c871cb827dedd5b1801' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.search.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135265b3457974762d1-88739932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT_PATH' => 0,
    'LANG' => 0,
    'SEARCH_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b34579757f003_96406288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34579757f003_96406288')) {function content_5b34579757f003_96406288($_smarty_tpl) {?><div id="quick_search">
  <form action="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
index.php?_a=category" method="get">
	<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['search'];?>
</h2>
	<span class="search"><input name="search[keywords]" type="text" id="keywords" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" size="18" /></span>
	<input type="hidden" name="_a" value="category" />
	<input class="search" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['find'];?>
 &raquo;" />
	<p class="advanced"><a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>
</a></p>
	  </form>
</div><?php }} ?>
