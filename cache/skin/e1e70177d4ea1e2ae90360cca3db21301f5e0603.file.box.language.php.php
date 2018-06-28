<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:49
         compiled from "C:\wamp64\www\skins\mican\templates\box.language.php" */ ?>
<?php /*%%SmartyHeaderCode:96445b345795672317-38681664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e70177d4ea1e2ae90360cca3db21301f5e0603' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.language.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96445b345795672317-38681664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LANG' => 0,
    'LANGUAGES' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b34579579af44_75365071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34579579af44_75365071')) {function content_5b34579579af44_75365071($_smarty_tpl) {?><form id="language_select" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
  <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['language'];?>
</h2>
  <span class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_language'];?>
</span>
  <select name="set_language" class="auto_submit">
  <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
" <?php echo $_smarty_tpl->tpl_vars['language']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
  <?php } ?>
  </select> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['submit'];?>
" />
  </form><?php }} ?>
