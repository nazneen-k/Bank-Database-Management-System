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
$oldbal=$_POST['balance'];
$amount=$_POST['amount'];
$op=$_POST['op'];


if(strcmp($op,"credit")==0)
{
	
	$newbal=$oldbal+$amount;
	$sql="UPDATE `account` SET `balance`=".$newbal." WHERE acc_no=".$accno;
	
}
if(strcmp($op,"debit")==0)
{
	$newbal=$oldbal-$amount;
	if($newbal<=250)
	{
				$newbal=$oldbal;
				echo "<script>
				alert('Transaction failed!!!Debit beyond Minimum Balance');
				window.location.href='creditdebitpage.php';
				</script>";
	}
	$sql="UPDATE `account` SET `balance`=".$newbal." WHERE acc_no=".$accno;
}

       	
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Transaction Completed!!!');
				window.location.href='bankinghome.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Transaction Failed!!!! Try again');
				window.location.href='creditdebitpage.php';
				</script>";			
		}
	
}
?>