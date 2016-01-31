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

//firsttask








echo "<p>Enter User Name and Password</p>";
echo "<form action='probba3.php' method='post'>";
echo "<input type='text' name='user' placeholder='User Name'>";
echo "<p><input type='password' name='password' placeholder='password'></p>";
echo "<input type='submit' name='submit' value='register'>";
echo "</form>";


$passw=12345;
if (!empty($_POST['submit'])) {
	

 if ($_POST['password'] == $passw) {
 	
    $name=$_POST['user'];
    $pass=$_POST['password'];
	
 	
	echo "Hello"." ".$name;
} else{
	echo "Wrong password";
}
}	





?>
</body>
</html>