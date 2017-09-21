<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Users6_SaveCalendarSettings_Action extends Users6_Save_Action {


	public function process(Vtiger_Request $request) {
		$recordModel = $this->getRecordModelFromRequest($request);
		
		$recordModel->save();
		$this->saveCalendarSharing($request);
		header("Location: index.php?module=Calendar&view=Calendar");
	}

	/**
	 * Function to update Calendar Sharing information
	 * @params - Vtiger_Request $request
	 */
	public function saveCalendarSharing(Vtiger_Request $request){
		
		$sharedIds = $request->get('sharedIds');
		$sharedType = $request->get('sharedtype');

		$currentUserModel = Users6_Record_Model::getCurrentUserModel();
		$calendarModuleModel = Vtiger_Module_Model::getInstance('Calendar');
		$accessibleUsers6 = $currentUserModel->getAccessibleUsers6ForModule('Calendar');

		if($sharedType == 'private'){
			$calendarModuleModel->deleteSharedUsers6($currentUserModel->id);
		}else if($sharedType == 'public'){
            $allUsers6 = $currentUserModel->getAll(true);
			$accessibleUsers6 = array();
			foreach ($allUsers6 as $id => $userModel) {
				$accessibleUsers6[$id] = $id;
			}
			$calendarModuleModel->deleteSharedUsers6($currentUserModel->id);
			$calendarModuleModel->insertSharedUsers6($currentUserModel->id, array_keys($accessibleUsers6));
		}else{
			if(!empty($sharedIds)){
				$calendarModuleModel->deleteSharedUsers6($currentUserModel->id);
				$calendarModuleModel->insertSharedUsers6($currentUserModel->id, $sharedIds);
			}else{
				$calendarModuleModel->deleteSharedUsers6($currentUserModel->id);
			}
		}
	}
}
