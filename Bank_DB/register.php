<html>
<head>
	<title>Login page</title>
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
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;

  font-size:30px;
}


</style>
</head>
<body style="background:orange;background-size: 100%"> 
<h1 align="right" style="color:black"><u>BANKING DATABASE</u></h1>
<hr></hr>
<center>
<table border=1 id="customers">
<h1>Registration Page For STAFF </h1>
<form action='insertregistration.php' method='post'>
<tr><td>Username</td><td><input type=text name=uname required></input></td>   </tr>
<tr><td>Password</td><td><input type=password name=passwd required></input></td>   </tr>
<td>Email</td><td><input type=email name=email required></input></td>   </tr>
<tr><td></td><td><input type=submit></input></td>   </tr>


</form>
</table>
</body>
<a href="bankinghome.php">click here to home</a>
</html>