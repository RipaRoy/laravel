<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
//deny this file if not admin
	if(!$_SESSION['valid']=='admin'){
	}
	else{
		if(!defined('MyConst')){header('Location:home.php');}
	}
//end of the script

$conn = mysql_connect("localhost","root","root") or die(mysql_error());
mysql_select_db("oopblog", $conn) or die(mysql_error());

if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];;
 }

$rec = "delete from user where id='$id'";

if(mysql_query($rec)){
	echo "<center></h1>User Deleted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 3 seconds..</h6></center>"."<br />";
	header('Refresh: 3; url=users.php');
}
else{
	die("User failed to delete in the database");
}
?>
