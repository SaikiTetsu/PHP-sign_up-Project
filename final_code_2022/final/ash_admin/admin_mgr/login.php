<?php session_start();
if($_SESSION['is_valid_admin']==true){
	header("Location: admin_menu.php");
}
?>
<?php include '../view/header_mvc.php';?>
 <div id="content">
 <h2>Admin Area Login</h2>
  <table id="log">
	<form method="post" action="../admin_mgr/">
	   <input type="hidden" name="action" id="action" value="login" />
		<tr><td><label>Username</label></td><td><input type="text" name="username" id="username" /></td></tr>
		<tr><td><label>Password</label></td><td><input type="password" name="password" id="password" /></td></tr>
		<tr><td colspan="2"><input type="submit" value="Log In to Admin Area" /></tr>
	</form>
   </table>
 </div><!-- end content -->
 <p><?php echo $login_message ?></p>
<?php include '../view/footer_mvc.php'; ?> 
