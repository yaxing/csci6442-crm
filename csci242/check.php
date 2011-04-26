<?php
/**
 * Create Communication
 * 
 * @author Tianyou Li
 * @team SALES
 * @date 04/03/2010
 */
 
/*$username ="";
$password ="";

if(isset($_COOKIE["private"]['user_name'])){
	$username = $_COOKIE["private"]['user_name'];
}
if(isset($_COOKIE["private"]['user_pwd'])){	
	$password = $_COOKIE["private"]['user_pwd'];
}
if(isset($_COOKIE["private"]['user_name'])){
	$username = $_COOKIE["private"]['user_name'];
}*/
$user_role = "";
if(isset($_COOKIE["basic"]['user_role'])){
	$user_role = $_COOKIE["basic"]['user_role'];
}
/*$cookie = "<cookies>";
$cookie .= "<username>".$username."</username>";
$cookie .= "<password>".$password."</password>";
$cookie .= "</cookies>";*/
$cookie = "<cookies>";
$cookie .= "<user_role>".$user_role."</user_role>";
$cookie .= "</cookies>";
echo $cookie;
?>