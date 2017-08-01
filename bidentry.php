<?php
session_start();

?>
<?php

include 'databaseconn.php';


if (isset($_POST['submit'])) {
	$bid=mysqli_real_escape_string($con2, $_POST['bid']);

	
}

$username=$_SESSION['username'];
$userid=$_SESSION['userid'];
$id=$_SESSION['id'];


?>
<?php



$query="SELECT * from purchase WHERE id='$id' AND custid='$userid'";
$sql= "UPDATE purchase SET amt='$bid' WHERE id='$id' AND custid='$userid'";
$query2="INSERT INTO purchase (id,custid,amt)
	VALUES ('$id','$userid','$bid')";

$result=mysqli_query($con2,$query);

?>
							<?php 
							$var=0;
							
							while ($row=mysqli_fetch_assoc($result)) : ?>
							<?php 
							echo $row['id'];
							echo $row['custid'];
							echo $row['amt'];
							$var=$var+1;
							echo $var;

							?>
							<?php endwhile; ?>

							<?php
							if ($var>0) {
								
								if(mysqli_query($con2, $sql)){
    							echo "Records were updated successfully.";
								}
							
							}

							else
							{
								if (mysqli_query($con2,$query2))
								{
									header('location: product_details.php');
								}
							}

							?>




