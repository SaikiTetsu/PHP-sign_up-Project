<!DOCTYPE html">

<html>
<head>
<meta charset="utf-8" />
<title>Team Schedule</title>
<link rel="stylesheet" href="../../styles/base.css" type="text/css" />
</head>

<body>
<div id="schedule_page">
<div id="head">
<div class="main_nav"><a href="../../index.php">Home</a> | <a href="../../map.php">Maps</a> | <a href="../../action.php">Action</a>    | <a href="../../teams.php">Teams</a> | <a href="../../signup.html">Online
    Signup</a> | <a href=".">Game Schedule</a> </div> 
	<?php date_default_timezone_set('America/Denver'); ?>
<h2>Schedule - <?php echo $team_name ?></h2>

</div><!-- end head -->

<table id="sched_table">
<tr>
	<th>Opponent</th>
	<th>Date</th>
	<th>Time</th>
	<th>Field</th>
</tr>
<?php  foreach($sched_info as $info): ?>
<tr>
	<td><?php  echo $info['team_name']; ?> </td>
	<td><?php  echo $info['gm_date']; ?></td>
	<td><?php  echo $info['gm_time']; ?></td>
	<td><?php echo $info['fld_name']; ?></td>
</tr>
<?php endforeach; ?>
</table>

<div id="foot" class="credits">&copy; Ashland Valley
    Soccer League <?php echo date("Y"); ?>  </div>
</div> <!-- end schedule_page -->
</body>
</html>
