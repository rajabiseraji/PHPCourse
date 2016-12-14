<?php
/**
 * Created by PhpStorm.
 * User: 3aeed_RM6
 * Date: 12/13/2016
 * Time: 12:43 AM
 */

include "functions.php";
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","phpcourse");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// test if connectio is ok
if (mysqli_connect_errno()){
    die("Database connection failed: ".
        mysqli_connect_error()." ( ". mysqli_connect_errno() ." )"
    );
}

function confirm_query($result_set) {
    if(!$result_set) {
        die("Database query failed.");
    }
}

function add_user($username,$email,$name,$time,$password){
    global $connection;
    $query = "INSERT INTO users (user_name,email,name,user_registeration_date,password) VALUES ('{$username}','{$email}','{$name}','{$time}','{$password}')";
    $result = mysqli_query($connection,$query);
//    var_dump(confirm_query($result));
    if ($result){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        return true;
    }
}

function find_admin_by_username($username){
    global $connection;
    $query = "SELECT * ";
    $query .="FROM users ";
    $query .= "WHERE user_name='{$username}' ";
    $query .= "LIMIT 1";
    $admin_set = mysqli_query($connection,$query);
    confirm_query($admin_set);
    if ($admin = mysqli_fetch_assoc($admin_set)){
        return $admin;
    }else{
        return null;
    }
}

function get_all_posts(){
    global $connection;
    $query= "SELECT * FROM posts";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    return $result;
}

function post_from_id($id){
    global $connection;
//    $query = "SELECT * FORM posts";
    $query = "SELECT * ";
    $query .="FROM posts ";
    $query .= "WHERE id='{$id}' ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    return $result;
}