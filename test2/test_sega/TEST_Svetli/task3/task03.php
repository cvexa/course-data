<?php

$num=1;



echo "<table border='1'>";
for ($i=1; $i < 5; $i++) { 
	$num=$i;
	// if ($i == 2) {
	// 	echo "<tr>";
	// 	for ($q=0; $q < 5; $q++) { 
			
	// 		echo "<td>". $num."</td>";
	// 		$num+=14;
	// 	}
	// 	echo "</tr>";	
	// }

	echo "<tr>";
  
  
	for ($k=0; $k < 5; $k++) { 
		
		echo "<td>".$num.

		"</td>";
		$num=$num+=4;

	}
	
  
	echo "</tr>";
 
}
echo "</table>";

?>