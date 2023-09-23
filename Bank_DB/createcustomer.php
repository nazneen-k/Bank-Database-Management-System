<html>
<head>
<title>
Create Account
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
<body style="background-color:red">
<H1>CREATE NEW ACCOUNT<HR SIZE="3"  COLOR="Black"></H1>
<h2>STEP 1: Enter Customer details<h2>
<form action='addcustomer.php' method=POST>
<table border=1>
<tr><td>Customer Name</td><td><input type=text name=cname required=yes></input></td></tr>
<tr><td>Customer Street</td><td><input type=text name=cstreet required=yes></input></td></tr>
<tr><td>Customer City</td><td><input type=text name=ccity required=yes></input></td></tr>
<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
<h4 align="right"><a href="bankinghome.php">CLICK HERE TO BACK</a></h4>

</center>
</html>