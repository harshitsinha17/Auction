<?php
session_start();

?>
<?php
include 'databaseconn.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="logincheck.php">
Name: <input type="text" name="email" placeholder="user email" />
<br>
Password :<input type="text" name="pass"/>
<br>
<input type="submit" name="submit"/>
</form>
<hr>

<form method="post" action="admincheck.php">
Name: <input type="text" name="email" placeholder="admin email" />

<br>
Password :<input type="text" name="pass"/>
<br>
<input type="submit" name="submit"/>
</form>


</html>

<!--<script type="text/javascript"
src="http://www.snaphost.com/jquery/Calendar.aspx"></script> 
-->


<!--<blockquote class="imgur-embed-pub" lang="en" data-id="yWzdfYb"><a href="//imgur.com/yWzdfYb">View post on imgur.com</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script> -->