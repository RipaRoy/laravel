<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("oopblog", $conn) or die(mysql_error());

$username = $_POST['username'];
$password = $_POST['password'];

$rec = "insert into user values('','$username',md5('$password'))";

if(mysql_query($rec)){
	echo "<center></h1>User is Added in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 3 seconds..</h6></center>"."<br />";
	header('Refresh: 3; url=add.php');
}
else{
	die("User adding error");
}
?>
