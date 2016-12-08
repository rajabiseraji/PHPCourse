<?php 
	$connection = new mysqli("127.0.0.1", "root", "root");
	if($connection->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}




	$command = "CREATE TABLE test(id INT(10) PRIMARY KEY, name VARCHAR(10) UNIQUE)";

	if($connection->query("use phpcourse") === TRUE)
		echo "success";
	else
		echo "failed";

	$result = $connection->query("SELECT * FROM test");

	if($result){
		while($row = $result->fetch_assoc()){
			echo $row["id"]. " ". $row["name"]."<br>";
		}
	}else {
		echo "failed";
	}

	
	


 ?>
