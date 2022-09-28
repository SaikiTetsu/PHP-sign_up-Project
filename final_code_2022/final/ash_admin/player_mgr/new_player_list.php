<?php
 session_start(); //start new session or open current
 require_once('../admin_mgr/session_check.php');//validate user
?>

<?php include '../view/header_mvc.php'; ?>
<table id="widetable">
<caption><h3>Applicants</h3></caption>
<tr>
    <th>LName</th>
	<th>FName</th>
	<th>Phone</th>
	<th>ParLName</th>
	<th>ParFName</th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
	<th>Zip</th>
	<th>Birthdate</th>
	<th>Applied</th>
</tr>
<?php foreach($players as $player): ?>
<tr>
  
	<td><?php echo $player['pla_lname']; ?></td>
	<td><?php echo $player['pla_fname']; ?></td>
	<td><?php echo $player['pla_phone']; ?></td>
	<td><?php echo $player['pla_par_lname']; ?></td>
	<td><?php echo $player['pla_par_fname']; ?></td>
	<td><?php echo $player['pla_add']; ?></td>
	<td><?php echo $player['pla_city']; ?></td>
	<td><?php echo $player['pla_state']; ?></td>
	<td><?php echo $player['pla_zip']; ?></td>
	<td><?php echo $player['pla_bdate']; ?></td>
	<td><?php echo $player['date_added']; ?></td>
<form action='.' method="post">
	<input type="hidden" name='action' value='convert_player' />
	<input type="hidden" name='pla_phone' value="<?php echo $player['pla_phone']; ?>" />
	<input type="hidden" name='pla_fname' value="<?php echo $player['pla_fname']; ?>" />
	<input type="hidden" name='pla_lname' value="<?php echo $player['pla_lname']; ?>" />
	<td><input type="submit" value="Add" /></td>
  </form>
 <form action='.' method="post"> 
	<input type="hidden" name='action' value='delete_tmp_player' />
	<input type="hidden" name='pla_phone' value="<?php echo $player['pla_phone']; ?>" />
	<input type="hidden" name='pla_fname' value="<?php echo $player['pla_fname']; ?>" />
	<input type="hidden" name='pla_lname' value="<?php echo $player['pla_lname']; ?>" />
  <td><input type="submit" value="Drop" /></td>
 </form>
</tr>
<?php endforeach; ?>
</table>

<?php include '../view/footer_mvc.php'; ?>