<?php

function get_team_schedule($teamid){
	global $db;
	$query="select team_name,gm_date,gm_time,fld_name from team,game,team_game,field where team.teamid=team_game.teamid and
team_game.gameid=game.gameid and
game.fieldid=field.fieldid and
game.gameid in(select
game.gameid from game,team,team_game where
game.gameid=team_game.gameid and
team.teamid=team_game.teamid and
team.teamid=$teamid)
and team.teamid<>$teamid order by game.gm_date";
$schedule_detail=$db->query($query);
return $schedule_detail;
}
function get_team_names(){
	global $db;
	$query="select * from team order by team_name";
	$teams=$db->query($query);
	return $teams;

}

?>
