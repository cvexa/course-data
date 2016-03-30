<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
$dificulty=$_GET['dificulty'];
$user=$_SESSION['user'];
$conn = mysqli_connect('localhost', 'root', '', 'math');




$one=rand(1,150);
$one2=rand(1,150);
$onne=rand(1,20);


$one3=rand(1,200);
$one4=rand(1,200);

$onesum=($one+$one2)-$onne;
$_SESSION['true']=$onesum;

$result = array($one3,$one4,$onesum);
$newresult=shuffle($result);

if ($dificulty == 1) {
	
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре <b>$user</b> , това е задачката за теб:</p>
		Колко е ( $one + $one2 ) - $onne = ?
		 <p><form action='page4.php' action='get'>
  <input type='radio' name='onelvl' value='$result[0]' checked>".$result[0]."
  <input type='radio' name='onelvl' value='$result[1]'> ".$result[1]."
  <input type='radio' name='onelvl' value='$result[2]'>".$result[2]."
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
		
		</div>
		</div>";
}elseif($dificulty == 2){
	$fig1=rand(1,15);
	$fig2=rand(1,15);
	$fig3=rand(1,15);

	$formula=$fig1*$fig2*$fig3;
	$_SESSION['true2']=$formula;
echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре <b>$user</b> , това е задачката за теб:</p>
		Правоъгълен паралелепипед е фигура, чиито страни са правоъгълници.
Ако дължините на страните при основата са с дължина $fig1 и $fig2 третия ръб е $fig3, намерете обема :
		 <p><form action='page3_2.php' action='get'>
  <input type='number' name='obem' placeholder=' ? '>
  
  <p><input type='submit' name='submit' value='избери'></p>
</form></p> 
</div>
		</div>";
		
}elseif($dificulty == 3){
echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре <b>$user</b> , добави задачка:</p>";
		
	
	echo "<form action='create.php' method='post'>";
    echo "<p>Въведи едно число:";
	echo "<input type='number' name='number_1'></p>";
	echo "<p>Въведи знак:";
	echo "<input type='text' name='symbol'>/примерно: + , - , * , / , .....</p>";
	echo "<p>Въведи едно число:";
	echo "<input type='number' name='number_2'><p>";
	echo "<p>Въведи решението:";
	echo "<input type='number' name='result'><p>";

	echo "<p><input type='submit' name='submit' value='insert'></p>";
	echo "</form>";
	echo "</div>
		</div>";


  
 



}









$_SESSION['user']=$user;







?>

<?php
	include_once('includes/footer.php');
	?>	