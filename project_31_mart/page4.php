<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php

$true=$_SESSION['true'];
$user=$_SESSION['user'];
$score=0;

$two=rand(200,400);
$two2=rand(100,200);
$twwo=rand(50,150);

$two3=rand(50,400);
$two4=rand(50,400);

$twosum=($two - $two2) + $twwo;

$result2= array($twosum,$two3,$two4);
$newresult2=shuffle($result2);

if ($_GET['onelvl'] == $true) {
	$score++;
	$_SESSION['score']=$score;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре,<b>$user</b> правилен отговор!!!
		<p>Сега Продължаваме с :</p>
		Колко е ( $two - $two2 ) + $twwo = ?
		 <p><form action='page5.php' action='get'>
  <input type='radio' name='onelvl' value='$result2[0]' checked>".$result2[0]."
  <input type='radio' name='onelvl' value='$result2[1]'> ".$result2[1]."
  <input type='radio' name='onelvl' value='$result2[2]'>".$result2[2]."
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
		</div>
		</div>";
		
		
}else{
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Съжалявам,<b>$user</b> НЕправилен отговор!!!</p>
		<p>Сега Продължаваме с :</p>
		Колко е ( $two - $two2 ) + $twwo = ?
		 <p><form action='page5.php' action='get'>
  <input type='radio' name='onelvl' value='$result2[0]' checked>".$result2[0]."
  <input type='radio' name='onelvl' value='$result2[1]'> ".$result2[1]."
  <input type='radio' name='onelvl' value='$result2[2]'>".$result2[2]."
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
		</div>
		</div>";
}



$_SESSION['true']=$twosum;







?>
<?php
	include_once('includes/footer.php');
	?>	