<html>
<head>
	<title>Login page</title>
	<style>
     @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

#customers {
  font-family: 'Lato','sans-serif';
  border-collapse: collapse;
  width: 50%;
  height: 35%;
  font-weight: bold;

}

#customers td, #customers th {
  /* border: 3px solid #ddd; */
  padding: 50px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  font-size:25px;
}

h1{
  color: #212121;

}


</style>
</head>
<body style="background-color:#8aafd4; background-size: 100%"> 

<h1 align="center" style="color:black"><u>BANKING DATABASE</u></h1>


<hr></hr>

<center>
	<h1 >Login for Staff</h1>
<table border=1 id="customers">
<form action='custlogin.php' method='post'>
<tr><td>Username</td><td><input type=text name=uname required></input></td>   </tr>
<tr><td>Password</td><td><input type=password name=passwd required></input></td>   </tr>
<tr><td></td><td><input type=submit></input></td>   </tr>


</form>
</table>

<p align="center" style="color:white"><a href='firstpage.php'>Click here go to home</a></p>
</center>
</body>
</html>