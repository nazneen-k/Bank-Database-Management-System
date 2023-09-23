<?php
$servername='localhost';
$username='root';
$password='';
$dbname='bankdb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT cust_name FROM customer";
$sql2 = "SELECT acc_no FROM account";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
?>
<html>
<head>
<title>
Create Account
</title>
<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
      height:35%;
      width:35%;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
    h2 {
			text-align: center;
			color: black;
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
<center>
<body style="background-color:LightGreen">
<h1>CREATE NEW ACCOUNT<HR SIZE="3"  COLOR="black"></h1>
<h2>STEP 3: Map Account to customer</h2>
<form action='adddepositorstaff.php' method=POST>
<table border=1>
<tr><td>Account Number</td>
<td>  <select name=accountno id=accno>               

<?php
if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
     echo "<option value=". $row["acc_no"].">".$row["acc_no"]."</option><br>";
  }
} else {
  echo "0 results";
}

?>
</select>
</td></tr>
<tr><td>Customer Name</td>




<td> <select name=customername id=cname>
<?php
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "<option value=". $row["cust_name"].">".$row["cust_name"]."</option><br>";
  }
} else {
  echo "0 results";
}
?>           
</select>


</td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Map></td></input><td><input type="click"></td></input></tr>

</table>
</form>
</body>
</center>
</html>

<?php
$conn->close();
?>
