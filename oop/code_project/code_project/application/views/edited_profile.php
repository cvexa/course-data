<?php
$new_first_name = $_SESSION['new_first_name'];
$first_name = $_SESSION['first_name'];

// echo $new_phone;

// $user_name=$_SESSION['username'];
// $pass=$_SESSION['password'];






echo "Successfully editid $first_name, <b>NEW  IS : $new_first_name !</b>";
echo anchor('form/edited', 'Back');



// echo "<a href='check'>GO BACK</a>";
