<?php
session_start();

?>
<?php

include 'databaseconn.php';

$bid=1200;
if (isset($_POST['submit'])) {
	$bid=mysqli_real_escape_string($con2, 1000);

	
}

$username="harshit";
$userid=1;
$id=101;



 

	$query2="INSERT INTO purchase (id,custid,amt)
	VALUES ('$id','$userid','$bid')";

	if (!mysqli_query($con2,$query2)) {
		//die("ERROR".mysqli_error($con2));
		echo "Username already exists";
	}
?>



<?php


?>