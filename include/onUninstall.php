<?php
function xoops_module_uninstall_�Ҳեؿ�(&$module) {
  GLOBAL $xoopsDB;
	$date=date("Ymd");

 	rename(XOOPS_ROOT_PATH."/uploads/�Ҳեؿ�",XOOPS_ROOT_PATH."/uploads/�Ҳեؿ�_bak_{$date}");

	return true;
}

