<?php
session_start();
echo "Hello"." ".$_SESSION['user_name']." ";
?>
<a href="logout.php">logout</a> 