<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
$score2=$_SESSION['score'];
$true=$_SESSION['true'];
$user=$_SESSION['user'];
//echo $twosum." ".$user." ".$score2;

$a=rand(1,50);
$b=rand(1,50);

$real=$a*$b;
$_SESSION['true']=$real;



if ($_GET['onelvl'] == $true) {
	$score2++;
	$_SESSION['score']=$score2;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре,<b>$user</b> правилен отговор!!!
		<p>Сега Продължаваме с :</p>
		Правоъгълник е със страни: дължина $a сантиметра и ширина $b сантиметра. 
		<p>Какво е лицето му?</p>
		 <p><form action='page6.php' action='get'>
  <input type='number' name='square' placeholder=' ? '>квадрата сантиметра
  
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
		Правоъгълник е със страни: дължина $a сантиметра и ширина $b сантиметра. 
		<p>Какво е лицето му?</p>
		 <p><form action='page6.php' action='get'>
  <input type='number' name='square' placeholder=' ? '>квадрата сантиметра
  
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
		</div>
		</div>";
}







?>
<?php
	include_once('includes/footer.php');
	?>	