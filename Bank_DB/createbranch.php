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
<body style="background-color:Snow">
<h1>CREATE NEW BRANCH<HR SIZE="3"  COLOR="Black"></h1>
<form action='addbranch.php' method=POST>
<table border=1>
<tr><td>Branch Name</td><td><input type=text name=bname required=yes></input></td></tr>
<tr><td>Branch City</td><td><input type=text name=bcity required=yes></input></td></tr>
<tr><td>Assets</td><td><input type=text name=bassets required=yes></input></td></tr>
<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
</center>
</html>