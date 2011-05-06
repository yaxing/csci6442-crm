<?php
/**
 * Hierarchy maintainence 
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 05/02/2011
 */
//include_once 'Database.class.php';
include_once '../../config.php';

class Hierarchy{
	private static $role;
	private static $tree;

	private static $curNode = '';
	private static $height;//record the height or the node with largest height.
										  //eg. array('admin'=>3, 'manager'=>2)
	
	/**
	 * initialization
	 */
	private static function init(){
		Hierarchy::$role = array();
		Hierarchy::$tree = array();

		Hierarchy::$height = array();
		Hierarchy::$curNode = '';
	} 
	
	/**
	 * 
	 * singleton
	 * get tree
	 */
	public static function getTree(){
		if(Hierarchy::$tree == null || count(Hierarchy::$tree)){
			Hierarchy::createTree();
		}
		return Hierarchy::$tree;
	}
	
	/**
	 * 
	 * recreate the tree when roles are updated
	 */
	public static function refreshTree(){
		Hierarchy::createTree();
	}
	
	/**
	 * create tree
	 */
	private static function createTree(){
		Hierarchy::init();
		
		$db = new Database();
		
		//create role nodes
		$sql = "select role_type from role_type";
		$db->select($sql);
		$result = $db->fetchAssoc();
		if($result == null || count($result) == 0){
			return false;
		}
		
		foreach($result as $key=>$value){
			array_push(Hierarchy::$role, $value['role_type']);
		}
		
		//create hierarchy tree for role nodes
		foreach(Hierarchy::$role as $key=>$value){
			$curRole = $value;
			$sql = "select a.`role_type` from `role_type` as a join `role_type` as b on a.`parent_role_type` = b.`role_type` and b.`role_type` = '$curRole'";
			$db->select($sql);
			$result = $db->fetchAssoc();
			
			//reconstruct roles into a 1-d array
			$tmp = array();
			foreach($result as $value){
				array_push($tmp, $value['role_type']);	
			}
			Hierarchy::$tree[$curRole] = $tmp;
		}
	} 
	
	/**
	 * select the role with the highest hierarchy in a given group of roles
	 * @param array $roles
	 */
	public static function getEffeciveRole($roles){
		Hierarchy::$height = array();
		
		//calculate height for each designated role
		foreach($roles as $value){
			Hierarchy::$curNode = $value;
			Hierarchy::$height[$value] = 1;
			Hierarchy::dfs($value);	
		}
		
		$max = $roles[0];
		foreach($roles as $value){
			if(Hierarchy::$height[$value] > Hierarchy::$height[$max]){
				$max = $value;
			}
		}
		//print_r(Hierarchy::$tree);
//		echo $max;
//		die();
		return $max;
	}
	
	/**
	 * 
	 * perform depth first search to calculate height of certain nodes
	 * @param string @role
	 */
	private static function dfs($curRole){
		//get position of current role
		$curNode = Hierarchy::$curNode;
		$tmp = Hierarchy::$tree[$curRole];
		if($tmp == null || count($tmp) == 0){
			return;
		}
		if(Hierarchy::$height[$curNode] != null){
			Hierarchy::$height[$curNode] ++;
		}
		foreach($tmp as $value){
			Hierarchy::dfs($value);
		}
	}
}

?>