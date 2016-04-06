<?php
function convert(){
	for ($i=chr(65); $i <chr(90) ; $i++) { 
		echo $i;
	}
}

function convert2(){
	for ($k=chr(97); $k <chr(122) ; $k++) { 
		echo $k;
	}
}

function numbers(){
   for ($m=1; $m <9; $m++) { 
   	echo $m;
   }
}
function pass($pass){
	echo md5($pass);
	
}



convert();
echo "<pre>";
numbers();
echo "</pre>";
convert2();



if (empty($_POST['submit'])) {
echo "<form action='probba17.php' method='post'>";
echo "<p>user name</p>";
echo "<input type='text' name='username' placeholder='enter some name...'>";
echo "<p>password </p>";
echo "<p><input type='password' name='password' placeholder='enter the pss...'></p>";
echo "<input type='submit' name='submit' value='go'>";
echo "</form>";
}else{
	echo "<pre>";
pass($_POST['password']);
echo "</pre>";   
}

?>