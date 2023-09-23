
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
$sql = "SELECT * FROM customer ORDER BY cust_name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>all customer Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
			
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
        
		h2 {
			text-align: right;
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

<body style="background-color:LemonChiffon">
<h2><u>BANKING DATABASE</u></h2>
<hr></hr>
	<section>
		<h1>Customer Details</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>CUST_NAME</th>
				<th>CUST_STREET</th>
				<th>CUST_CITY</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['cust_name'];?></td>
				<td><?php echo $rows['cust_street'];?></td>
				<td><?php echo $rows['cust_city'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
    <p align="center"><a href="bankinghome.php" >click here to</a> <b>Banking Home page</b></p>
</body>

</html>
