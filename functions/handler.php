<?php

$u = $_POST['UserName'];
echo $u;
$p = $_POST['Password'];
echo $p;
$e =$_POST['Email'];
echo $e;

if(empty($u)||empty($p)||empty($e)){
    echo "--empty input--";
}

$valid =filter_var($e,FILTER_VALIDATE_EMAIL);

if(!$valid){
    echo "--enter a valid mail--";
}

if(strlen($p)<10){
    echo "--invalid pass--";
}

if(isset($_FILES['myfile'])){
    if($_FILES['myfile']['error']>0){
        echo "   errorrrr!!!!".$_FILES['myfile']['error'];
    }
    else{
        if(file_exists("../uploads/".$_FILES['myfile']['name'])){
            echo "   file exist";
        }
        else{
            move_uploaded_file($_FILES['myfile']['tmp_name'],"../uploads/".$_FILES['myfile']['name']);
        }
    }
}

?>