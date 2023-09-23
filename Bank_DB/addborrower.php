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
$loanno=$_POST['loanno'];

		 $sql = "INSERT INTO `borrower`(`cust_name`, `loan_no`) VALUES ('$cname','$loanno')";
        	
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Loan Account Creation Complete');
				window.location.href='bankinghome.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Account Creation Failed!!!! Try again');
				window.location.href='maploanaccount.php';
				</script>";			
		}
	
}
?>