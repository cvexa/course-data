<!html>
<head>
	<title>Probba3 php</title>
	<style type="text/css">
	#code{
		text-align: center;
	}
	</style>
</head>
<body>


<?php

//firsttask

header('content-type:text/html; charset=utf-8');


$user_data = array('first_name'=> "Veni" ,
	               'second_name'=> "Ivanov",
	               'third_name'=> "Georgiev",
	               'age'       => "20",
	               'profession'=>"director");

echo "<ul>";
echo "<li>First name - ".$user_data['first_name']."</li>"; 
echo "<li>Second name - ".$user_data['second_name']."</li>";
echo "</ul>";

//secondtask

$city_data = array('Vratsa' => "3000" ,
                   'Sofia' => "5000" ,
                   'Burgas' => "1000");

echo "<p><ul>";
echo "<li>City Vratsa - ".$city_data['Vratsa']."</li>";
echo "<li>City Sofia - ".$city_data['Sofia']."</li>";
echo "<li>City Burgas - ".$city_data['Burgas']."</li>";
echo "</p></ul>";

echo "<p><table border='1'>";
echo "<tr>";
echo "<td id='code' colspan='2'>City Code</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Sofia</td>";
echo "<td>".$city_data['Sofia']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Vratsa</td>";
echo "<td>".$city_data['Vratsa']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Burgas</td>";
echo "<td>".$city_data['Burgas']."</td>";
echo "</tr>";
echo "</p></table>"

?>
</body>
</html>