<?php
// Задача 2. Дефинирайте функция, отпечатва знака на произведението на три числа без да изчислява
//Tip: Решете задачата само като проверявате числата/.  
// Ако произведението е 0 – отпечатва 0.

// Input  	5  2  2 		Output  	+
// Input  	-2 -2 1 		Output  	+
// Input  	-2, 4, 3 		Output 	 -
// Input 		0 -2.5 4 		Output 	0
// Input 		-1 -0.5 -5.1 		Output 	- 
// 5т.


if (empty($_GET['submit'])) {
	

echo "<form action='task02.php' method='get'>";
echo "<p><input type='number' name='num1'></p>";
echo "<p><input type='number' name='num2'></p>";
echo "<p><input type='number' name='num3'></p>";
echo "<input type='submit' name='submit' value='go'>";
echo "</form>";
}else{
    $one=$_GET['num1'];
    $two=$_GET['num2'];
    $three=$_GET['num3'];

$arr= array($one,$two,$three);
$counter=count($arr);
$plus=0;
$zero=0;
$minus=0;

for ($i=0; $i < $counter; $i++) { 
   	if ($arr[$i] > 0) {
   		$plus++;
   	}elseif($arr[$i] == 0){
        $plus=0;
   	}else{
   		$plus--;
   	}
   } 
   



if ($plus > 0) {
	echo "+";
}elseif ($plus = 0) {
	echo "0";
}else{
	echo "-";
}



}

?>