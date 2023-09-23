<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'bankdb';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM branch ORDER BY branch_name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>all branch Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: right;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
		h2 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body style="background-color:Silver">
    <h1 align="right">BANKING DATABASE</h1>
    <hr></hr>
	<section>
		<h2>Branch Details</h2>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>BRANCH_NAME</th>
				<th>BRANCH_CITY</th>
				<th>ASSETS</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['branch_name'];?></td>
				<td><?php echo $rows['branch_city'];?></td>
				<td><?php echo $rows['assets'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
    <p align="center"><a href="bankinghome.php" >click here to</a> <b>Banking Home page</b></p>
</body>

</html>
