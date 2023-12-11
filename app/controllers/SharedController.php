<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * staff_StaffName_value_exist Model Action
     * @return array
     */
	function staff_StaffName_value_exist($val){
		$db = $this->GetModel();
		$db->where("StaffName", $val);
		$exist = $db->has("staff");
		return $exist;
	}

	/**
     * staff_Emailid_value_exist Model Action
     * @return array
     */
	function staff_Emailid_value_exist($val){
		$db = $this->GetModel();
		$db->where("Emailid", $val);
		$exist = $db->has("staff");
		return $exist;
	}

	/**
     * transcation_AccountNumber_option_list Model Action
     * @return array
     */
	function transcation_AccountNumber_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT AccountNumber AS value FROM acountdetails";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
