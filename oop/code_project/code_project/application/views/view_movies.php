<?php


// var_dump($all_movies);
	
// echo $movies['movie_name'];
// $counter=count($all_movies);
echo "<ol start='1'>";
foreach ($all_movies as $key => $movies) {

	echo "<li>".$movies['movie_name']."</li>";
}

// echo "<li>".$movies['movie_name']."</li>";


echo "</ol>"; 
