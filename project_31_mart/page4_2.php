<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php

$user=$_SESSION['user'];
$score_lvl2=$_SESSION['score2'];
$true=$_SESSION['true2'];
$show=$_SESSION['show'];

$sumfake=$_SESSION['faill'];

$chose="yess";
$chose2="no";
if(!isset($_GET['perimeter'])){
if ($_GET['perimeter'] == $chose & $show == $true) {
	$score_lvl2+=10;
	$_SESSION['score2']=$score_lvl2;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> , позна правилно ,това е нова задачка за теб:</p>
		<p>Довърши изречението правилно като избереш от опциите :</p>
		<form action='page5_2.php' method='get'>
		<p>Остър ъгъл - по-малък от 
		<select name='corners'>
  <option value='empty'>...</option>
  <option value='prav'>правия ъгъл.</option>
  <option value='izpraven'>изправения ъгъл</option>
  <option value='syseden'>съседен ъгъл</option>
       </select>. 
       Той има мярка по-малка от <select name='gradus'>
  <option value='empty'>...</option>
  <option value='180'>180 °</option>
  <option value='60'>60 °</option>
  <option value='90'>90 °</option>
       </select>. 
       <p><input type='submit' name='submit' value='избери'></p> 
       <p>На картинката ъгъл LMN е остър ъгъл.<img src='img/RightAngle.gif'></p>
       <p>*Трябва да попълниш и двете опции вярно за да спечелиш точки!</p></p>

</form>
		</div>
		</div>";
}elseif ($_GET['perimeter'] == $chose2 & $show == $sumfake) {
	$score_lvl2+=10;
	$_SESSION['score2']=$score_lvl2;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> , позна правилно ,това е нова задачка за теб:</p>
		<p>Довърши изречението правилно като избереш от опциите :</p>
		<form action='page5_2.php' method='get'>
		<p>Остър ъгъл - по-малък от 
		<select name='corners'>
  <option value='empty'>...</option>
  <option value='prav'>правия ъгъл.</option>
  <option value='izpraven'>изправения ъгъл</option>
  <option value='syseden'>съседен ъгъл</option>
       </select>. 
       Той има мярка по-малка от <select name='gradus'>
  <option value='empty'>...</option>
  <option value='180'>180 °</option>
  <option value='60'>60 °</option>
  <option value='90'>90 °</option>
       </select>. 
       <p><input type='submit' name='submit' value='избери'></p> 
       <p>На картинката ъгъл LMN е остър ъгъл.<img src='img/RightAngle.gif'></p>
       <p>*Трябва да попълниш и двете опции вярно за да спечелиш точки!</p></p>

</form>
		</div>
		</div>";
    echo $score_lvl2;
}else{
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> , позна правилно ,това е нова задачка за теб:</p>
		<p>Довърши изречението правилно като избереш от опциите :</p>
		<form action='page5_2.php' method='get'>
		<p>Остър ъгъл - по-малък от 
		<select name='corners'>
  <option value='empty'>...</option>
  <option value='prav'>правия ъгъл.</option>
  <option value='izpraven'>изправения ъгъл</option>
  <option value='syseden'>съседен ъгъл</option>
       </select>. 
       Той има мярка по-малка от <select name='gradus'>
  <option value='empty'>...</option>
  <option value='180'>180 °</option>
  <option value='60'>60 °</option>
  <option value='90'>90 °</option>
       </select>. 
       <p><input type='submit' name='submit' value='избери'></p> 
       <p>На картинката ъгъл LMN е остър ъгъл.<img src='img/RightAngle.gif'></p>
       <p>*Трябва да попълниш и двете опции вярно за да спечелиш точки!</p></p>

</form>
		</div>
		</div>";
    echo $score_lvl2;
}
}















$_SESSION['score2']=$score_lvl2;

?>
<?php
	include_once('includes/footer.php');
	?>	