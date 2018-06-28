<?php /* Smarty version Smarty-3.1.15, created on 2018-06-28 03:35:51
         compiled from "C:\wamp64\www\skins\mican\templates\box.documents.php" */ ?>
<?php /*%%SmartyHeaderCode:323245b345797b4afe5-78872910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd212600ee398513f70a24122b2fb817c02fd24fb' => 
    array (
      0 => 'C:\\wamp64\\www\\skins\\mican\\templates\\box.documents.php',
      1 => 1529902001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323245b345797b4afe5-78872910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOCUMENTS' => 0,
    'document' => 0,
    'CONTACT_URL' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5b345797cae745_21848262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b345797cae745_21848262')) {function content_5b345797cae745_21848262($_smarty_tpl) {?><ul class="documents">
  <?php if (isset($_smarty_tpl->tpl_vars['DOCUMENTS']->value)&&count($_smarty_tpl->tpl_vars['DOCUMENTS']->value)>0) {?>
  	<?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['document']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DOCUMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->_loop = true;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['document']->value['doc_url_openin']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
</a></li>
    <?php } ?>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['CONTACT_URL']->value)) {?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['CONTACT_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
</a></li>
  <?php }?>
</ul><?php }} ?>
