<?php
header('content-type:text/html; charset=utf-8');
session_start();

if (empty($_GET['age'])) {
	echo "Въведете години!";
}else{
	$kids= array('Кола','Фанта','Спрайт','Пепси');
	$adults= array('Уиски','Водка','Ром','Текила');
    $counter1=count($kids);
    $counter2=count($adults);
	$age=$_GET['age'];
	if ($age < 18) {
		echo "За лица под 18 години, предлагаме:";
		for ($i=0; $i < $counter1 ; $i++) { 
			echo "<ul>";
			echo "<li>".$kids[$i]."</li>";
			echo "</ul>";
		}
		
		}elseif ($age >= 18) {
			echo "За лица на и над 18 години, предлагаме:";
			for ($k=0; $k < $counter2; $k++) { 
				echo "<ul>";
			    echo "<li>".$adults[$k]."</li>";
			    echo "</ul>";
			}
	}
}
session_destroy();


?>