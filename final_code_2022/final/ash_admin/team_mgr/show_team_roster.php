<?php
 session_start(); //start new session or open current
 require_once('../admin_mgr/session_check.php');//validate user
?>
<?php include '../view/header_mvc.php'; ?>
<div id="content">
<h2>Team Roster - <?php echo $team_name ?></h2>
<p class="centerit">Coach&nbsp;-&nbsp;<?php echo $co_fname ?>&nbsp;<?php echo $co_lname ?></p>
<div id="sidebar">
<!-- returns team_name and teamid -->
<?php foreach($teamstuff as $team):?>
	<p><a href=".?teamid=<?php echo $team['teamid'];?>&action=view_rosters"><?php echo $team['team_name']; ?></a></p>
<?php endforeach; ?>
</div> <!-- end sidebar -->

<div id="roster_col">
<!-- roster information loaded into table -->
<table > 
	<tr>
		<th>Player ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone</th>
	</tr>
<?php foreach($players as $player): ?>
	<tr>
		<td><?php echo $player['playerid']; ?></td>
		<td><?php echo $player['pla_fname']; ?></td>
		<td><?php echo $player['pla_lname']; ?></td>
		<td><?php echo $player['pla_phone']; ?></td>
	</tr>
  <?php endforeach; ?>
</table>

</div><!-- end roster_col -->

</div><!-- end content -->
<?php include '../view/footer_mvc.php'; ?>