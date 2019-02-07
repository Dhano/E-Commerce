<?php

/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/6/2019
 * Time: 1:31 PM
 */
?>
<?php
    include_once ("functions.php");
?>


<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="assets/img/core-img/bag.svg" alt=""> <span><?php echo $num_cart_items; ?></span></a>
    </div>

    <div class="cart-content d-flex">



        <!-- Cart List Area -->
        <div class="cart-list">
            <!-- Single Cart Item -->

            <?php
                $sum = 0;
                while($row_details = mysqli_fetch_assoc($get_cart_items)) {
                        $product_details = getProduct($row_details['product_id']);
                        $product = mysqli_fetch_assoc($product_details);
                        extract($product);
                    ?>

                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <?php
                                $result_array = getProductImg($product_id);
                                $result = mysqli_fetch_assoc($result_array);
                                echo '<img class="cart-thumb" src="data:image/jpeg;base64,'.base64_encode( $result['product_image'] ).'" alt="" />';
                            ?>
<!--                            <img src="assets/img/product-img/product-1.jpg" class="cart-thumb" alt="">-->
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                                <span class="product-remove" data-product-id="<?php echo $product_id; ?>"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge"><?php echo $product_name; ?></span>
                                <h6><?php echo $product_description; ?></h6>
                                <p class="size"><?php echo $product_size; ?></p>
                                <p class="color"><?php echo $product_color; ?></p>
                                <p class="price">Rs. <?php echo $product_price; ?></p>
                            </div>
                        </a>
                    </div>
                    <?php
                    $sum+=$product_price;
                }
            ?>


        </div>

        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span> Rs. <?php echo $sum; ?></span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-10%</span></li>
                <li><span>total:</span> <span>Rs. <?php echo ($sum - $sum * 0.1); ?></span></li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.php" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
