<!DOCTYPE html>
<?php
if(!isset($base_url))$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
if(!isset($page_title))$page_title = 'Book Store'; else $page_title = $page_title.' | Book Store'
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/style.css">
    <script src="<?php echo $base_url ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url ?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo $base_url ?>assets/js/main.js"></script>
</head>
<body>
<main>
