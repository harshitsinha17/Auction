<?php
session_start();

?>


<?php 
include 'databaseconn.php'; 
?>


<?php

$username=$_SESSION['username'];
$userid=$_SESSION['userid'];

?>



<?php

$user=$_POST['main'];

$query="SELECT * FROM product";
$result=mysqli_query($con2,$query);

?>
							<?php 
							$var=0;
							
							while ($row=mysqli_fetch_assoc($result)) : ?>
							<?php 
									
									


									$var=$var+1;

									$id=$row['id'];
									$name=$row['name'];
									$own=$row['owner'];
									$url=$row['url'];
									$mina=$row['minamt'];
									$end=$row['end_date'];
									$deta=$row['detail'];
									$cate=$row['category'];

									if ($user==$id) {
										$_SESSION['id']=$id;
										$_SESSION['name']=$name;
										$_SESSION['owner']=$own;
										$_SESSION['url']=$url;
										$_SESSION['minamt']=$mina;
										$_SESSION['end_date']=$end;
										$_SESSION['detail']=$deta;
										$_SESSION['category']=$cate;

										header('location: product_details.php');
										$var=1;
										break;
									}
							?>
											
									<?php endwhile; ?>


									<?php
									if ($var==0) 
									{
										echo "Hello";
									}
									?>