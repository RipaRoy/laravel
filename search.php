<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("oopblog", $conn) or die(mysql_error());

$key = $_POST['first_name'];
$find = mysql_query("SELECT * FROM data WHERE first_name LIKE'%$key%'");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Information System</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Are you sure you want to delete")) {
   				 document.location = delUrl;
 			 }
		}
	</script>
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
<form class="contact_form" action="search.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Search Results</h2>
             <span class="required_notification">Following search matches our database</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>first_name</th>";
				  echo "<th>last_name</th>";
				  echo "<th>email</th>";
				  echo "<th>age</th>";
				  echo "<th>grade</th>";
				  echo "<th>Action</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['first_name']."</td>";
				  echo "<td>".$row['last_name']."</td>";
				  echo "<td>".$row['email']."</td>";
				  echo "<td>".$row['age']."</td>";
				  echo "<td>".$row['grade']."</td>";
			?>
				  <td>
					<a href="edit.php?id=<?php echo $row['id'];?>" class='action'>Edit</a> | 
					<a href="delete.php?id=<?php echo $row['id'];?>" class='action' onclick="return confirm('Are you sure you want to delete?')">Delete</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>
    </ul>

</form>
</body>
</html>
