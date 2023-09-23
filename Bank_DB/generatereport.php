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

$sql = "SELECT * FROM logs where trdate between '". strtok($_POST['fromdate'], " "). "' and '".$_POST['todate']."'";

$result=$conn->query($sql);

?>
<html>
<head>
<title>
Reports
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
<body>
<h1>TRANSACTION REPORTS<HR SIZE="3"  COLOR="black"></h1>
<table border=1>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  echo "<tr><td>Transaction_id</td><td>Account_No</td><td>Operation Type</td><td>Old Balance</td><td>New Balance</td><td>Date</td><td>Time</td></tr>";
   
  while($row = $result->fetch_assoc()) {
	  if($row['oldbalance']>$row['newbalance'])
	  {
		  $operation="Debit";
	  }
	  else 
	  {
		  $operation="Credit";
	  }
	   
     echo "<tr><td>".$row['id']."</td><td>".$row['accno']."</td><td>".$operation."</td><td>".$row['oldbalance']."</td><td>".$row['newbalance']."</td><td>".$row['trdate']."</td><td>".$row['trtime']."</td></tr>";
  }
} else {
  echo "0 results";
}
?>
</table>
<a href='bankinghome.php'>Click here to go to Home page</a>
</body>
</center>
</html>

<?php
$conn->close();
?>
