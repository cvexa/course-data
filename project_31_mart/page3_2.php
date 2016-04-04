<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php

$user=$_SESSION['user'];
$formula=$_SESSION['true2'];
$score_lvl2=0;


if ($_GET['obem'] == $formula) {
	$score_lvl2+=1;
	$_SESSION['score2']=$score_lvl2;

	$side=rand(1,40);
	$sidesum=$side+$side+$side+$side;
    $sumfake=rand(1,200);
    $sumfake2=rand(1,200);
$fake= array($sumfake, $sumfake2,$sidesum);
$shuff=shuffle($fake);


echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> , позна правилно ,това е нова задачка:</p>
		Нека дължината на страната на квадрата е $side . Квадрата има 4 равни страни, значи ще намеря периметъра 
		му така :<p> $side+$side+$side+$side = $fake[0] !Това твърдение вярно ли е ?</p> 
		 <p><form action='page4_2.php' action='get'>
  <input type='radio' name='perimeter' value='yess' checked>ДА
  <input type='radio' name='perimeter' value='no'>НЕ
  
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
</div>
		</div>";

		
}else{
	$side=rand(1,40);
	$sidesum=$side+$side+$side+$side;
    $sumfake=rand(1,200);
  
$fake= array($sumfake,$sidesum);
$shuff=shuffle($fake);
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Съжалявам <b>$user</b> , не позна правилно ,това е нова задачка:</p>
		Нека дължината на страната на квадрата е $side . Квадрата има 4 равни страни, значи ще намеря периметъра 
		му така :<p> $side+$side+$side+$side = $fake[0] !</p><p>Това твърдение вярно ли е ?</p> 
		 <p><form action='page4_2.php' action='get'>
  <input type='radio' name='perimeter' value='yess' checked>ДА
  <input type='radio' name='perimeter' value='no'>НЕ
  
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
</div>
		</div>";
		

}



$_SESSION['show']=$fake[0];

$_SESSION['faill']=$sumfake;

$_SESSION['true2']=$sidesum;
$_SESSION['score2']=$score_lvl2;




















?>
<?php
	include_once('includes/footer.php');
	?>	