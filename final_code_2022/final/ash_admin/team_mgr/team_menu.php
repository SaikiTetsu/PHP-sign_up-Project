<?php
session_start();
/*if(!isset($_SESSION['is_valid_admin'])){*/
if($_SESSION['is_valid_admin']!==true){
	$error="Not Authorized";
	include '../errors/error_mvc.php';//this works slick!!!!
	exit;
}
 /*main menu for team manager area gardner 11/1/11*/
 include '../view/header_mvc.php';?>
 <div id="content">
 <h2>Team Menu</h2>
	<p><a href='.?action=list_noteam_players'>Add Applicants to Team</a></p>
	<p><a href='.?action=view_rosters'>Review team rosters</a></p>
 </div><!-- end content -->
<?php include '../view/footer_mvc.php'; ?> 