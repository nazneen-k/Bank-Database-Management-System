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

$sql = "SELECT * FROM account where acc_no=".$_POST['accno'];
$result=$conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
} else {
  echo "0 results";
  die();
}

?>
<html>
<head>
<title>
Credit/Debit
</title>
<style>
table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
            width: 50%;
           height: 55%;
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
<body style="background-color:Cornsilk">
<h1>CREDIT/DEBIT FROM ACCOUNT<HR SIZE="3"  COLOR="black"></h1>
<form action='creditdebitoperationcust.php' method=POST>
<table border=1>
<tr><td>Account No</td><td><input type=text name=accno value=<?php echo $row['acc_no'];?> readonly></input> </td>
<tr><td>Branch Name</td><td><input type=text name=branch value=<?php echo $row['branch_name'];?> readonly></input> </td>           
<tr><td>Balance</td><td><input type=text name=balance value=<?php echo $row['balance'];?> readonly></input> </td> 
<tr><td>Operation</td><td><input type=text name=op value=<?php echo $_POST['operation'];?> readonly></input> </td> 
<tr><td>Enter Amount</td><td><input type=text name=amount></input> </td> 

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
<h3 align="right"><a href="creditdebitpagecust.php">CLICK HERE TO BACK</a></h3>
</center>
</html>

<?php
$conn->close();
?>
