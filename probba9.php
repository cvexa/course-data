<?php header('content-type:text/html; charset=utf-8');

//task02
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

//task04
function math($m,$n,$param1, $param2){
	echo $m;
	if ($param1 < $param2) {
	for ($k=$param1; $k <= $param2 ; $k++) { 
	echo $k." ";
	}
}elseif ($param1 > $param2) {
for ($i=$param1; $i >= $param2 ; $i--) { 
	echo $i." ";
    }
    } 


	echo $n;
}
$tag1='<p>';
$tag2='</p>';
$param1=42;
$param2=100;
$tagg='<b>';
$tagg2='</b>';


math($tag1,$tag2,$param1,$param2);
math('<h1>','</h1>',$param1,$param2);
math($tagg,$tagg2,$param1,$param2);
//task05
function new_fun($parameter,$new1,$new2){
	echo $new1;
	$sum=0;
	foreach ($parameter as $key => $value) {
if ($key % 2 == 0){
$sum+=$value;


}
}
echo $sum;
echo $new2;
}
$arr = range(1,10);
	
	
$new1='<p>';
$new2='</p>';
$arr2=range(20,50);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "сбора от елементите който индекси са четни е :";
new_fun($arr,$new1,$new2);

echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "сбора от елементите който индекси са четни е :";
new_fun($arr2,$new1,$new2);









?>
