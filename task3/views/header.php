<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mydesignsforweb.com/alpha/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2016 18:00:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if (isset($_GET['page'])){
        if ($_GET['page'] == "signup"){
            echo "<title>Register Page</title>";
        }elseif ($_GET['page'] == "Home"){
            echo "<title>Home</title>";
        }
    }else{
        echo "<title>Login Page</title>";
    }
    ?>
<!--    <title>Alpha One page template</title>-->

    <!-- Bootstrap -->
    <script src="../js/pace.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href='../http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="../css/theme-loading-bar.css" rel="stylesheet" />

    <?php
    global $index;
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'home' || $_GET['page'] == 'signup' || $_GET['page'] == 'signin') {
            ?>
            <script src="js/pace.js"></script>
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/theme.css" rel="stylesheet">
            <link href="css/font-awesome.css" rel="stylesheet">
            <link href="css/animate.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300'
                  rel='stylesheet' type='text/css'>
            <link href="css/theme-loading-bar.css" rel="stylesheet"/>
            <?php
        }
    }

    elseif($index==true){
    ?>
        <script src="js/pace.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300'
              rel='stylesheet' type='text/css'>
        <link href="css/theme-loading-bar.css" rel="stylesheet"/>
    <?php
    }else {
        ?>
        <script src="../js/pace.jsss"></script>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/theme.css" rel="stylesheet">
        <link href="../css/font-awesome.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300'
              rel='stylesheet' type='text/css'>
        <link href="../css/theme-loading-bar.css" rel="stylesheet"/>
        <?php
    }
    ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" id="container" >
    <header>
        <!-- Main comapny header -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand top-navbar-brand" href="#"><img src="images/alpha-logo.png"/> Alpha</a>
                </div>
                <ul class="nav navbar-nav navbar-right bigger-130 hidden-xs">
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        ?>
                        <li><a href=""><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="../auth.php">Log out</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
