<?php



$user_name=$_SESSION['username'];
$first_name=$_SESSION['first_name'];
$phone=$_SESSION['phone'];
$photo=$_SESSION['photo'];
$tickets=$_SESSION['tickets'];
// $user_id=$_SESSION['user_id'];
// if (!empty($_SESSION['new_phone'])) {
// 	$phone=$_SESSION['new_phone'];
// }


echo "Hello, <b>".$user_name."</b> view profile:";
echo form_open('form/edit_first');
echo "<p>First name - ".$first_name." ";
echo "<input type='hidden' name='first_name' value='$first_name'>";
echo "<input type='submit' name='submit' value='edit'>";
echo form_close();
echo "</p>";

echo form_open('form/edit_phone');
echo "<p>Phone Number - ".$phone." ";


echo "<input type='hidden' name='phone' value='$phone'>";
echo "<input type='submit' name='submit' value='edit'>";
echo form_close();
echo "</p>";
echo form_open('form/buy_tickets');
echo "<p><pre>You'r tickets =  $tickets"." ";
echo "<input type='hidden' name='phone' value='$tickets'>";
echo "<input type='submit' name='submit' value='BUY'>";
echo form_close();
echo "</pre></p>";
echo "<p>Your Profile Picture : </p>";
echo '<img height="200" width="250" src="data:image/jpeg;base64,'.base64_encode( $photo ).'"/>';

echo "<p>".anchor('form/logout', 'LOGOUT')."</p>";



// echo "<pre>".$calendar."</pre>";

//https://www.youtube.com/watch?v=kmlX1EwV4VE