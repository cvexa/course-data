<?php
session_start();
?>
<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba3 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>
<body>
<?php
if (!empty($_POST['submit'])) {
	$_SESSION['user_name'] = $_POST['user_name'];
	echo "Hello"." ".$_SESSION['user_name']." ";
	echo '<a href="log1.php">GO</a>';
}else{
?>	

	
	<form action="login.php" method="post">
		Username
	<input type="text" name="user_name" placeholder="User name">
        Password
    <input type="password" name="password" placeholder="Password"> 
    <input type="submit" name="submit" value="register">
    </form> 
   
<?php
}
?>      



</body>
</html>