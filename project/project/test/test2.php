<?php
header('content-type:text/html; charset=utf-8');








$arr1 = array("2*1=2","3*1=3","4*1=4","5*1=5","6*1=6","7*1=7","8*1=8","9*1=9","10*1=10");
$arr2 = array("2*2=4","3*2=6","4*2=8","5*2=10","6*2=12","7*2=14","8*2=16","9*2=18","10*2=20");
$arr3 = array("3*3=6","4*3=8","5*3=10","6*3=12","7*3=14","8*3=16","9*3=18","10*3=18",);
$arr4 = array("4*4=6","5*4=8","6*4=10","7*4=12","8*4=14","9*4=16","10*4=18");
$arr5 = array("5*5=6","6*5=8","7*5=10","8*5=12","9*5=14","10*5=16");

echo "<table border='1'>";
echo "<tr><td>1 * 1 = 1</td><td colspan='9'></td></tr>";

/*for ($i=0; $i < 1; $i++) { 
	echo "<tr>";
echo "<td>".$arr1[$i]."</td><td>".$arr2[$i]."</td><td colspan='8'></td></tr>";
}
for ($k=1; $k < 2; $k++) { 
	echo "<tr>";
echo "<td>".$arr1[$k]."</td><td>".$arr2[$k]."</td><td>".$arr3[0]."</td><td colspan='7'></td></tr>";
}
for ($m=2; $m < 3; $m++) { 
	echo "<tr>";
echo "<td>".$arr1[$m]."</td><td>".$arr2[$m]."</td><td>".$arr3[1]."</td><td>".$arr4[0]."</td><td colspan='6'></td></tr>";
}
for ($n=3; $n < 4; $n++) { 
	echo "<tr>";
echo "<td>".$arr1[$n]."</td><td>".$arr2[$n]."</td><td>".$arr3[2]."</td><td>".$arr4[1]."</td><td>".$arr5[0]."</td><td colspan='5'></td></tr>";
}
*/
for ($a=2; $a < 11; $a++) { 
	echo "<tr>";
	for ($b=1; $b < 2; $b++) { 
		echo "<td>$a * $b = ".$a*$b."</td>";
	}
	for ($c=2; $c < 3; $c++) { 
		echo "<td>$a * $c = ".$a*$c."</td>";
	}

	for ($e=3; $e < 4; $e++) { 
		echo "<td>$e * $a = ".$a*$e."</td>";
	}
	echo "</tr>";
}


	


echo "</table>";

?>