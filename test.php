<?php 
	session_start();
	if(isset($_SESSION['login'])	){
	echo "Hello ".$_SESSION['name'];
	echo "<form method='post' action='logout.php'>  
		<input type='submit' value='log out'>
		</form> ";
	} else {
		header('Location: ./login.php');
	}	
 ?>