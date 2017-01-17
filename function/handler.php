<?php
    global $counter;
    $counter = 0;
    $connection=new mysqli('127.0.0.1','root','','book store');
    if ($connection->connect_error)
    {
        die("connection has die".$connection->connect_error);
    }
    echo ($_POST["username"].$_POST["password"].$_POST["email"].$_POST["full_name"]);

    $first= mysqli_real_escape_string($connection, $_POST['username']);
    $pass = mysqli_real_escape_string($connection, $_POST["password"]);
    $mail = mysqli_real_escape_string($connection, $_POST["email"]);
    $full = mysqli_real_escape_string($connection, $_POST["full_name"]);


    $sql = 'INSERT INTO members'.
        '(id,username, password, email,fullname)'.
        'VALUES ("$_POST["username"]","$_POST["password"]" , "$_POST["email"]","$_POST["full_name"]")';
    if ($connection->query($sql)===TRUE)
    {
        echo "Inserted!";
        //header('Location: ./shopping.php');
    }
    else{
        echo "fail!";
        //header('Location: ./register.php');
    }
?>
