<?php
session_start();
$connection=new mysqli('127.0.0.1','root','','book store');
if ($connection->connect_error)
{
die("connection has die".$connection->connect_error);
}

$login = mysql_real_escape_string($_POST["username"]);
$pass = mysql_real_escape_string($_POST["password"]);
$query = "SELECT * FROM members WHERE username = '$login' AND password = SHA('$password')";
$data=mysqli_query($query);
if ($data)
{
    if (mysql_num_rows($data) == 1 ) {
        $row = mysql_fetch_assoc($data);
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['message'] = "Welcome,&nbsp;" . $_SESSION['username'];
        header('Location: shopping.php');
        exit();
    }
    else {
        $_SESSION['message'] = "Please enter a valid username or password";
        header('Location: register.php');
        exit();
    }

}
else {
    die("Query failed");
}



?>