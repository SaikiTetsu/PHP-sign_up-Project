<?php

	$dsn='mysql:host=localhost;dbname=ashland';
	$username='ldevlin';
	$password='changeme';
	try {
		$db=new PDO($dsn,$username,$password);
	} catch (PDOException $e){
		$error_message=$e->getMessage();
		include('../errors/database_error_mvc.php');
		exit();
	}
?>
