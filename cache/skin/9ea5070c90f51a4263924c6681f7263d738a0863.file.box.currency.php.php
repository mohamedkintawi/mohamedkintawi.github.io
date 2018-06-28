<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:49
         compiled from "C:\wamp64\www\skins\mican\templates\box.currency.php" */ ?>
<?php /*%%SmartyHeaderCode:88215b345795995ff2-75436102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea5070c90f51a4263924c6681f7263d738a0863' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.currency.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88215b345795995ff2-75436102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LANG' => 0,
    'CURRENCIES' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b345795b2c511_10294444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b345795b2c511_10294444')) {function content_5b345795b2c511_10294444($_smarty_tpl) {?><form id="currency_select" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
  <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['currency'];?>
</h2>
  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_currency'];?>

  <select name="set_currency" class="auto_submit">
  <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" <?php echo $_smarty_tpl->tpl_vars['currency']->value['selected'];?>
 title="<?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_left'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_right'];?>
</option>
  <?php } ?>
  </select> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['submit'];?>
" />
  </p>
  </form><?php }} ?>
