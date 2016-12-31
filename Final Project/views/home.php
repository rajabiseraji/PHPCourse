<?php
    session_start();
require_once "../functions/database.php";
//    require_once "../functions/functions.php";
    confirm_logged_in();
    require_once "header.php";
//require_once "../functions/database.php";
?>
    <br><br><br><br>
<?php
    include_once "sidebar.php";
?>
    <div class="mycontent">
        <br>
        <p>Hello and Welcome to our first CMS, to view posts, choice your post from left sidebar</p>
    </div>

<?php
require_once "footer.php";
?>