<?php
header('content-type:text/html; charset=utf-8');

function reg($type,$name,$place){
	echo "<input type='$type' name='$name' placeholder='$place'>";
}

function sub($type,$name,$value){
	echo "<input type='$type' name='$name' value='$value'>";
}


$text="text";
$user="username";
$holder="enter username...";



echo "<form action='' method='post'>";
echo "LOG IN";
echo "<p>Enter User NAME:</p>";
reg($text,$user,$holder);
echo "<p>Enter PASSWORD : </p>";
reg('password','password','enter password...');
echo "<p>ENTER</p>";
sub('submit','submit','LOG IN');
echo "</form>";
?>