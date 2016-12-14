<?php
session_start();
if (isset($_SESSION['login'])){
    unset($_SESSION['login']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    require_once "functions/functions.php";
    redirect_to('index.php');
}