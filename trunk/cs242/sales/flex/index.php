<?php
/*
 * index page (i.e. index.html) gets its data from this php, OR just use this php as a logic gate.
 * login page (i.e. login.html) gets cookie information(if saved) from this php, OR gets cookie information using flex.
 */
 

if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && isset($_COOKIE['role'])) {
    // retrieve username and its corresponding password and role in the database
    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass)) || ($_POST['role'] != md5($role))) { 
		$cookie .="</cookies>";
        header('Location: login.html');// login again
    } else {
        //echo 'Welcome back ' . $_COOKIE['username'];
		$cookie .= "<username>".$_COOKIE['username'].
		"</username><password>".$_COOKIE['password'].
		"</password><role>".$_COOKIE['role']."</role>";
		$cookie .="</cookies>";
    }
    
} else {	
    header('Location: login.html');
}
print ($cookie) // 
?>