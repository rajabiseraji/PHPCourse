
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
    if (isset($_POST['buy'])){
        $username=$_SESSION['username'];
        if (isset($_POST['products'])){
            foreach ($_POST['products'] as $user_products){
                add_to_basket($username,$user_products);
            }
        }
    ?>
    <div class="alert alert-success fade in">
        Products added to <a href="Basket.php">Basket</a> was successful</div>
    <?php
        }
        ?>
</div>
<div class="new-product">


    <form action="shop.php" method="post">
        <?php
        $tt = get_all_products();
        while($product = mysqli_fetch_assoc($tt)){ ?>
            <div class="col-md-4 col-sm-4">
                <div class="product shadow-around">
                    <figure>
                        <a href="#"><img src="../<?php echo $product['product_img']; ?>" alt="" class="img-responsive"></a>
                        <figcaption>

                        </figcaption>
                    </figure>
                    <div class="product-content">
                        <h2><a href="#"><?php echo $product['product_name']; ?></a></h2>
                        <div class="color-op">
                            <p class="text-justify"><?php echo html_entity_decode($product['product_desc']); ?></p>
                        </div>
                        <span class="price"><?php echo $product['product_price']; ?>$</span>
                        <span class="product-buy"><input type="checkbox" name="products[]" value="<?php echo $product['id']; ?>" /></span>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>





        <center><input type="submit" class="btn btn-lg btn-success" value="Add to My Basket" name="buy" ></center>
    </form>

</div>




<?php


$nofooter=true;
require_once "footer.php";
?>
<script>
    $(document).ready(function() {
        document.getElementById('foooooter').style.display='none';
    });
</script>