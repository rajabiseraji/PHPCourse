<?php
//function redirect_to($new_location) {
//	header("Location: " . $new_location);
//	exit;
//}
//redirect_to('http://google.com');
session_start();
$index=true;
require_once "functions/database.php";
if (isset($_SESSION['login'])){
	redirect_to('views/home.php');
}
require_once "views/header.php";
?>
<?php

	if (isset($_POST['register'])){
		require_once "functions/database.php";
		global $database;
		$time = time_stamp();
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if ($username==NULL && $password==NULL || strlen($username)<6 || strlen($password)<6 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			redirect_to('index.php?page=signup');
		}
		$check_return = add_user($username,$email,$name,$time,$password);
		if ($check_return==true){
	//			header('Location: views/home.php');
			redirect_to('views/home.php');
		}
	}

	if (isset($_POST['login'])){
		require_once "functions/database.php";
		$username=$_POST['username'];
		$password = $_POST['password'];
		$admin=find_admin_by_username($username);
		if ($admin){
//
			$_SESSION['username'] = $admin['user_name'];
			$_SESSION['password'] = $admin['password'];
			if ($username == $admin['user_name'] && $password == $admin['password']){
				$_SESSION['login'] = true;
				redirect_to('views/home.php');
			}else{
				redirect_to('index.php?page=signup');
			}

		}else{
			redirect_to('index.php?page=signup');
		}
	}

	if (isset($_GET['page'])){
		if ($_GET['page']=='signin'){
			include "views/login.php";
		}elseif ($_GET['page']=='signup'){
			include "views/register.php";
		}elseif ($_GET['page']=='home'){
			include "views/home.php";
		}
	}else{
		include "views/login.php";
	}



?>
<?php
include_once "views/footer.php";