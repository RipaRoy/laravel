<?php
session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Information System</title>
	<link rel="stylesheet" media="screen" href="add.css" >
</head>
<body>
<table align="center">
		<tr>
			<td><button class="submit" type="submit"><a href="home.php">Home</a></button></td>
			<td><button class="submit" type="submit"><a href="find.php">Search</a></button></td>
			<td><button class="submit" type="submit"><a href="view.php">View Data</a></button></td>
			<?php
				if($_SESSION['valid']=='admin'){
			
				echo "<td><button class='submit' type='submit'><a href='add.php'>Add User</a></button></td>";
				echo "<td><button class='submit' type='submit'><a href='users.php'>View User</a></button></td>";
				}
				else{
					if(!defined('MyConst')){header('Location:home.php');}
				}
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logout</a></button></td>
		</tr>
</table>
<form class="contact_form" action="adduser.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter User Details</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">User Name:</label>
            <input type="text"  placeholder="Joe" required  name="name"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">Password:</label>
            <input type="password"  placeholder="Dinagat" required name="pass"/>
	    <span class="form_hint">Proper format "xxxxxxx"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Register</button>
        </li>
    </ul>

</form>
</body>
</html>
