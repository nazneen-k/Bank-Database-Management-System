<?php
$servername='localhost';
$username='root';
$password='';
$dbname='bankdb';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
	echo "connected to db";
		
$username=$_POST['uname'];
$passwd=$_POST['passwd'];
	
		 $sql = "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$passwd')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='loginpage.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='loginpage.php';
				</script>";			
		}
	
}
?>