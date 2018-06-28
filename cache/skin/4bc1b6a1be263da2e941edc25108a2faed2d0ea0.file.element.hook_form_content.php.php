<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 01:39:35
         compiled from "C:\wamp64\www\admin\skins\default\templates\element.hook_form_content.php" */ ?>
<?php /*%%SmartyHeaderCode:124445b343c5790ec00-70739534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc1b6a1be263da2e941edc25108a2faed2d0ea0' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\element.hook_form_content.php',
      1 => 1529901917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124445b343c5790ec00-70739534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_TAB_CONTENT' => 0,
    'tabfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b343c57b4f892_07826729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b343c57b4f892_07826729')) {function content_5b343c57b4f892_07826729($_smarty_tpl) {?><!-- Bring in Tab Content for plugin hooks. -->
<?php if ($_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['tabfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabfile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabfile']->key => $_smarty_tpl->tpl_vars['tabfile']->value) {
$_smarty_tpl->tpl_vars['tabfile']->_loop = true;
?>
  	  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tabfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } ?>
<?php }?><?php }} ?>
