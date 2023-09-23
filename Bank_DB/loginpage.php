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
  font-size:25px;
}


</style>
</head>
<body style="background-color:LightGray;background-size: 100%"> 

<h1 align="center" style="color:black"><u>BANKING DATABASE</u></h1>

<hr></hr>

<center>
	<h1 style="color:brown">Login for Admin/clerk</h1>
<table border=1 id="customers">
<form action='login.php' method='post'>
<tr><td>Username</td><td><input type=text name=uname required></input></td>   </tr>
<tr><td>Password</td><td><input type=password name=passwd required></input></td>   </tr>
<tr><td></td><td><input type=submit></input></td>   </tr>


</form>
</table>
<p align="center" style="color:blue"><a href='firstpage.php'>Click here</a>BACK TO HOME</p>
</center>
</body>
</html>