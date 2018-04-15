<?php 
	session_start();

	if(isset($_SESSION['valid'])){
		header("Location:home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Information System</title>
	<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<form class="contact_form" action="verify.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>PLease Login</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">User Name:</label>
            <input type="text"  placeholder="Joe" required  name="username"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">Password:</label>
            <input type="password"  placeholder="Dinagat" required name="password"/>
	    <span class="form_hint">Proper format "xxxxxxx"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Login</button>
        </li>
    </ul>

</form>
</body>
</html>
