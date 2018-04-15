<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
		header("Location:index.php");
	}

	define('MyConst', TRUE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Information System</title>
	<link rel="stylesheet" media="screen" href="styles.css" >
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
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logout</a></button></td>
		</tr>
</table>
<form class="contact_form" action="record.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Enter Your Details Below</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">First Name:</label>
            <input type="text"  placeholder="Joe" required  name="first_name"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">last_name:</label>
            <input type="text"  placeholder="Dinagat" required name="last_name"/>
	    <span class="form_hint">Proper format "Dinagat"</span>
        </li>
        
	 <li>
            <label for="name">dob:</label>
            <input type="date"  placeholder="19" required name="dob" />
	    <span class="form_hint">Proper format "19"</span>
        </li>
	 <li>
            <label for="name">Grade:</label>
            <input type="int"  placeholder="90" required  name="grade"/>
	    <span class="form_hint">Proper format "90"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Submit Form</button>
        </li>
    </ul>

</form>
</body>
</html>
