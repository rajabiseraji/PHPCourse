<?php

$connection = new mysqli("127.0.0.1", "root", "","register");
if($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$command = "INSERT INTO post(post_user,contex)
                             VALUES ('123','qqqqqqqqqqqqqtrsgggggggggggggggggggggggsgfxx
                             lhhjkhjkg
                             jjkkhjkgyutygyur
                             jbhbbbbbbbbbbbbbbbbbkiiiiiiiiiiiigyfutftdrdsrtstrest
                             mmmmmmmmmmklhouhjjjjjjjjjjdfrrrrrrrrtaswaw')";

mysqli_query($connection,$command);

if($connection->query("use register")===TRUE){
    echo "success";
}

else echo "failed";

if($connection->query($command)===TRUE)
    echo "success";
else echo "failed";



?>