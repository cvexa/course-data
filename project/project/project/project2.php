<?php
session_start();

$newmoney=$_SESSION['newmoney'];

	if (empty($_GET['guess_number1'])) {
		echo "Enter ALL NUMBERS!";
	}elseif (empty($_GET['guess_number2'])) {
		echo "Enter ALL NUMBERS!";
	}elseif (empty($_GET['guess_number3'])) {
		echo "Enter ALL NUMBERS!";
	}elseif (empty($_GET['guess_number4'])) {
		echo "Enter ALL NUMBERS!";
	}elseif (empty($_GET['guess_number5'])) {
		echo "Enter ALL NUMBERS!";
	}elseif (empty($_GET['guess_number6'])) {
		echo "Enter ALL NUMBERS!";
	}elseif($_GET['bid'] > $_GET['bid']) {
	echo "NOT ENOUGHT MONEY";
    }elseif ($_GET['bid'] <= 0) {
    	echo "Bigger!!!";
    }
    else{

$a=rand(1,47);
$b=rand(1,47);
$c=rand(1,47);
$d=rand(1,47);
$e=rand(1,47);
$f=rand(1,47);
$money=100;
$win2=50;
$win3=100;
$win4=150;
$win5=500;
$bigwin=10.000;


$lotto = array($a,$b,$c,$d,$e,$f);
$counter=count($lotto);
$guessed=0;
	foreach ($lotto as $wining) {
      echo "(".$wining.")";
}
echo "<ul type='square'>";
for ($i=0; $i < $counter; $i++) { 
	# code...



if ($_GET['guess_number1'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
	
}elseif ($_GET['guess_number2'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
}elseif ($_GET['guess_number3'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
}elseif ($_GET['guess_number4'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
}elseif ($_GET['guess_number5'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
}elseif ($_GET['guess_number6'] == $lotto[$i]) {
	$guessed++;
	echo "<li>you guess [".$lotto[$i]."],</li>";
}
}
echo "</ul>";
if ($guessed == 0) {
	echo "Sry no guess !";
	$minus=$_GET['bid']-100;
	echo "<p>You got ". $_GET['bid']."-100"." = ".$minus."$</p>";
	$_SESSION['newmoney']=$minus;
	echo "<a href='project3.php'>BID AGAIN!!!</a>";
}elseif ($guessed == 1) {
	echo "<a href='project.php'>BID AGAIN!!!</a>";
	
}
elseif($guessed == 2){
	$plus1=($_GET['bid']*2)+$win2;
	echo "<p>BID:".$_GET['bid']."*2</p>";
    echo " + $win2 $ reward = $plus1 $";
    echo "<a href='project3.php'>BID AGAIN!!!</a>";
    $newmoney=$plus1;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 3){
	$plus2=($_GET['bid']*3)+$win3;
	echo "<p>BID:".$_GET['bid']."*3</p>";
    echo " + $win3 $ = $plus2 $";
    echo "<a href='project3.php'>BID AGAIN!!!</a>";
    $newmoney=$plus2;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 4){
	$plus3=($_GET['bid']*4)+$win4;
	echo "<p>BID:".$_GET['bid']."*4</p>";
    echo " + $win4 $ = $plus3 $";
    echo "<a href='project3.php'>BID AGAIN!!!</a>";
    $newmoney=$plus3;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 5){
	$plus4=($_GET['bid']*5)+$win5;
	echo "<p>BID:".$_GET['bid']."*5</p>";
    echo " + $win5 $ = $plus4";
    echo "<a href='project3.php'>BID AGAIN!!!</a>";
    $newmoney=$plus4;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 6){
	$plus5=($_GET['bid']*6)+$bigwin;
	echo "<p>BID:".$_GET['bid']."*6</p>";
    echo " + $bigwin $ = $plus5";
    echo "<a href='project3.php'>BID AGAIN!!!</a>";
    $newmoney=$plus5;
    $_SESSION['newmoney']=$newmoney;
}

	
}
 




?>