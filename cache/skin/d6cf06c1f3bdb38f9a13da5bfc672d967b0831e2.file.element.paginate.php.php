<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 01:39:40
         compiled from "C:\wamp64\www\admin\skins\default\templates\element.paginate.php" */ ?>
<?php /*%%SmartyHeaderCode:273015b343c5cd694b1-04516036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6cf06c1f3bdb38f9a13da5bfc672d967b0831e2' => 
    array (
      0 => 'C:\\wamp64\\www\\admin\\skins\\default\\templates\\element.paginate.php',
      1 => 1529901917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273015b343c5cd694b1-04516036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'show' => 0,
    'var_name' => 0,
    'current' => 0,
    'params' => 0,
    'anchor' => 0,
    'i' => 0,
    'total' => 0,
    'view_all' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b343c5da04810_54696585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b343c5da04810_54696585')) {function content_5b343c5da04810_54696585($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['page']->value>=$_smarty_tpl->tpl_vars['show']->value-1)) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = 1;?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
">1</a> &hellip;
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['page']->value>1)) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['page']->value-1;?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
">&lt;</a>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
	<?php if (($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['page']->value-floor($_smarty_tpl->tpl_vars['show']->value/2))) {?>
	<?php continue 1?>
	<?php }?>

	<?php if (($_smarty_tpl->tpl_vars['i']->value>$_smarty_tpl->tpl_vars['page']->value+floor($_smarty_tpl->tpl_vars['show']->value/2))) {?>
	<?php break 1?>
	<?php }?>

	<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['i']->value;?>
	<?php if (($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page']->value)) {?>
  		<strong>[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]</strong>
	<?php } else { ?>
  		<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
  	<?php }?>
<?php }} ?>

<?php if (($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['total']->value)) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['page']->value+1;?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
">&gt;</a>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value)) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['total']->value;?>
  &hellip; <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</a>
<?php }?>


<?php if (($_smarty_tpl->tpl_vars['view_all']->value)) {?>
	<?php if ((strtolower($_smarty_tpl->tpl_vars['page']->value)!='all')) {?>
	  <?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = 'all';?>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['view_all'];?>
</a>
	<?php } else { ?>
	  <strong>[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['view_all'];?>
]</strong>
	<?php }?>
<?php }?><?php }} ?>
