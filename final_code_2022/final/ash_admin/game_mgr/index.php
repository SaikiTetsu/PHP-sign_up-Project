<?php
/*controller for game area*/
require('../model/database.php');
require('../model/game_db.php');

if(isset($_POST['action'])){
	$action=$_POST['action'];
 }else if(isset($_GET['action'])){
	$action=$_GET['action'];
 }else {
	$action="display_schedule_menu";

 }
 if($action=="display_schedule_menu") {
 $team_names=get_team_names();
 include('display_schedule_menu.php');
 }
 if($action=='team_schedule'){
 /*gets team id from schedule_menu.php*/

    $teamid=$_GET['teamid'];
	/*gets requested team's name using fetch() method */
	$query="select team_name from team where teamid=$teamid";
	$nameofteam=$db->query($query);
	$nameofteam=$nameofteam->fetch();
	$team_name=$nameofteam['team_name'];

	/*calls get_team_schedule() function to retrieve opponents and other game information*/
	$sched_info=get_team_schedule($teamid);
	include('display_schedule.php');

 }
?>
