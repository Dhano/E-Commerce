<!DOCTYPE html>
<html lang="en">

<?php
if(isset($_GET['product_id'])){
    include_once ('functions.php');
    $result = getProduct($_GET['product_id']);
    $row  = mysqli_fetch_assoc($result);
    $res = getProductImg($_GET['product_id']);
?>

<?php
include_once("includes/header.php");
?>

<body>
<!-- ##### Header Area Start ##### -->
<?php
include_once("includes/navbar.php");
?>
<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
<?php
include_once("includes/right-cart.php");
?>
<!-- ##### Right Side Cart End ##### -->


<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div class="product_thumbnail_slides owl-carousel">
            <?php
                while($resul=mysqli_fetch_assoc($res)) {
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $resul['product_image'] ).'" class="img-responsive img-fluid" style="max-width: 1000px;height:auto";max-height:980px;git />';
                }
            ?>
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span><?php echo $row['user_first_name'];?></span>
        <a href="cart.php">
            <h2><?php echo $row['product_name'];?></h2>
        </a>
        <p class="product-price"><span class="old-price"> Rs. <?php echo ($row['product_price'] + $row['product_price'] * 0.1); ?></span> Rs. <?php echo $row['product_price']; ?></p>
        <p class="product-desc"><?php echo $row['product_description'];?></p>

        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            <!-- Select Box -->
            <p><?php echo $row['product_size'];?></p>
            <p><?php echo $row['product_color'];?></p>
            <p>Rating :- <?php echo round($row['rating'],1);?></p>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<?php
include_once("includes/footer.php");
?>
<?php
}
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <?php
        include_once ("includes/scripts.php");
    ?>

</body>

</html>