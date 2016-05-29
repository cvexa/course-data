<?php
// Задача 1. Дефинирайте функция, която отпечатва думите в изречение като изтрива две различни букви /ако буквите се повтарят два или повече пъти – изтрива всички повторения на буквите/.
// Изречението и двете различни букви се подават с форма.

// Input – 	No pain no gain
// Output – 	Mp obho mp fbho

if (empty($_GET['submit'])) {
	

$string='Hello its a sunny day, dont you think ?';


echo "<form action='task01.php' method='get'>";
echo "<p>Въведи текст :  </p>";
echo "<p><input type='text' name='string'></p>";
echo "<p>Въведи 1 символ : </p>";
echo "<input type='text' name='search1'>";
echo "<p>Въведи 2 символ: </p>";
echo "<input type='text' name='search2'>";
echo "<input type='submit' name='submit' value='code'>";

echo "</form>";
}else{
   $string=$_GET['string'];
   $sym1=$_GET['search1'];
   $sym2=$_GET['search2'];
   //echo "TEXT:".$string;
   echo "Оригинален текст : $string";
   echo "<p>Избраните символи за премахване са : $sym1 , $sym2 </p>";




   $expo=str_split($sym1);
   //print_r($expo);
   // $find=ord($sym1);
   // echo $find;
    $expo2=str_split($sym2);
    //print_r($expo2);
   // $find2=ord($sym2);
   // echo $find2;


     $expo3=str_split($string);
   //  //print_r($expo3);

   //  $counter=count($expo3);
   //  for ($i=0; $i < $counter; $i++) { 
   //  	$find3=ord($expo3[$i]);
   //  	echo $find3."/ ";
    	
   //  	}
    	$cmoon=str_replace($expo, ' ',$expo3);
    $new=implode(' ', $cmoon);
    //echo $new;
    $dontknow=str_split($new);

    $cmoon2=str_replace($expo2, ' ', $dontknow);
    $new2=implode('', $cmoon2);
    echo "<p>Кодирания текст, с премахване на съвпаденията, от избраните символи:</p>";
    echo "<p>".$new2;
    echo "</p>";	
    }
  








?>