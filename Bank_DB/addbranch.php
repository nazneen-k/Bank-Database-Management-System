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
		
$bname=$_POST['bname'];
$bcity=$_POST['bcity'];
$assets=$_POST['bassets'];
	
		 $sql = "INSERT INTO `branch`(`branch_name`, `branch_city`, `assets`) VALUES ('$bname','$bcity',$assets)";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Branch added successfully');
				window.location.href='bankinghome.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Failed to add branch!!Try again');
				window.location.href='createbranch.php';
				</script>";			
		}
	
}
?>