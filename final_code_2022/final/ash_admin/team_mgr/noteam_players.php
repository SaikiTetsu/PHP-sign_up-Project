<?php
 session_start(); //start new session or open current
 require_once('../admin_mgr/session_check.php');//validate user
?>
<?php include '../view/header_mvc.php'; ?>
<table id="listtable">
<caption><h3>Assign to Teams</h3></caption>
<tr><th>Player ID</th>
    <th>First Name</th>
	<th>Last Name</th>
</tr>
<?php foreach($noteam_players as $noteam): ?>
<tr>
	<td><?php echo $noteam['playerid']; ?></td>
    <td><?php echo $noteam['pla_fname'];?></td> 
    <td><?php echo $noteam['pla_lname']; ?></td>
	<td><form action='.' method="post">
	<input type="hidden" name='action' value='assign_toteam' />
	<input type="hidden" name="playerid" value="<?php echo $noteam['playerid']; ?>" /> 
	<select id="teamid" name="teamid">
		    <option value="NULL">Select Team</option>
			<?php foreach($teamstuff as $team):?>
			<option value="<?php echo $team['teamid'];?>"><?php echo $team['team_name']; ?></option>
			<?php endforeach; ?>
			<?php $teamstuff=list_of_teams(); ?>
	</select>
	<?php reset($teamstuff); ?>
	<input type="submit" value="Assign to team" />
	</form>
	</td>
</tr>
<?php endforeach; ?>
</table>

<?php include '../view/footer_mvc.php'; ?>