<?php
session_start();
?>

<?php
include 'databaseconn.php';


?>
<?php
$da=date("Y-m-d");

$query="SELECT id from product WHERE end_date<='$da'";
$result=mysqli_query($con2,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><h1>These are the products which are due for result:</h1><br><br>
</p>
<br>

<?php 
							$var=0;
							



							while ($row= mysqli_fetch_assoc($result)) : ?>
							
							<?php $id=$row['id'];?>
							


							<p><?php echo $id;?></p>
							
						<?php endwhile;?>

<form action="testing.php">
<input type="submit" name="submit" value="Process">	

</form>
</body>
</html>
