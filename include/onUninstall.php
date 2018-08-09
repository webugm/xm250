<?php
function xoops_module_uninstall_ugm_voucher(&$module) {
  GLOBAL $xoopsDB;
	$date=date("Ymd");
 	rename(XOOPS_ROOT_PATH."/uploads/ugm_voucher",XOOPS_ROOT_PATH."/uploads/ugm_voucher_bak_{$date}");
	return true;
}

