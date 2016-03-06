<?php
header('content-type:text/html; charset=utf-8');
session_start();
echo "<link href='css/style.css' rel='stylesheet'>";



function input($type,$name,$place,$value){
	echo "<input type='$type' name='$name' placeholder='$place' value='$value'>";
}
?>
<!html>
<head>
<title>game01</title>
</head>
<body>




<?php
echo "<div id='main'>";
echo "<p><form action='project2.php' method='get'>";
echo "<p>Try your luck in my lotto 6/47 numbers:/enter numbers between 1 and 47/</p>";
input('number','guess_number1','enter number','enter number');
input('number','guess_number2','enter number','enter number');
input('number','guess_number3','enter number','enter number');
input('number','guess_number4','enter number','enter number');
input('number','guess_number5','enter number','enter number');
input('number','guess_number6','enter number','enter number');

echo "<p>Curent Money : $ 0<p>";
echo "<p>Bid";
input('number','bid','$$$','$$$');
echo "$ ";
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
echo "<p>*If you not guess at least one number you will lose all of your bid
/if you guess only one number you will stay with your curent bid/!</p>";
echo "</div>";
?>
</body>
</html>