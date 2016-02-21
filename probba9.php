<?php header('content-type:text/html; charset=utf-8');

function print_calc($a, $b){
	$num=$a+$b;
	
	echo $a. "+" .$b. "=" .$num." ";
	


}
$a=2;
$b=3;
$c=4;
$d=2;
$f=15;
$g=22;

print_calc($a,$b);
print_calc($c,$d);
print_calc($f,$g);









?>
