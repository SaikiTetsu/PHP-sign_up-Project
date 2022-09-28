<?php
function players_with_noteam(){
	global $db;
	$query='select playerid, pla_lname,pla_fname from player where teamid is NULL';
	$noteam_players=$db->query($query);
	return $noteam_players;
}
function assign_toteam($playerid,$teamid){
	global $db;
	$query="update player set teamid='$teamid' where playerid = $playerid";
	$result = $db->exec($query);//query will return # of rows affected
	return $result;
}
/* gets list of teams for sidebar */
function list_of_teams(){
	global $db;
	$query='select teamid,team_name from team order by team_name';
	$teamstuff=$db->query($query);
	return $teamstuff;
}
//get all players and coach on selected team  

function team_roster($teamid){
	global $db;
	$query="select playerid, pla_fname, pla_lname, pla_phone, co_fname, co_lname,co_phone,team_name from player,coach,team where player.teamid=team.teamid and coach.coachid=team.coachid and team.teamid=$teamid";
	$players=$db->query($query);
	return $players;
}
function get_coach_and_team_name($teamid){
   global $db;
   //get team_name and co_lname and co_fname
   $query="select team_name, co_fname, co_lname from coach,team where team.coachid=coach.coachid and teamid=$teamid";
  
   $details=$db->query($query);
   return $details;
}
?>