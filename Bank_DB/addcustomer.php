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
		
$cname=$_POST['cname'];
$cstreet=$_POST['cstreet'];
$ccity=$_POST['ccity'];
	
		 $sql = "INSERT INTO `customer`(`cust_name`, `cust_street`, `cust_city`) VALUES ('$cname','$cstreet','$ccity')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Customer added successfully');
				window.location.href='createaccount.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Customer registration failed');
				window.location.href='createcustomer.php';
				</script>";			
		}
	
}
?>