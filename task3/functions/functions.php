<?php
/**
 * Created by PhpStorm.
 * User: 3aeed_RM6
 * Date: 12/13/2016
 * Time: 1:09 AM
 */
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}

function time_stamp(){
    date_default_timezone_set('Asia/Tehran');
    $dt = time();
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
    return $mysql_datetime;
}

function logged_in() {
    return isset($_SESSION['login']);
}

function confirm_logged_in() {
    if (!logged_in()) {
        redirect_to("http://localhost/login-register/");
    }
}

