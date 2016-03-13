<?php
header('content-type:text/html; charset=utf-8');


$students=array(array('Петър','Иванов','5','5','6'),
	            array('Симона','Георгиева','3','3','6'),
	            array('Стилян','Герасимов','5','4','5'),
	            array('Никол','Кирилова','6','5','6'),
	            array('Йордан','Йорданов','2','5','6'),
	            );

$a=5;
$b=6;
$Petyr=($students[0][2]+$students[0][3]+$students[0][4])/3;
$new0=number_format($Petyr,2);
$students[0][5]=$new0;
$Simona=($students[1][2]+$students[1][3]+$students[1][4])/3;
$new1=number_format($Simona,2);
$students[1][5]=$new1;
$Stilqn=($students[2][2]+$students[2][3]+$students[2][4])/3;
$new2=number_format($Stilqn,2);
$students[2][5]=$new2;
$Nikol=($students[3][2]+$students[3][3]+$students[3][4])/3;
$new3=number_format($Nikol,2);
$students[3][5]=$new3;
$Jordan=($students[4][2]+$students[4][3]+$students[4][4])/3;
$new4=number_format($Jordan,2);
$students[4][5]=$new4;
$group=($new0+$new1+$new2+$new3+$new4)/$a;

$new_group=number_format($group,2);

$max_score=array('');

$max_score[0]=$new0;
$max_score[1]=$new1;
$max_score[2]=$new2;
$max_score[3]=$new3;
$max_score[4]=$new4;
$count_max=count($max_score);
for ($q=0; $q < $count_max; $q++) { 
	if ($max_score[$q] > $max_score[0]) {
		$max_score[0]=$max_score[$q];
	}
}


echo "<table border='1' id='stu'>";
echo "<tr>
<td>Име</td>
<td>Фамилия</td>
<td>Оценка от писмен изпит</td>
<td>Оценка от устен изпит</td>
<td>Оценка от тест</td>
<td>Среден успех на ученика</td>
</tr>";

for ($i=0; $i < $a ; $i++) { 
	echo "<tr>";
	for ($k=0; $k < $b; $k++) { 
		

		echo "<td>".$students[$i][$k]."</td>";
	}
	echo "</tr>";
}
echo "<tr>";
echo "<td colspan='6' >Среден успех на групата ученици е :".$new_group."</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='6'>С най-висок среден успех е Никол с ".$max_score[0]."</td>";
echo "</tr>";




?>
<!html>
<head>
	<title>Probba3 php</title>
	<style type="text/css">
	#stu{
		text-align: center;
	}
	</style>
</head>
<body>
	</body>
	</html>