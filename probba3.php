<!html>
<head>
	<title>Probba3 php</title>
	<style type="text/css">
	body{
		background-color:;
	}
	</style>
</head>
<body>


<?php

header('content-type:text/html; charset=utf-8');


$user_data = array('first_name'=> "Veni" ,
	               'second_name'=> "Ivanov",
	               'third_name'=> "Georgiev",
	               'age'       => "20",
	               'profession'=>'director');

echo "<ul>";
echo "<li>First name - ".$user_data['first_name']."</li>"; 
echo "<li>Second name - ".$user_data['second_name']."</li>";
echo "</ul>";

?>
</body>
</html>