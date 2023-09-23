<html>
<?php
session_start();
?>
<center>
<head>
<title>
Banking Home
</title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  height: 35%;
}

#customers td, #customers th {
  border: 3px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers td {
  padding-top: 15px;
  padding-bottom: 15px;
  text-align: center;
  font-size:30px;
}


</style>
</head>
<body style="background-color:LightYellow;background-size: 100%">
<h1 style="color:black">WELCOME TO BANKING HOME PAGE<HR SIZE="4"  COLOR="black"></h1>

<body>
<?php
if($_SESSION["userid"]) {
?>
<h1 style="color:brown">Welcome <?php echo $_SESSION["userid"]; ?></h1>
<?php
}else echo "<h1>Please login first .</h1>";
?>
<table border=2 id="customers">

<tr><th style="color:blue">Banking Operations</th><tr>
<tr><td><a href='createcustomer.php'>Create Account</a></td></tr>
<tr><td><a href='viewallcustomers.php'>View Customer Details</a></td></tr>
<tr><td><a href='creditdebitpage.php'>Credit/Debit Account</a></td></tr>
<tr><td><a href='accountdetails.php'>View Account Details</a></td></tr>
<tr><td><a href='createloan.php'>Sanction Loan</a></td></tr>
<tr><td><a href='viewallbranch.php'>View Branch Details</a></td></tr>
<tr><td><a href='createbranch.php'>Add Branch</a></td></tr>
<tr><td><a href='reports.php'>Generate Reports</a></td></tr>
<tr><td><a href='reports.php'>feed back</a></td></tr>
</table>



</body>
<BR>
<p align="center" style="color:blue"><a href='register.php'>Click here</a> for new staff registration</p>
<B><a href="logout.php">CLICK HERE TO LOGOUT</a></B>
</center>
</html>