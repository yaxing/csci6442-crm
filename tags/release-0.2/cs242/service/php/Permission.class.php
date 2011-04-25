<?php  
/** 
*Permission module
*permission management
*
*Assign, delete, check user assignments
*
*@author Yaxing Chen
*@team SET
*@date 04/01/2011
*/      

include_once '../../config.php';

class Permission  
{
	/**
	 * error
	 * error handling function
	 * @param $msg error message
	 */
	private static function error($msg){
		echo "Error: ".$msg;
		//die();
	}
	
	
	/**
	 * findPermission
	 * check if the permission exists
	 * @param $permission
	 * @return true or error
	 */
	private static function findPermission($permission){
		$db = new Database();
		$sql = "select * from permission where permission_name = '".$permission."'";
		
		$find = $db->select($sql);
		if($find && $db->numRows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
/**
	 * isAssigned
	 * check if the permission has already been assigned to the target
	 * @param $who target
	 * @param $permission
	 * @return true or false
	 */
	private static function isAssigned($who, $permission){
		$db = new Database();
		
		$sql = "select * from assigned_permission where worker_role_type = '".$who."' 
						and permission_name = '".$permission."'";
		//echo $sql;
		$find = $db->select($sql);
		if($find && $db->numRows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
	/**
	 * assign
	 * Assign certain permission to certain target
	 * @param $who permission target, could be: 1) account person id 2) worker role type
	 * @param $permission the permission needs to be assigned
	 * @return if target doesn't exist or action failed, echo error info
	 */
	public static function assign($who, $permission){
		
		//$type = Permission::findWho($who);
		
  		if(!$findPermission = Permission::findPermission($permission)){
  			Permission::error("Can't find permission.");
  		}
  		
  		$isAssigned = Permission::isAssigned($who, $permission); 
  		
  		if($isAssigned){
  			return true;
  		}
  		
  		$sql = "insert into assigned_permission values(
  				null,
  				'".$who."',
  				'".$permission."'
  				)";
  		$db = new Database();
  		
		if($db->insert($sql) >= 0){
  			return true;
  		}
  		Permission::error("Assign permission failed.");
  	}
  
  	
  	/**
	 * Delete
	 * Delete certain permission for certain target
	 * @param $who permission target, could be: 1) account person id 2) worker role type
	 * @param $permission the permission needs to be deleted for target
	 * @return true or echo error info
	 */
	public static function unassign($who, $permission){
	  	$sql = "delete from assigned_permission where 
	  	 		worker_role_type = '".$who."' and permission_name = '".$permission."'";
		
	 	$db = new Database();
	 	if($db->delete($sql) > 0){
	 		return true;
	 	}
	 	
	 	else Permission::error("Delete permission failed.");
	}
  
	/**
	 * Check
	 * check if target has certain permission
	 * @param $who permission target, could be: 1) account person id 2) worker role type
	 * @param $permission the permission needs to be checked
	 * @return true or false
	 */
	public static function check($who, $permission){
  		return Permission::isAssigned($who, $permission);
	}
	
	/**
	 * add
	 * add new permission
	 * @param $permission new permission name
	 * @return true or false
	 */
	public static function add($permission){
  		if(Permission::findPermission($permission["name"])){
  			Permission::error("Permission already existed.");
  		}
  		
  		$db = new Database();
  		$sql = "insert into permission values('".$permission["name"]."', '".$permission["discription"]."', null)";
  		if($db->insert($sql) >= 0){
  			return true;
  		}
  		else{
  			return false;
  		}
	}
	
	/**
	 * delete
	 * delete permission
	 * @param $permission permission name
	 * @return true or false
	 */
	public static function delete($permission){
  		if(!Permission::findPermission($permission)){
  			Permission::error("Permission doesn't exist!");
  		}
  		
  		$db = new Database();
  		$sql = "delete from assigned_permission where permission_name = '".$permission."'";
  		
  		$db->delete($sql);
  		
  		$sql = "delete from permission where permission_name = '".$permission."'";
  		//echo $sql;
  		if($db->delete($sql) >= 0){
  			return true;
  		}
  		else{
  			return false;
  		}
	}
	
	
  
}// end class  
?>