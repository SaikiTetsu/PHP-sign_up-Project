<?php
/*functions for administrative area of project*/

/*
I need to create new usernames and passwords for the admin table using the prepared statements syntax as in the add_admin() function on page 689 in Murach - then i can create is_valid-admin_login() to make it work.
10/19/11 gardner -I DON'T THINK I NEED TO DO THIS AFTER ALL, EXECTUTING THE IS_VALID_ADMIN_LOGIN() METHOD BELOW ON THE OLD DATABASE SEEMS TO WORK OK - gardner 10/20/11
*/

function is_valid_admin_login($username,$password){
	/*this is using the prepared statement method - 
		it uses the prepare() method of the PDO object to create a PDOStatement object
		then you can use the various methods of the PDOStatement object to execute the statement,
		return a result set, and finally free the connection to the server. Murach (page 614)indicates
		that using prepared statements improve database performance and security(can prevent most SQL injection attacks)
	*/
	global $db;
	//query string using named parameters
	$query="select adminid from admin where ad_username= :username and ad_password= :password";
	$statement=$db->prepare($query);
	//the following two statements bind the variable to the "named parameters", :username and :password
	$statement->bindValue(':username',$username);
	$statement->bindValue(':password',$password);
	$statement->execute();
	/*check for valid username and password $valid will be true for good login 
	and false if no matches are found for username and password pair*/
	$valid=($statement->rowCount()==1);
	//the statement below frees the connection to the server
	$statement->closeCursor();
	return $valid;
}
?>