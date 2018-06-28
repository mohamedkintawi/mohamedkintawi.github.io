<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:50
         compiled from "C:\wamp64\www\skins\mican\templates\element.navigation_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:288245b345796bb76b9-90723650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2968de10e91cfa7b5f33629a03eb9e9a49c9592e' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\element.navigation_tree.php',
      1 => 1529902002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288245b345796bb76b9-90723650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BRANCH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b345796cc1fe1_05434006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b345796cc1fe1_05434006')) {function content_5b345796cc1fe1_05434006($_smarty_tpl) {?><li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a>
  <?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])) {?>
  <ul><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['children'];?>
</ul>
  <?php }?>
</li><?php }} ?>
