<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
	//start and distorying session
	session_start();
	session_destroy();
	//location is on index.php after logout
	header("Location:index.php");
?>
