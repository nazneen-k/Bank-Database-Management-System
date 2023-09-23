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
  border: 3px solid black;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: white;}

#customers tr:hover {background-color: #f2f2f2;}

#customers td {
  padding-top: 15px;
  padding-bottom: 15px;
  text-align: center;
  font-size:30px;
}


</style>
</head>
<body style="background-color:lightgray;background-size: 100%">
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
<tr><td><a href='createcustomerstaff.php'>Create Account</a></td></tr>  
<tr><td><a href='creditdebitpagecust.php'>Credit/Debit Account</a></td></tr>
<tr><td><a href='accountdetailscust.php'>View Account Details</a></td></tr>
</table>



</body>
<p style="color:blue"><br><br>Click here to <a href="customerlogin.php" tite="Logout">Logout</a></p>
</center>
</html>