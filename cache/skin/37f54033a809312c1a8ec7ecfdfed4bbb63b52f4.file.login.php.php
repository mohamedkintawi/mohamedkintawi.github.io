<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 01:05:15
         compiled from "C:\wamp64\www\admin\skins\default\templates\login.php" */ ?>
<?php /*%%SmartyHeaderCode:197465b34344b3fa870-75845781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f54033a809312c1a8ec7ecfdfed4bbb63b52f4' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\login.php',
      1 => 1529901917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197465b34344b3fa870-75845781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'SKIN_VARS' => 0,
    'SKIP_AD' => 0,
    'VAL_SELF' => 0,
    'RECOVERY' => 0,
    'REQUEST' => 0,
    'PASSWORD' => 0,
    'USERNAME' => 0,
    'EMAIL' => 0,
    'SSL' => 0,
    'REDIRECT_TO' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b34344bb16338_28949651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34344bb16338_28949651')) {function content_5b34344bb16338_28949651($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_admin_cp'];?>
</title>
  <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/ie7.css" media="screen" /><![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/styles/layout.css" media="screen" />
</head>
<body class="preauth-body">
  <?php echo $_smarty_tpl->getSubTemplate ('templates/common.gui_message.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="preauth-wrapper<?php if (!$_smarty_tpl->tpl_vars['SKIP_AD']->value) {?> preauth-wrapper-left-shift<?php }?>">
  <div id="logo"><a href="?"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/ccAdminLogoLrg.png" alt="eCommerce by CubeCart" /></a></div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="application/x-www-form-urlencoded" name="acp-login">
	<div id="login-box">
	<?php if (isset($_smarty_tpl->tpl_vars['RECOVERY']->value)) {?>
	  <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['title_password_new'];?>
</h1>
	  <div><span><input type="text" name="validate" id="validate" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value['validate'];?>
" /></span><label for="validate"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['validation_key'];?>
</label>:</div>
	  <div><span><input type="text" name="email" id="email" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value['email'];?>
" /></span><label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label>:</div>
	  <div><span><input type="password" autocomplete="off" name="password[new]" id="password" class="textbox required" /></span><label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['new_password'];?>
</label>:</div>
	  <div><span><input type="password" autocomplete="off" name="password[confirm]" id="passconf" class="textbox required" /></span><label for="passconf"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['new_password_confirm'];?>
</label>:</div>
	  <div id="login-box-foot">
	    <span><a href="?_g=login"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login_return'];?>
</a></span>
	    <input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['submit'];?>
" class="submit no-change" />
	  </div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['PASSWORD']->value)) {?>
	  <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['forgotten_password'];?>
</h1>
	  <div><span><input type="text" name="username" id="username" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" /></span><label for="username"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label>:</div>
	  <div><span><input type="text" name="email" id="email" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" /></span><label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label>:</div>
	  <div id="login-box-foot">
	    <span><a href="?_g=login"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['login_return'];?>
</a></span>
	    <input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['submit'];?>
" class="submit no-change" />
	  </div>
	<?php } else { ?>
	  <h1><?php if ($_smarty_tpl->tpl_vars['SSL']->value['state']=='mixed') {?><span id="login_ssl_switch"><a href="<?php echo $_smarty_tpl->tpl_vars['SSL']->value['url'];?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['SSL']->value['icon'];?>
" /></a></span><?php } elseif ($_smarty_tpl->tpl_vars['SSL']->value['state']=='forced') {?><span id="login_ssl_switch"><img src="<?php echo $_smarty_tpl->tpl_vars['SSL']->value['icon'];?>
" /></span><?php }?><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['title_login_acp'];?>
</h1>
	  <div><span><input type="text" name="username" id="username" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" /></span><label for="username"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['username'];?>
</label>:</div>
	  <div><span><input type="password" name="password" id="password" class="textbox required" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" /></span><label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['password'];?>
</label>:</div>
	  <div id="login-box-foot">
		<span><a href="?_g=password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['forgotten_password'];?>
</a></span>
		<input type="hidden" name="redir" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_TO']->value;?>
" />
		<input name="login" type="submit" id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
" class="submit no-change" />
	  </div>
	<?php }?>
	</div>
	<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
  </form>
	<!-- Include JavaScript last - YSlow! rates it better this way -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

  <!--[if lte IE 6]>
  <script type="text/javascript">
	var IE6UPDATE_OPTIONS = {icons_path: "http://static.ie6update.com/hosted/ie6update/images/"}
  </script>
  <script type="text/javascript" src="http://static.ie6update.com/hosted/ie6update/ie6update.js"></script>
  <![endif]-->
  <script type="text/javascript" src="js/plugins.php"></script>
  <!-- Common JavaScript functionality -->
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/admin.js"></script>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ('templates/ccpower.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
