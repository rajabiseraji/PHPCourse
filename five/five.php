<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","phpcourse");

$connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// test if connectio is ok
if (mysqli_connect_errno()){
    die("Database connection failed: ".
        mysqli_connect_error()." ( ". mysqli_connect_errno() ." )"
    );
}
if (isset($_POST['value'])) {
    $value = $_POST['value'];
//    $stmt = $connection->prepare("INSERT INTO five(id,value) VALUES (1,:value)");

    $stmt = $connection->prepare("INSERT INTO `posts` (`id`, `title`, `content`, `writer`) VALUES (12, ?, ?, ?)");
    $title = "irancel";
    $content= " this is a operator";
    $writer = "khodam";
    $stmt->bind_param('sss', $title, $content, $writer);

    $stmt->execute();

// age int bood i bzan b jaye s
//    if (!mysqli_query($connection,"INSERT INTO users (id,title,content,writer) VALUES (10,'testtt','hiiiiii','saeed')")){
//        echo "Error" . mysqli_error($connection);
//    }

}

//$test=mysqli_query($connection,"INSERT INTO `posts` (`id`, `title`, `content`, `writer`) VALUES (10, 'test', 'this is test', 'man')");
//if (!$test){
//    echo "errrro".mysqli_error($connection);
//}
