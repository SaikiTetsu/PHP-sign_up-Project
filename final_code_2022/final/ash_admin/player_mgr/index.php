<?php
 require('../model/database.php');//PDO obj database connection script
 require('../model/player_db.php');//functions used for player application
date_default_timezone_set('America/Denver');
 //code to intercept 'action' variable value as form data either post or get
 if(isset($_POST['action'])){
	$action=$_POST['action'];
 }else if(isset($_GET['action'])){
	$action=$_GET['action'];
 }else {
	$action='list_players';
 }

if ($action =='list_players'){
	$players=get_all_players();
	include('player_list.php');
}else if($action =='edit_player_form'){
	$id=$_POST['playerid'];
	//call the edit_player() function passing it the selected player id
	$player_info=get_player_info($id);
	//var_dump($player_info);
	include('player_edit.php');
}else if($action=='update_player_info'){
	//code to update player info in database
	$id=$_POST['playerid'];
	$result=update_player_info($id);
	header("Location: .?action=list_players");//redirect code
}else if ($action=='delete_player'){
	$id=$_POST['playerid'];
	$deleted=delete_player($id);
	header("Location: .?action=list_players");/* redirect code reloading index and passing new action variable */

}else if ($action=="new_player"){
  //assign form input to variables
  $fname=$_POST['pla_fname'];
  $lname=$_POST['pla_lname'];
  $bdate=$_POST['pla_bdate'];
  $add=$_POST['pla_add'];
  $city=$_POST['pla_city'];
  $state=$_POST['pla_state'];
  $zip=$_POST['pla_zip'];
  $phone=$_POST['pla_phone'];
  $pfname=$_POST['pla_par_fname'];
  $plname=$_POST['pla_par_lname'];
  //validate form input from visitor
  if(empty($fname) || empty($lname) || empty($bdate) || empty($add) || empty($city) || empty($state) || empty($zip) || empty($phone) || empty($pfname) || empty($plname)){
	$error="Invalid input. Press browser back button and check that all form fields are completed then resubmit.";
	include('../errors/error_mvc.php');
  }else{
    //add the new player to the new_player_tmp table
	$added=add_tmp_player();
	echo "<div style='margin:0 auto; width:350px; font-family:sans-serif; border:1px solid #000; text-align:center;'><p>The league player application has been processed for $fname $lname. A league representative will contact you shortly.</p> <p><a href='../../index.php'>Home page</p></div>";
}
/*gets a list of temporary players in the new_player_tmp table*/
}else if($action=='view_applicants'){
	$players=get_all_new_players();
	include('new_player_list.php');
}else if($action=='convert_player'){
	//adds a player in the add_tmp_player table to the player table
	$result=convert_player();
	delete_tmp_player();
	header("Location: .?action=view_applicants");


}else if($action=='delete_tmp_player'){
	$result=delete_tmp_player();
	header("Location: .?action=view_applicants");

}

?>
