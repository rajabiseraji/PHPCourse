<?php

$connection = new mysqli("127.0.0.1", "root", "","register");
if($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$pas=$_POST["Password"];
$user=$_POST["UserName"];

$resault= "SELECT password FROM user";

if($pas===$resault){

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['name'] = $_POST['UserName'];

    header('Location: ../../home/templates/index.php');

}else{

    header('Location: ../p2/views/layout.php');
}

?>