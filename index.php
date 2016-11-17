<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>PHP Login From</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">PHP</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">
            <!--<h1 class="header center orange-text">Simple Login Form-->
<?php
define("constant1","hello");
echo "Hello this is PHP";
$tmp1="hi tmp1";
$tmp2=12;
echo $tmp1 . $tmp2;
echo strlen($tmp1);
echo str_word_count($tmp1);
echo strrev($tmp1);
echo strpos($tmp1,"mp1");
echo str_replace("mp1","hello",$tmp1);
echo constant1;
$tmp2=15**2;
echo $tmp2;
if($tmp2===225){
    echo "equal <br> next line";
}

//$arr=array("first","second");
//echo $arr[1];
$arr=array();
$arr[0]="first";
echo count($arr);
$arr=explode("_","string_STST");
echo $arr[0];


$asoc=array('name'=>"john","tel"=>"1234");
echo $asoc['name'];

/*
$arry=array();
$tmp[1]="fdsfs";
$tmp[2]= "dsadfs";
for($i=0;$i<count($tmp);$i++){
    echo $tmp[$i]."<br>";
}*/



/*foreach($asoc as $x => $x_value){
   // echo $x_value;
    echo   '<div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">'.$x_value.'</a></li>
          </ul>
        </div>';
}*/



$form1=array('firstname'=>"first name", 'lastname'=>"lastname",'tel'=>"Enter your phone");


?>
      </h1>

      <div class="row center">
        <div class="card col s4 offset-s4 grey lighten-4">
     		<!-- <h5 class="header col s12 light">Please enter Login Status</h5>	 -->
     		<br>
        	<sapn class="card-title center">Please Login Here</sapn>
        <div class="card-content center">
        	<!--<input type="text" name="name" placeholder="Username">
        	<input type="password" name="password" placeholder="password">-->
            <?php

            foreach($form1 as $label => $placeholder){
                echo  '<label>'.$label.'</label> <input type="text" name="'.$label.'" placeholder="'.$placeholder.'">';
            }
            ?>
        </div>
        <div class="card-action center">
        	<button class="btn waves-effect waves-light" type="submit" name="action">Click Me!</button>
        </div>
       	</div>
       	</div>
   <!--    <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br> -->

    </div>
  </div>


  <div class="container">
    <div class="section">

       <!-- Icon Section  -->
     <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">
<!--Here's some code for you! See it-->
    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
          <?php
foreach($asoc as $x => $x_value){
              echo '<li><a class="white-text" href="#!">'.$x_value.'</a></li>';
}
    ?>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
