<?php
// Include the database connection file
require_once("db.php");

// Fetch data in descending order (lastest entry first)
$result = ("SELECT * FROM users ORDER BY id DESC");
$r= mysqli_query($mysqli,$result);
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Name</strong></td>
			<td><strong>Age</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		 {
			
			echo "<td>".$rest['name']."</td>";
			echo "<td>".$rest['age']."</td>";
			echo "<td>".$rest['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$rest[id]\">Edit</a> | 
			<a href=\"delete.php?id=$rest[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}?>
	</table>
</body>
</html>
