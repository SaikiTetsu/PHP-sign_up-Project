<?php
/*controller for team area*/
/*
XXXXXXXXXXXXXXXXXXXXXXXXXXX
possible values for the "action" variable
1. if no value set for action variable include team_menu.php
2. action=list_noteam_players - lists players added to player table but with no team assigned.
3. assign_toteam - assigns player to a team
4. view_rosters - displays the selected team roster on show_team_roster.php
XXXXXXXXXXXXXXXXXXXXXXXXXXX
*/
require('../model/database.php');
require('../model/team_db.php');

//code to intercept 'action' variable no matter how sent
 if(isset($_POST['action'])){
	$action=$_POST['action'];
 }else if(isset($_GET['action'])){
	$action=$_GET['action'];
 }else {
	//$action='list_noteam_players';

	include('team_menu.php');
	exit;
 }
if($action=='list_noteam_players'){
	$teamstuff=list_of_teams();
	$noteam_players=players_with_noteam();
	include('noteam_players.php');
}else if($action=='assign_toteam'){
	$playerid=$_POST['playerid'];
	$teamid=$_POST['teamid'];
	$result=assign_toteam($playerid,$teamid);
	if(!$result){
		$error="Query failed - $playerid not assigned to $teamid";
		include('../errors/error_mvc.php');
	}else{
		$message= "<p>Player #$playerid assigned to team # $teamid</p>";
		include('../errors/message_mvc.php');
	}
}
else if($action=='view_rosters'){
    $teamstuff=list_of_teams();
	if(!isset($teamid)){
		$teamid=$_GET['teamid'];
		if(!isset($teamid)){
			$teamid=1;
		}
	}
  $players=team_roster($teamid);
  $details=get_coach_and_team_name($teamid);
  //fetch() allows you to pull elements from the array of a single record
   $details=$details->fetch();
   $team_name=$details['team_name'];
   $co_lname=$details['co_lname'];
   $co_fname=$details['co_fname'];
   include('show_team_roster.php');
}
