<?php
require_once "views/header.php";
?>
<?php

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