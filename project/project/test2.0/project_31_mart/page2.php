<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
if (empty($_POST['user_name'])) {
	   echo "<div id='hello'>";
	   echo "<label for='login'>Здравейте, Моля попълнете полетo за да продължим : </label>";
		
		echo "<p><form action='page2.php' method='post'>";
		input('login','text','user_name','Enter user name...');
		echo "</p>";
		echo "<p>";
		submit('Continue','btn btn-info');
		echo "</p></form>";
		
		echo "</div>";
		echo "<div id='deny' class='alert alert-danger'  role='alert' >Ако не въведете потребителско име в полето неможе да продължите ...</div>";
	}else{
		echo "<div id='success' class='alert alert-success'  role='alert' >Здравейте "
		.$_POST['user_name'].
		"</div>";
	}
?>	








<?php
	include_once('includes/footer.php');
	?>