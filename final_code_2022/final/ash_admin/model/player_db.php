<?php
function get_all_players(){
    global $db;
	$query= 'select playerid,pla_lname,pla_fname,pla_phone from player order by pla_lname';
	$players = $db->query($query);
	return $players;
}
function get_all_new_players(){
	global $db;
	$query= 'select * from new_player_tmp';
	$player_info=$db->query($query);
	return $player_info;
}
function get_player_info($playerid){
	global $db;


	$query = "select * from player where playerid=$playerid";

	$player_info= $db->query($query);
	return $player_info;
}

function update_player_info($id){
	global $db;
	$query ="update player set pla_lname='$_POST[pla_lname]', pla_fname='$_POST[pla_fname]',pla_phone='$_POST[pla_phone]',pla_par_lname='$_POST[pla_par_lname]', pla_par_fname='$_POST[pla_par_fname]',pla_add='$_POST[pla_add]',pla_city='$_POST[pla_city]',pla_state='$_POST[pla_state]',pla_zip='$_POST[pla_zip]',pla_bdate='$_POST[pla_bdate]',teamid='$_POST[teamid]' where playerid=$id";
	$result = $db->exec($query);//query will return # of rows affected
	return $result;
}
function delete_player($playerid){
	global $db;
	$query = "delete from player where playerid=$playerid";
	$deleted = $db->exec($query);
	return $deleted;/* this variable would signal a successful deletion */
}
function delete_tmp_player(){
	global $db;
	$query="delete from new_player_tmp where pla_phone='$_POST[pla_phone]' and pla_fname='$_POST[pla_fname]' and pla_lname='$_POST[pla_lname]'";
	$deleted= $db->exec($query);
	return $deleted;
}
function add_tmp_player(){
	global $db;
	$todays=date('Y-m-d');
$query="insert into new_player_tmp (pla_lname,pla_fname,pla_phone,pla_par_lname,pla_par_fname,pla_add,pla_city,pla_state,pla_zip,pla_bdate,date_added)values('$_POST[pla_lname]','$_POST[pla_fname]','$_POST[pla_phone]','$_POST[pla_par_lname]','$_POST[pla_par_fname]','$_POST[pla_add]','$_POST[pla_city]','$_POST[pla_state]','$_POST[pla_zip]','$_POST[pla_bdate]','$todays')";
$result=$db->exec($query);
return $result;
}
/*the following function adds a player to the player table in ashland and deletes that player from the new_player_tmp table*/
function convert_player(){
	global $db;

$query="insert into player(playerid,pla_lname,pla_fname,pla_phone, pla_par_lname,pla_par_fname,pla_add,pla_city,pla_state,pla_zip,pla_bdate)select NULL, pla_lname,pla_fname, pla_phone, pla_par_lname, pla_par_fname, pla_add, pla_city,pla_state,pla_zip,pla_bdate from new_player_tmp where pla_phone='$_POST[pla_phone]' and pla_fname='$_POST[pla_fname]' and pla_lname='$_POST[pla_lname]'";
$result=$db->exec($query);
return $result;
}
?>
