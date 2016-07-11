<?php

$first_name=$_SESSION['first_name'];


echo "EDIT "." ".$first_name." : ";
echo form_open('form/edit_first');
echo "<input type='text' name='new_first_name' placeholder='Edit $first_name'>";
echo "<input type='hidden' name='first_name' value='$first_name'>";
echo "<input type='submit' name='submit' value='edit'>";
echo "</form>";