<?php
// filter_var khande beshe
$firstname = $_POST['firstName'];
$lastname = $_POST['LastName'];
$tel = $_POST['tel'];
//if (empty($firstname) || empty($lastname) || empty($tel)) {
//    die("error");
//}
//echo $firstname.'<br>';
//echo $lastname.'<br>';
//echo $tel.'<br>';

$valid = filter_var($firstname,FILTER_VALIDATE_EMAIL);
if (!$valid){
    echo "error";
}

if (isset($_FILES['myFile'])){
    if ($_FILES['myFile']['error']> 0){
        echo "there was an error!";
    }else{
        if (file_exists("../uploads/".$_FILES['myFile']['name'])){
            echo "File exists";
        }else{
            move_uploaded_file($_FILES['myFile']['tmp_name'],"../uploads/".$_FILES['myFile']['name']);
        }
    }
}