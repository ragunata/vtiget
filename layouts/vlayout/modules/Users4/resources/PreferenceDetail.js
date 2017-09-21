/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Users4_Detail_Js("Users4_PreferenceDetail_Js",{},{
    
	/**
	 * register Events for my preference
	 */
	registerEvents : function(){
		this._super();
		Users4_PreferenceEdit_Js.registerChangeEventForCurrencySeperator();
	}
});