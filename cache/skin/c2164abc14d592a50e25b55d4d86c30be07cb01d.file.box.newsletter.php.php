<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:51
         compiled from "C:\wamp64\www\skins\mican\templates\box.newsletter.php" */ ?>
<?php /*%%SmartyHeaderCode:254315b3457976a10a1-27510349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2164abc14d592a50e25b55d4d86c30be07cb01d' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.newsletter.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254315b3457976a10a1-27510349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'IS_USER' => 0,
    'CTRL_SUBSCRIBED' => 0,
    'STORE_URL' => 0,
    'VAL_SELF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b3457978c95f9_77860343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3457978c95f9_77860343')) {function content_5b3457978c95f9_77860343($_smarty_tpl) {?><div id="mailing_list">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['mailing_list'];?>
</h3>
  <div class="wrapper">
	  <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value) {?>
		<?php if (($_smarty_tpl->tpl_vars['CTRL_SUBSCRIBED']->value)) {?>
		<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_is_subscribed'];?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=unsubscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_unsubscribe'];?>
</a></p>
		<?php } else { ?>
		<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_not_subscribed'];?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=subscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_subscribe'];?>
</a></p>
		<?php }?>
	  <?php } else { ?>
	  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
		<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['enter_email_signup'];?>
</p>
		<p class="input"><input name="subscribe" type="text" class="textbox required" size="18" maxlength="250" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
"/></p>
		<input type="submit" class="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe_now'];?>
" />
			  </form>
	  <?php }?>
  </div>
</div><?php }} ?>
