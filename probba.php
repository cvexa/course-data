<!html>
<head>
	<title>Probba php</title>
	<style type="text/css">
	#a{
		color: red;
	}
	#b{
		color: blue;
	}
	#c{
		color: green;
	}
	body{
		background-color: grey;
	}
	#value{
		font-size: 22px;
	}
	#value2{
		font-size: 27px;
		color:red;
	}
	</style>
</head>
<body>


<?php

header('content-type:text/html; charset=utf-8');
$first = "Hello";
$second="1st";
$third="World";

echo "<p id='a'>".$first."</p><p id='b'>".$second."</p><p id='c'>".$third."</p>";
echo "i'v gone to the store."." ";
echo '"text"';

//first value
$role="student";
$course="course 1";
$duration=4;
$user="Mamba";
$txt="Hi $user you are .... as a $role in $course for $duration";
echo "<p id='value'>".$txt."</p>";
<<<<<<< HEAD
asdasd
=======

//second value
$role="lector";
$course="course 2";
$duration=5;
$user="Samba";
$txt="Hi $user you are .... as a $role in $course for $duration";
echo "<p id='value2'>".$txt."</p>";

>>>>>>> origin/master


?>
</body>
</html>