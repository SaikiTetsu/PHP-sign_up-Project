<?php
 /* controller for admin stuff  */
session_start(); //starts a new session or resumes a previous session
//enter required files
require_once('../model/database.php');//PDO obj database connection script
require_once('../model/admin_db.php');//functions used for admin area.

if(isset($_POST['action'])){
	$action=$_POST['action'];

}else if(isset($_GET['action'])){
   $action=$_GET['action'];
}else{
	$action='login';
}
// This is an alternative to using a series of 'if statements' to control routes
switch($action){
	case 'login':
	   //code for logging in to the admin area
	   //check for completed fields


	   if(!isset($_POST['username']) || !isset($_POST['password'])){
		$login_message='You must enter both a username and password to log on.';

		include('login.php');
	   }
	   //check for valid username/password pair
	   else if(!is_valid_admin_login($_POST['username'], $_POST['password'])){
			$login_message='Invalid username or password entered.';
			include('login.php');
	    //set session variable and allow user to view admin_menu page
	   }else{
			$_SESSION['is_valid_admin']= true;
			include('admin_menu.php');
	   }
		break;

	case 'logout':
		//code to end session
		$_SESSION = array();   // Clear all session data from memory
        session_destroy();     // Clean up the session ID
        $login_message = 'You have been logged out.';
		include('login.php');
		break;
}//end switch

?>
