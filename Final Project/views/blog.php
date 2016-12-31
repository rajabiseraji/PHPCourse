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
<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $select = post_from_id($id);
        $select=mysqli_fetch_assoc($select);
        if (!$select){
            redirect_to('home.php');
        }
        ?>
        <br>
        <div class="post_title"><h2><?php echo $select['title']; ?></h2></div>
        <div class="post_content">
            <p>By : <?php echo $select['writer']; ?></p>
            <p><?php echo $select['content']; ?></p>
        </div>
    <?php
    }else {
        ?>
        <div class="mycontent">
            <br>
            <p>Please choice your Post from SideBar</p>
        </div>
        <?php
    }
        ?>

<?php
require_once "footer.php";
?>