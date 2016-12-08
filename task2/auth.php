<?php
function redirect(){
    header("Location: index.php?page=home");
    exit;
}
$username = "Saeed";
$password = "pass";
if (isset($_POST['submit'])){
    $local_user = $_POST['username'];
    $local_pass = $_POST['password'];
    if ($local_user == $username && $local_pass==$password){
        redirect();
    }
}