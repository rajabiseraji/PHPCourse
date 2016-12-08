<?php 
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['name'] = $_POST['first'];
	header('Location: ./test.php');
 ?>