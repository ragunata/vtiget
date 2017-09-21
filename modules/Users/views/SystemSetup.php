<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Users_SystemSetup_View extends Vtiger_Index_View {
	
	public function preProcess(Vtiger_Request $request) {
		return true;
	}
	
	public function process(vtiger_request $request) {
		$modulename = $request->getmodule();
		$viewer = $this->getviewer($request);
		$usermodel = users_record_model::getcurrentusermodel();
		$isfirstuser = users_crmsetup::isfirstuser($usermodel);

		if($isfirstuser) {
			$viewer->assign('is_first_user', $isfirstuser);
			$viewer->assign('packages_list', users_crmsetup::getpackageslist());
			$viewer->view('systemsetup.tpl', $modulename);
		} else {
			header ('location: index.php');
			exit();
		}
	}
	
	function postProcess(Vtiger_Request $request) {
		return true;
	}
	
}