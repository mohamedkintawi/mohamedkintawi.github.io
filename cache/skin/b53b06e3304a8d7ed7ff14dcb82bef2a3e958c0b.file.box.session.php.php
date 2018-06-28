<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:49
         compiled from "C:\wamp64\www\skins\mican\templates\box.session.php" */ ?>
<?php /*%%SmartyHeaderCode:5225b345795dbb5e1-07413996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53b06e3304a8d7ed7ff14dcb82bef2a3e958c0b' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.session.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5225b345795dbb5e1-07413996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_USER' => 0,
    'LANG_WELCOME_BACK' => 0,
    'STORE_URL' => 0,
    'LANG' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b3457961049c7_94626697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3457961049c7_94626697')) {function content_5b3457961049c7_94626697($_smarty_tpl) {?><div id="session">
  <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
  <p>
	<?php echo $_smarty_tpl->tpl_vars['LANG_WELCOME_BACK']->value;?>
 <a href="#" id="session_action_button">[+]</a> <br />
	<ul id="session_actions">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a></li> 
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=account" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</a></li>
	</ul>
  </p>
  <?php } else { ?>
  <p>
	<span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['welcome_guest'];?>
</span>
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['login'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['or'];?>
 
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['register'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a>
  </p>
  <?php }?>
</div><?php }} ?>
