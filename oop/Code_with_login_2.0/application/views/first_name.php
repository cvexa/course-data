<?php


$user_name=$_SESSION['username'];
$first_name=$_SESSION['first_name'];
$phone=$_SESSION['phone'];
$photo=$_SESSION['photo'];


echo "Hello, <b>".$user_name."</b> view profile:";
echo "<p>First name - ".$first_name."</p>";
echo "<p>Phone Number - ".$phone."</p>";
echo "<p>Your Profile Picture : </p>";
echo '<img src="data:image/jpeg;base64,'.base64_encode( $photo ).'"/>';

echo "<pre>".$calendar."</pre>";

//https://www.youtube.com/watch?v=kmlX1EwV4VE