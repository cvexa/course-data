<?php
session_start();
echo "<link href='css/style.css' rel='stylesheet'>";



echo "<div id='main'>";
$newmoney=$_SESSION['newmoney'];

	if (empty($_GET['guess_number1'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif (empty($_GET['guess_number2'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif (empty($_GET['guess_number3'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif (empty($_GET['guess_number4'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif (empty($_GET['guess_number5'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif (empty($_GET['guess_number6'])) {
		echo "Enter ALL NUMBERS!";
		echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
	}elseif($_GET['bid'] > $_GET['bid']) {
	    echo "NOT ENOUGHT MONEY";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif ($_GET['bid'] <= 0) {
    	echo "Bigger!!!";
    	echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number1'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number2'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number3'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number4'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number5'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }elseif($_GET['guess_number6'] > 47) {
	    echo "All number must be between 1 and 47!";
	    echo "<p><a href='project.php'>BID AGAIN!!!</a></p>";
    }
    else{


	




$a=rand(1,47);
$b=rand(1,47);
$c=rand(1,47);
$d=rand(1,47);
$e=rand(1,47);
$f=rand(1,47);

$win2=50;
$win3=100;
$win4=150;
$win5=500;
$bigwin=10.000;


$lotto = array($a,$b,$c,$d,$e,$f);
$counter=count($lotto);
$guessed=0;
echo "<h1>The wining NUMBERS are : </h1>";
	foreach ($lotto as $wining) {
      echo "<div id='num'>(".$wining.")</div>";
}
echo "<h2>Your NUMBERS are : </h2>";
echo "<div id='ynum'>".$_GET['guess_number1'].$_GET['guess_number2'].$_GET['guess_number3'].
$_GET['guess_number4'].$_GET['guess_number5'].$_GET['guess_number6']."</div>";
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
	$minus=$_GET['bid']-$_GET['bid'];
	echo "<p>You got ". $_GET['bid']."-".$_GET['bid']." = ".$minus."$</p>";
	$_SESSION['newmoney']=$minus;
	echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
}elseif ($guessed == 1) {
	echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
	$newmoney=$_GET['bid'];
	$_SESSION['newmoney']=$newmoney;
	
}
elseif($guessed == 2){
	$plus1=($_GET['bid']*2)+$win2;
	echo "<p>BID:".$_GET['bid']."*2</p>";
    echo " + $win2 $ reward = $plus1 $";
    echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
    $newmoney=$plus1;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 3){
	$plus2=($_GET['bid']*3)+$win3;
	echo "<p>BID:".$_GET['bid']."*3</p>";
    echo " + $win3 $ = $plus2 $";
    echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
    $newmoney=$plus2;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 4){
	$plus3=($_GET['bid']*4)+$win4;
	echo "<p>BID:".$_GET['bid']."*4</p>";
    echo " + $win4 $ = $plus3 $";
    echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
    $newmoney=$plus3;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 5){
	$plus4=($_GET['bid']*5)+$win5;
	echo "<p>BID:".$_GET['bid']."*5</p>";
    echo " + $win5 $ = $plus4";
    echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
    $newmoney=$plus4;
    $_SESSION['newmoney']=$newmoney;
}elseif($guessed == 6){
	$plus5=($_GET['bid']*6)+$bigwin;
	echo "<p>BID:".$_GET['bid']."*6</p>";
    echo " + $bigwin $ = $plus5";
    echo "<p><a href='project3.php'>BID AGAIN!!!</a></p>";
    $newmoney=$plus5;
    $_SESSION['newmoney']=$newmoney;
}

	
}
 


echo "</div>";

?>