<?php
if(!defined('CC_DS')) die('Access Denied');
if ($GLOBALS['config']->has('AddShoppers', 'status') && $GLOBALS['config']->get('AddShoppers', 'status') && !$GLOBALS['config']->isEmpty('AddShoppers', 'addshoppers_shop_id')) {
	$GLOBALS['smarty']->assign('addshoppers_shop_id', $GLOBALS['config']->get('AddShoppers', 'addshoppers_shop_id'));
	
	if ($GLOBALS['config']->get('AddShoppers', 'addshoppers_default_buttons')) 
		$GLOBALS['smarty']->assign('show_addshoppers_default_buttons', true);
		
	if ($GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_status')) {
		$GLOBALS['smarty']->assign('show_addshoppers_purchase_sharing', true);
		
		$GLOBALS['smarty']->assign('addshoppers_purchase_sharing_header', $GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_header'));
		$GLOBALS['smarty']->assign('addshoppers_purchase_sharing_image', $GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_image'));
		$GLOBALS['smarty']->assign('addshoppers_purchase_sharing_link', $GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_link'));
		$GLOBALS['smarty']->assign('addshoppers_purchase_sharing_title', $GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_title'));
		$GLOBALS['smarty']->assign('addshoppers_purchase_sharing_description', $GLOBALS['config']->get('AddShoppers', 'addshoppers_purchase_sharing_description'));
	}
	
	$file_name = 'js.tpl';
	$form_file = str_replace('hooks/','',$GLOBALS['gui']->getCustomModuleSkin('plugins', dirname(__FILE__), $file_name));
	$GLOBALS['gui']->changeTemplateDir($form_file);
	$display_html[] = array(
		'macro_name' => 'JANRAIN',
		'html' => $GLOBALS['smarty']->fetch($file_name)
	);
	$GLOBALS['gui']->changeTemplateDir();
}