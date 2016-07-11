<?php




$phone=$_SESSION['phone'];


echo "EDIT "." ".$phone." : ";
echo form_open('form/edit_phone');
echo "<input type='number' name='new_phone' placeholder='Edit $phone'>";
echo "<input type='hidden' name='phone' value='$phone'>";
echo "<input type='submit' name='submit' value='edit'>";
echo "</form>";