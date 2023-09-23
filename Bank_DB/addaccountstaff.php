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
		
$accno=$_POST['accno'];
$bname=$_POST['bname'];
$balance=$_POST['balance'];
	
		 $sql = "INSERT INTO `account`(`acc_no`, `branch_name`, `balance`) VALUES ('$accno','$bname','$balance')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('New Account Created successfully');
				window.location.href='mapaccountstaff.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Account Creation failed');
				window.location.href='createaccountstaff.php';
				</script>";			
		}
	
}
?>