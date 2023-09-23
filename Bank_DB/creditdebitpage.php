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
<body style="background-color:LightSeaGreen">
<h1>CREDIT/DEBIT ACCOUNT<HR SIZE="3"  COLOR="black"></h1>
<form action='creditdebit.php' method=POST>
<table border=1>
<tr><td>Account Number</td><td><input type=text name=accno required=yes></input></td></tr>
<tr><td>Select Operation</td><td><input type=radio name=operation value=credit required=yes> Credit</input><br><input type=radio name=operation value=debit required=yes> Debit</input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
<h3 align="right"><a href="bankinghome.php">CLICK HERE TO BACK</a></h3>
</center>
</html>