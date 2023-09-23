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
$emailid=$_POST['email'];
	
		 $sql = "INSERT INTO `users_info`(`username`, `password`, `email`) VALUES ('$username','$passwd','$emailid')";
        	
			
	     
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data Registered successfully');
				window.location.href='bankinghome.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Registration failed');
				window.location.href='bankinghome.php';
				</script>";			
		}
	
}
?>