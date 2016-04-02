<?php

function input($id,$type,$name,$place){
    echo "<input id='$id' type='$type' name='$name' placeholder='$place'>";
}
function submit($value,$class){
	echo "<input type='submit' name='submit' value='$value' class='$class'>";
}


	
function check_files(){
	$files = glob('*.{php,txt}', GLOB_BRACE);
	$new=implode(' ',$files);
	$counter=count($files);

	
	

	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Проверка за .php файловете в проекта : ";
		 for ($i=0; $i < $counter; $i++) { 
		 	echo "<p>".$files[$i]." + "."</p>";
		 }
		 if ($counter == 25) {
		 	echo "Всички нужни файлове са налични!";
		 }else{
		 	echo "Липсват файлове, проложението може да не работи както трябва....";
		 }
	
	
	
 

}


?>