<?php header('content-type:text/html; charset=utf-8');

function print_text($param1, $param2,$text){
	echo $param1;
	for ($i=0; $i <10 ; $i++) { 
	echo $text;
	
}
echo $param2;
}





print_text('<p>','</p>','HELLO!');
$a='<h1>';
$b='</h1>';
$c='Bye';
$d="<table border='1'><tr>";
$e="</table>";
$f="<td>Hi </td>";
print_text($a,$b,$c);
print_text($d,$e,$f)




?>
