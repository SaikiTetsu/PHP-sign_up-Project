<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<title>Game Schedule Menu</title>
<link rel="stylesheet" href="../../styles/base.css" type="text/css" />
</head>
<body>
<div id="schedule_page">
<div id="head">
<div class="main_nav"><a href="../../index.php">Home</a> | <a href="../../map.php">Maps</a> | <a href="../../action.php">Action</a>    | <a href="../../teams.php">Teams</a> | <a href="../../signup.html">Online
    Signup</a> | <a href="#">Game Schedule</a> </div>
<h2>Schedules</h2>
<?php date_default_timezone_set('America/Denver'); ?>
</div><!-- end head -->
<p>Please click on the team  below to view the season schedule.</p>
<div id="team_links">

<?php  foreach($team_names as $team_name): ?>

	<h3><a href="index.php?action=team_schedule&teamid=<?php echo $team_name['teamid'] ?>"><?php echo $team_name['team_name']; ?></a> </h3>


<?php endforeach; ?>

</div>

<div id="foot" class="credits">&copy; Ashland Valley
    Soccer League <?php echo date("Y"); ?>  </div>
</div> <!-- end schedule_page -->
</body>
</html>
