<?php
/**
 * Create Communication
 * 
 * @author Tianyou Li
 * @team SALES
 * @date 04/03/2010
 */
 
$username ="";
$password ="";

if(isset($_COOKIE["private"]['user_name'])){
	$username = $_COOKIE["private"]['user_name'];
}
if(isset($_COOKIE["private"]['user_pwd'])){	
	$password = $_COOKIE["private"]['user_pwd'];
}
$cookie = "<cookies>";
$cookie .= "<username>".$username."</username>";
$cookie .= "<password>".$password."</password>";
$cookie .= "</cookies>";
echo $cookie;
?>