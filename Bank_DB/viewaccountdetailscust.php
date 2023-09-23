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

if(strcmp($_POST['acctype'],"savings")==0 )
{
$sql = "SELECT * FROM account where acc_no=".$_POST['accno'];
$result=$conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $no=$row['acc_no'];
  $branch=$row['branch_name'];
  $amt=$row['balance'];
 
} else {
  echo "0 results";
  die();
}





}
if(strcmp($_POST['acctype'],"loan")==0)
{
$sql = "SELECT * FROM loan where loan_no=".$_POST['accno'];	

$result=$conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
    $no=$row['loan_no'];
  $branch=$row['branch_name'];
  $amt=$row['amount'];
} else {
  echo "0 results";
  die();
}




}


?>
<html>
<head>
<title>
Account Details
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
<body style="background-color:Gainsboro">
<h1>ACCOUNT DETAILS<HR SIZE="3"  COLOR="black"></h1>
<form action='creditdebitoperationcust.php' method=POST>
<table border=1>
<tr><td>Account No</td><td><input type=text name=accno value=<?php echo $no;?> readonly></input> </td>
<tr><td>Branch Name</td><td><input type=text name=branch value=<?php echo $branch;?> readonly></input> </td>           
<tr><td>Balance</td><td><input type=text name=balance value=<?php echo $amt;?> readonly></input> </td> 
<tr><td></input></td><td><a href='accountdetailscust.php'>Back</a></td></tr>

</table>
</form>
</body>
</center>
</html>

<?php
$conn->close();
?>
