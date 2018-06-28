<?php
/**
 * CubeCart v5
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 */
if (!defined('CC_INI_SET')) die('Access Denied');
Admin::getInstance()->permissions('maintenance', CC_PERM_FULL, true);

global $lang, $glob;

if (isset($_POST['execute'])) {
	if (!empty($_POST['query'])) {
		$GLOBALS['db']->query(stripslashes($_POST['query']), false);
		if ($GLOBALS['db']->error()) {
			$GLOBALS['main']->setACPWarning($GLOBALS['db']->errorInfo());
		} else {
			$GLOBALS['main']->setACPNotify($lang['maintain']['affected_rows'].': '.(int)$GLOBALS['db']->affected());
		}
	} else {
		$GLOBALS['main']->setACPWarning($lang['maintain']['no_query_entered']);
	}
} else {
	$GLOBALS['main']->setACPWarning($lang['maintain']['expert_use_only']);
}

$GLOBALS['main']->addTabControl($lang['maintain']['tab_query_sql'], 'general');

$GLOBALS['smarty']->assign('INFO', sprintf($lang['maintain']['title_db_info'], $GLOBALS['db']->serverVersion(), $glob['dbhost'], $glob['dbusername'], $glob['dbhost']));
$prefix	= (!$GLOBALS['config']->isEmpty('config', 'dbprefix')) ? $GLOBALS['config']->get('config', 'dbprefix') : false;
$GLOBALS['smarty']->assign('PREFIX',$prefix);
if(!empty($_POST['query'])){
	$GLOBALS['smarty']->assign('VAL_QUERY', stripslashes($_POST['query']));
}
$page_content = $GLOBALS['smarty']->fetch('templates/maintenance.sql.php');