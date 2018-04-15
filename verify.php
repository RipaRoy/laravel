<?php
	session_start();

	$conn = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("oopblog", $conn) or die(mysql_error());

	$username=$_POST['username'];
	$password=$_POST['password'];
	$password = md5($password);
	
	$result = mysql_query("select * from user where username='$username' and password='$password'",$conn)
		or die("Could not execute the select query.");

	$row = mysql_fetch_assoc($result);
	
	if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
	else
		{
			echo "<center></h1>Access Denied</h1></center>"."<br />";
			echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
			header('Refresh: 3; url=index.php');
		}


	if(isset($_SESSION['valid']))
		{
			header("Location:home.php");
		}

	
?>
