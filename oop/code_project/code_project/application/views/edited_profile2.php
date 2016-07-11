<?php

$new_phone = $_SESSION['new_phone'];
$phone=$_SESSION['phone'];




echo "Successfully editid $phone, <b>NEW  IS : $new_phone !</b>";
echo anchor('form/edited', 'Back');