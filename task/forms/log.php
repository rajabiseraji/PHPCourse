<?php
$pass=$_POST['Password'];
$f=$_POST['Email'];
$valid=filter_var($f, FILTER_VALIDATE_EMAIL);
if(!$valid)
echo "Error: Your email or password is not correct";
elseif (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass))
echo "Error: Your email or password is not correct";
else
echo "Congratulation! You're logged in.";

?>