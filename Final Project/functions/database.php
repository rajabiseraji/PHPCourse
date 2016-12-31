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

function get_all_products(){
    global $connection;
    $query = "SELECT * FROM `shop`";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    return $result;
}

function add_to_basket($username,$product_id){
    global $connection;
    $query2="SELECT * FROM `basket` WHERE `product_id`={$product_id}";
    $check = mysqli_query($connection,$query2);
    $check_row = $check->num_rows;
    if ($check_row == 0){
        global $connection;
        $query = "INSERT INTO `basket` (`user_name`, `product_id`) VALUES ('{$username}', $product_id)";
        $result = mysqli_query($connection,$query);
        return $result;
//        echo "in if";
    }

}

function show_table($username){
    global $connection;
    $query = "SELECT `product_id` FROM `basket` WHERE `user_name`='{$username}'";
    $result = mysqli_query($connection,$query);
    $qqq=array();
    while($productions = mysqli_fetch_assoc($result)){
        $id = $productions['product_id'];
        $new_query="SELECT * FROM `shop` WHERE `id`={$id}";
        $new_result = mysqli_query($connection,$new_query);
//        mysqli_query($connection,$new_query);
        $qqq[]=mysqli_fetch_array($new_result);
    }
    return $qqq;
}

function test_table($id){
    global $connection;
    $new_query="SELECT * FROM `shop` WHERE `id`={$id}";
    $new_result = mysqli_query($connection,$new_query);
    return $new_result;
}

function delete_from_basket($id){
    global $connection;
    $sql = "DELETE FROM `basket` WHERE `product_id`={$id}";
    $result = mysqli_query($connection,$sql);
    return $result;
}