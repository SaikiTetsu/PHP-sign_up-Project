<?php
   session_start();
   require_once('../admin_mgr/session_check.php');//validate user
?>
<?php include '../view/header_mvc.php'; ?>
<form action="." method="post">
<table id="form_table">
<caption><h2>Edit Player Information</h2></caption>

<input type="hidden" name="action" value="update_player_info" />
<?php foreach($player_info as $pinfo): ?>
	<tr><td class="toright"><label>Player Id:&nbsp;</label></td><td>&nbsp;&nbsp;<?php echo $pinfo['playerid']; ?><input type="hidden" name="playerid" value="<?php echo $pinfo['playerid']; ?>" /></td></tr>
	<tr><td class="toright"><label>Player Last Name:&nbsp;</label></td><td><input type="text" name="pla_lname" value="<?php echo $pinfo['pla_lname']; ?>" /></td></tr>
	<tr><td class="toright"><label>Player First Name:&nbsp;</label></td><td><input type="text" name="pla_fname" value="<?php echo $pinfo['pla_fname']; ?>" /></td></tr>
	<tr><td class="toright"><label>Player Phone:&nbsp;</label></td><td><input type="text" name="pla_phone" value="<?php echo $pinfo['pla_phone']; ?>" /></td></tr>
	<tr><td class="toright"><label>Parent Last Name:&nbsp;</label></td><td><input type="text" name="pla_par_lname" value="<?php echo $pinfo['pla_par_lname']; ?>" /></td></tr>
	<tr><td class="toright"><label>Parent First Name:&nbsp;</label></td><td><input type="text" name="pla_par_fname" value="<?php echo $pinfo['pla_par_fname']; ?>" /></td></tr>
	<tr><td class="toright"><label>Player Address:&nbsp;</label></td><td><input type="text" name="pla_add" value="<?php echo $pinfo['pla_add']; ?>" /></td></tr>
	<tr><td class="toright"><label>City:&nbsp;</label></td><td><input type="text" name="pla_city" value="<?php echo $pinfo['pla_city']; ?>" /></td></tr>
	<tr><td class="toright"><label>State:&nbsp;</label></td><td><input type="text" name="pla_state" value="<?php echo $pinfo['pla_state']; ?>" /></td></tr>
	<tr><td class="toright"><label>Zip Code:&nbsp;</label></td><td><input type="text" name="pla_zip" value="<?php echo $pinfo['pla_zip']; ?>" /></td></tr>
	<tr><td class="toright"><label>Player Birth Date:&nbsp;</label></td><td><input type="text" name="pla_bdate" value="<?php echo $pinfo['pla_bdate']; ?>" /></td></tr>
	<tr><td class="toright"><label>Team ID:&nbsp;</label></td><td><input type="text" name="teamid" value="<?php echo $pinfo['teamid']; ?>" /></td></tr>
<?php  endforeach; ?> 
<tr><td colspan="2" class="centerit"><input type="submit" value="Update Player Info" /></td></tr>
</table>
</form>
<?php include '../view/footer_mvc.php'; ?>