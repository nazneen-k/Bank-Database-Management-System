<html>
<head>
<title>
Create Loan Account
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
			color: brown;
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
<body style="background-color:SlateGray">
<h1>CREATE NEW LOAN ACCOUNT<HR SIZE="3"  COLOR="black"><h1>
<h2>STEP 1: Enter Loan Account details</h2>
<form action='addloan.php' method=POST>
<table border=1>
<tr><td>Loan Number</td><td><input type=text name=loanno required=yes></input></td></tr>
<tr><td>Branch Name</td><td><input type=text name=bname required=yes></input></td></tr>
<tr><td>Loan Amount</td><td><input type=text name=loanamount required=yes></input></td></tr>
<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>


</table>
</form>
</body>
<h3 align="right"><a href="bankinghome.php">CLICK HERE TO BACK</A></H1>
</center>
</html>