<?php
session_start();


?>
<?php

include 'databaseconn.php';
?>


<?php
$user=$_POST['email'];
$pass=$_POST['pass'];

$query="SELECT * FROM admin";
$result=mysqli_query($con2,$query);


?>

							<?php 
							$var=0;
							while ($row=mysqli_fetch_assoc($result)) : ?>
							<?php 
									
									

									$one=$row['email'];
									$two=$row['password'];
									if ($one==$user&&$two==$pass) {
										
										$_SESSION["username"]=$row['name'];
										$_SESSION['userid']=$row['adid'];
										
										header('location: adminpersonal.php' );
										$var=1;
										break;
									}

									

							?>							

							<?php endwhile; ?>
							<?php
							
								if ($var==0) {
									echo "Not found";
								}

							?>