<html>
<head>
<title>My Form</title>
</head>
<body>



<?php echo form_open('form/check'); ?>

<?php echo form_error('user_name'); ?>

<h5>Username</h5>
<input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" size="50" />


<h5>Password</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />



<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
