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

header('content-type:text/html; charset=utf-8');

echo "<form action='probba3.php' method='get'>";
echo "<input type='text' name='username' placeholder='username'>";
echo "<p><input type='password' name='password' placeholder='password'></p>";
echo "<input type='submit' name='submit' value='register'>";
echo "</form>";

?>
</body>
</html>