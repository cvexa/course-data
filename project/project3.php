<?php
session_start();


function input($type,$name,$place,$value){
	echo "<input type='$type' name='$name' placeholder='$place' value='$value'>";
}



$newmoney=$_SESSION['newmoney'];



echo "<p><form action='project2.php' method='get'>";
echo "<p>Try your luck in my lotto 6/47 numbers:/enter numbers between 1 and 47/</p>";
input('number','guess_number1','enter number','enter number');
input('number','guess_number2','enter number','enter number');
input('number','guess_number3','enter number','enter number');
input('number','guess_number4','enter number','enter number');
input('number','guess_number5','enter number','enter number');
input('number','guess_number6','enter number','enter number');

echo "<p>Curent Money : $ $newmoney<p>";
echo "<p>Bid";
input('number','bid','$$$','$$$');

input('submit','submit','','try');
echo "</p>";
echo "<p>The AWARDS are : 
<ul type='circle'>
<li>2 numbers = Your bid *2 + 50 $</li>
<li>3 numbers = Your bid *3 + 100 $</li>
<li>4 numbers = Your bid *4 + 150 $</li>
<li>5 numbers = Your bid *5 + 500 $</li>
<li>6 numbers = Your bid *6 + 10 000 $</li>
<ul>
</p>";








?>