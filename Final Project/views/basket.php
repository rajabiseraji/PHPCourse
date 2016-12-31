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

<div class="rightt">
    <?php
        if (!isset($_GET['delete_id'])) {
            ?>
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $username = $_SESSION['username'];
                //   var_dump(show_table($username));
                $tt = show_table($username);
                //   var_dump($tt);
                $i = 1;
                foreach ($tt as $mm) {
//       echo $mm['product_name'];
                    ?>

                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><b><?php echo $mm['product_name']; ?></b></td>
                        <td><?php echo substr($mm['product_desc'], 0, 100) . "..."; ?></td>
                        <td><?php echo $mm['product_price']; ?>$</td>
                        <td><img src="../<?php echo $mm['product_img']; ?>" class="img-responsive" alt=""></td>
                        <td><a href="basket.php?delete_id=<?php echo $mm['id']; ?>" class="text-danger"><i
                                    class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>

                    <?php
                    $i++;
                }

                ?>
                </tbody>
            </table>
            <br><br>
            <?php
        }
    ?>
    <?php
        if (isset($_GET['delete_id'])){
            $id = $_GET['delete_id'];
            delete_from_basket($id);
        ?>
            <br>
            <div class="alert alert-danger">
                .:: Product was Deleted ::.
            </div>
            <br>
            <center><a href="basket.php">
                    <button class="btn btn-lg btn-danger">Back To Basket</button></a></center>
    <?php
        }
    ?>

</div>





<?php
require_once "footer.php";
?>
