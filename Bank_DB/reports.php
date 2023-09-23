<html>
<?php
session_start();
?>
<center>
<head>
<title>
Generate Reports
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
<h1>Report Generation<HR SIZE="3"  COLOR="black"></h1>
<br>
<body style="background-color:Beige">
<form action='generatereport.php' method=POST>
<table border=1>


<tr><td>Select From Date</td><td><input type=date name=fromdate required></input></td></tr>
<tr><td>Select From Date</td><td><input type=date name=todate required></input></td></tr>
<tr><td><input type=reset value=Reset></input></td><td><input type=submit value=Generate></input></td></tr>
</table>

</form>

</body>
<h3 align="right"><a href="bankinghome.php">CLICK HERE TO BACK</h3>
</center>
</html>