<?php
/***********************************************************************************************
** The contents of this file are subject to the Vtiger Module-Builder License Version 1.3
 * ( "License" ); You may not use this file except in compliance with the License
 * The Original Code is:  Technokrafts Labs Pvt Ltd
 * The Initial Developer of the Original Code is Technokrafts Labs Pvt Ltd.
 * Portions created by Technokrafts Labs Pvt Ltd are Copyright ( C ) Technokrafts Labs Pvt Ltd.
 * All Rights Reserved.
**
*************************************************************************************************/

include_once 'modules/Vtiger/CRMEntity.php';

class Agents extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_agents';
	var $table_index= 'agentsid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_agentscf', 'agentsid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_agents', 'vtiger_agentscf');
	
	/**
	 * Other Related Tables
	 */
	var $related_tables = Array( 
					'vtiger_agentscf' => Array('agentsid')
					);
	

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_agents'   => 'agentsid',
	    'vtiger_agentscf' => 'agentsid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'Agents No' => Array('agents', 'agentsno'),
/*FIELDSTART*/'name'=> Array('agents', 'agents_tks_name'),/*FIELDEND*/
		'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'Agents No' => 'agentsno',
/*FIELDSTART*/'name'=> 'agents_tks_name',/*FIELDEND*/
		'Assigned To' => 'assigned_user_id'
	);

	// Make the field link to detail view
	var $list_link_field = 'agents_tks_name';

	// For Popup listview and UI type support
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'Agents No' => Array('agents', 'agentsno'),
/*FIELDSTART*/'name'=> Array('agents', 'agents_tks_name'),/*FIELDEND*/
		'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
	);
	var $search_fields_name = Array (
		/* Format: Field Label => fieldname */
		'Agents No' => 'agentsno',
/*FIELDSTART*/'name'=> 'agents_tks_name',/*FIELDEND*/
		'Assigned To' => 'assigned_user_id',
	);

	// For Popup window record selection
	var $popup_fields = Array ('agents_tks_name');

	// For Alphabetical search
	var $def_basicsearch_col = 'agents_tks_name';

	// Column value to use on detail view record text display
	var $def_detailview_recname = 'agents_tks_name';

	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var $mandatory_fields = Array('agents_tks_name','assigned_user_id');

	var $default_order_by = 'agents_tks_name';
	var $default_sort_order='ASC';

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler($moduleName, $eventType) {
		global $adb;
 		if($eventType == 'module.postinstall') {
			// TODO Handle actions after this module is installed.
			Agents::checkWebServiceEntry();
		} else if($eventType == 'module.disabled') {
			// TODO Handle actions before this module is being uninstalled.
		} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
			Agents::checkWebServiceEntry();
		}
 	}
	
	/*
	 * Function to handle module specific operations when saving a entity
	 */
	function save_module($module)
	{
		global $adb;
		$q = 'SELECT '.$this->def_detailview_recname.' FROM '.$this->table_name. ' WHERE ' . $this->table_index. ' = '.$this->id;
		
		$result =  $adb->pquery($q,array());
		$cnt = $adb->num_rows($result);
		if($cnt > 0) 
		{
			$label = $adb->query_result($result,0,$this->def_detailview_recname);
			$q1 = 'UPDATE vtiger_crmentity SET label = \''.$label.'\' WHERE crmid = '.$this->id;
			$adb->pquery($q1,array());
		}
	}
	/**
	 * Function to check if entry exsist in webservices if not then enter the entry
	 */
	static function checkWebServiceEntry() {
		global $log;
		$log->debug("Entering checkWebServiceEntry() method....");
		global $adb;

		$sql       =  "SELECT count(id) AS cnt FROM vtiger_ws_entity WHERE name = 'Agents'";
		$result   	= $adb->query($sql);
		if($adb->num_rows($result) > 0)
		{
			$no = $adb->query_result($result, 0, 'cnt');
			if($no == 0)
			{
				$tabid = $adb->getUniqueID("vtiger_ws_entity");
				$ws_entitySql = "INSERT INTO vtiger_ws_entity ( id, name, handler_path, handler_class, ismodule ) VALUES".
						  " (?, 'Agents','include/Webservices/VtigerModuleOperation.php', 'VtigerModuleOperation' , 1)";
				$res = $adb->pquery($ws_entitySql, array($tabid));
				$log->debug("Entered Record in vtiger WS entity ");	
			}
		}
		$log->debug("Exiting checkWebServiceEntry() method....");					
	}
}