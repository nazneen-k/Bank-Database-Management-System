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
		
$loanno=$_POST['loanno'];
$bname=$_POST['bname'];
$loan=$_POST['loanamount'];
	
		 $sql = "INSERT INTO `loan`(`loan_no`, `branch_name`, `amount`) VALUES ('$loanno','$bname','$loan')";
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Loan Account Created successfully');
				window.location.href='maploanaccount.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Account Creation failed');
				window.location.href='createloan.php';
				</script>";			
		}
	
}
?>