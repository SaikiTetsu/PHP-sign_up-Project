<?php
  session_start(); //start new session or open current
  require_once('../admin_mgr/session_check.php');//validate user
?>
<?php include '../view/header_mvc.php'; ?>

<table id="listtable">
<caption><h3>Current Players</h3></caption>
<tr><th>Player ID</th>
    <th>First Name</th>
	<th>Last Name</th>
	<th>Phone</th>
</tr>
<?php foreach($players as $player): ?>
<tr>
<td><?php echo $player['playerid']; ?></td>
<td><?php echo $player['pla_fname'];?></td>
<td><?php echo $player['pla_lname']; ?></td>
<td><?php echo $player['pla_phone']; ?></td>

<td><form action='.' method="post">
<input type="hidden" name='action' value='delete_player' />
<input type="hidden" name="playerid" value="<?php echo $player['playerid']; ?>" />
<input type="submit" value="Delete Player" />
</form></td>
<td><form action='.' method="post">
<input type="hidden" name='action' value='edit_player_form' />
<input type="hidden" name="playerid" value="<?php echo $player['playerid']; ?>" />
<input type="submit" value="Edit Info." />
</form></td>
</tr>

<?php endforeach; ?>
</table>
<!-- link to index page then include new_player_list.php -->
<p><a href=".?action=view_applicants">Click to View New Players</a></p>

<?php include '../view/footer_mvc.php'; ?>
