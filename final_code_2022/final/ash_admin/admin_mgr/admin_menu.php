<?php
session_start();

if($_SESSION['is_valid_admin']!==true){
	$error="Not Authorized";
	include '../errors/error_mvc.php';
	exit;
}

 include '../view/header_mvc.php';?>
 <div id="content">
 <h2>Menu</h2>
	<p><a href="../player_mgr">Player Manager</a></p>
	<p><a href="../team_mgr">Team Manager</a></p>
	<p><a href="../game_mgr">Game Manager</a></p>
	<p><a href="../admin_mgr/index.php?action=logout">Logout</a></p>
 </div><!-- end content -->
<?php include '../view/footer_mvc.php'; ?>
