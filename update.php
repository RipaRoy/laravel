<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("oopblog", $conn) or die(mysql_error());

$id=$_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$rec = "update data set first_name = '$first_name',last_name = '$last_name',email='$email',age='$age',grade='$grade' where id='$id'";

if(mysql_query($rec)){
	echo "<center></h1>Data updated in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 3 seconds..</h6></center>"."<br />";
	header('Refresh: 3; url=view.php');
}
else{
	die("Data failed to update in the database");
}
?>
