<?php header('content-type:text/html; charset=utf-8');

function print_text(){
	for ($i=0; $i <10 ; $i++) { 
	echo "hello ! ";
}
}


echo "<table border='1'><tr>";
for ($i=0; $i <10 ; $i++) { 
	echo "<td>HELLO ! </td>";
}
echo "</table>";
echo "<p>";
print_text();
echo "</p>";
echo "<h1>";
print_text();
echo "</h1>";



?>
