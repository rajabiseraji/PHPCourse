<?php

$f=$_POST['Email'];
echo $f;
echo "<br>";
$valid=filter_var($f, FILTER_VALIDATE_EMAIL);
if(!$valid)
echo "Error: ".$f." is not a valid mail!";
echo "<br>";
$family=$_POST['Name'];
echo $family;
echo "<br>";
$flen=strlen($family);
if($flen<3||$flen>20)
echo "Error: Your last name is not valid!";
echo "<br>";
$Tel=$_POST['Tel'];
echo $Tel;
echo "<br>";
if($Tel<1010000000||$Tel>9990000000)
echo "Error: ".$Tel." is not a valid Phone number; Please enter 11 digits!";
echo "<br>";
$pass=$_POST['Password'];
echo $pass;
echo "<br>";
if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass))
    echo "Error: Your password is not safe!!!<br>Password need:<br>1- At least one CAPS<br>2- At least 8 characters
<br>3- Use letter, number and symbol";




/*if(empty($f)||empty($family)||empty($Tel)){
echo("error");
}

if(isset($_FILES['myFile'])){
if($FILES['myFile']['error']>0){
echo "there was an error!";

}else{
if(file_exists("./upload/".$_FILES['myFile']['name'])){
echo "file exists";
}else{
move_uploaded_file($_FILES['myFile']['tmp_name'], "./upload/".$_FILES['myFile']['name']);
}}}

function validateMe($mail){
if(isset($mail))*/
?>