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




if (!empty($_POST['submit'])) {
	$firstname=$_POST['first_name'];
    $favcity=$_POST['city'];
	
echo "Hello".$firstname."your favorite city is -".$favcity;
} else{



echo "<p>Enter Name and Favorite City</p>";
echo "<form action='probba3.php' method='post'>";
echo "<input type='text' name='first_name' placeholder='First Name'>";
echo "<p><input type='text' name='city' placeholder='City'></p>";
echo "<input type='submit' name='submit' value='Send'>";
echo "</form>";
}




?>
</body>
</html>