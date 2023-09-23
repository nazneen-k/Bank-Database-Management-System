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
$sql2 = "SELECT loan_no FROM loan";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
?>
<html>
<head>
<title>
Create Loan Account
</title>
<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
            width: 50%;
           height: 35%;
		}

		h1 {
			text-align: center;
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
<center>
<body STYLE="background-color:Ivory">
<h1>CREATE NEW LOAN ACCOUNT<HR SIZE="3"  COLOR="black"></h1>
<h2>STEP 2: Map Loan Account to customer</h2>
<form action='addborrower.php' method=POST>
<table border=1>
<tr><td>Loan Number</td>
<td>  <select name=loanno id=loanno>               

<?php
if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
     echo "<option value=". $row["loan_no"].">".$row["loan_no"]."</option><br>";
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

<tr><td><input type="reset"></input></td><td><input type=submit value=Map></input></td></tr>

</table>
</form>
</body>
<h3 align="right"><a href="createloan.php">CLICK HERE TO BACK</A></H3>
</center>
</html>

<?php
$conn->close();
?>
