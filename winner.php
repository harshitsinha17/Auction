<?php
session_start();
?>

<?php
include 'databaseconn.php';


?>
<?php
$query="SELECT DISTINCT id from purchase";
$result=mysqli_query($con2,$query);


?>
<?php 
							$var=0;
							
							while ($row=mysqli_fetch_assoc($result)) : ?>
							<?php 
							$id=$row['id'];

							echo $row['id'];


						$rowSQL ="SELECT MAX( amt ) AS max FROM purchase WHERE id='$id'";
						$row = mysqli_query($con2,$rowSQL );
						$res= mysqli_fetch_assoc($row);
						$largestNumber = $res['max'];
							
							echo" ";
							echo $largestNumber;
							echo " ";

						$rowSQL2="SELECT custid from purchase WHERE amt='$largestNumber'";
						$row2 = mysqli_query($con2,$rowSQL2 );
						$res2= mysqli_fetch_assoc($row2);
						$win=$res2['custid'];
						echo $win;
						echo " ";

						$rowSQL3="SELECT email from customer WHERE custid='$win'";
						$row3 = mysqli_query($con2,$rowSQL3 );
						$res3= mysqli_fetch_assoc($row3);
						$email=$res3['email'];
						echo $email;
						echo " ";

							?>
							<?php endwhile; ?>