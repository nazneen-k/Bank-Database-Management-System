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
		
$cname=$_POST['customername'];
$accno=$_POST['accountno'];

		 $sql = "INSERT INTO `depositor`(`cust_name`, `acc_no`) VALUES ('$cname','$accno')";
        	
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Account Creation Complete');
				window.location.href='bankinghome.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Account Creation Failed!!!! Try again');
				window.location.href='mapaccount.php';
				</script>";			
		}
	
}
?>