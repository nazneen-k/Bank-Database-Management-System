<?php
session_start();
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
	
$result = mysqli_query($conn,"SELECT * FROM users_info WHERE username='" . $_POST["uname"] . "' and password = '". $_POST["passwd"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	
$_SESSION["userid"] = $row['username'];

				echo "<script>
				alert('Lgoin successfull');
				window.location.href='bankinghomecust.php';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='custlogincust.php';
				</script>";	

}
}	

?>