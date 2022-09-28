<?php
//checks to make sure user is validated added to documents using require_once();
 if($_SESSION['is_valid_admin']!==true){
	$error="Not Authorized";
	include '../errors/error_mvc.php';
	exit;
}
?>