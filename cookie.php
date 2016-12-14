<?php
if (isset($_COOKIE['tmp'])){
    echo "You are:".$_COOKIE['tmp'];
}elseif (!isset($_POST['first'])){
    header('Location: ./login.php');
    exit();
}else{
    setcookie('tmp',$_POST['first']);
    echo $_COOKIE['tmp'];
}