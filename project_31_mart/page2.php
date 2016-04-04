<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
if (empty($_POST['user_name'])) {
	   echo "<div  class='container text-center'>
		
		<div  id='hello' class='col-lg-6 col-lg-offset-3 text-center'>
		<label for='login'>Здравейте, Моля попълнете полетo за да продължим : </label>";
	
		echo "<p><form action='page2.php' method='post'>";
		input('login','text','user_name','Enter user name...');
		echo "</p>";
		echo "<p>";
		submit('Continue','btn btn-info');
		echo "</p></form>";
		
		
	
        echo "</div>";
	echo "</div>";
		
		echo "<div  class='container text-center'>";
		echo "<div id='deny' class='alert alert-danger'  role='alert' class='col-xs-12 col-centered text-center'>
		Ако не въведете потребителско име в полето неможе да продължите ...</div>";
		echo "</div>";
	}else{
		echo "<div  class='container text-center'>";
		echo "<div id='success' class='alert alert-success' class='col-xs-6 col-centered text-center' role='alert' >
		Здравейте ".$_POST['user_name']."</div>";

	

		echo "</div>";
		echo "<div class='row'>
	<div id='dif' class='alert alert-success col-md-3 col-xs-3 col-sm-3
		col-xs-offset-5 col-md-offset-5'>Избери трудност:
		<form action='page3.php' method='get'>
		<input type='range'  name='dificulty'  min='1' max='3'>
		най-лесно &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; > средно &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >  най-трудно
		<p><center><input type='submit' name='submit' value='избери'>
		</center></p>
		</form></div>
		</div>";
	}
	
		$_SESSION['user']=$_POST['user_name'];

?>	








<?php
	include_once('includes/footer.php');
	?>