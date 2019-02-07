<?php
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/6/2019
 * Time: 1:29 PM
 */
?>
<?php
session_start();
include_once ("includes/db.php");
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM cart, cart_products WHERE cart.cart_id = cart_products.cart_id AND cart.user_id = $user_id AND cart.active = 1";
$get_cart_items = mysqli_query($connection, $query);
$num_cart_items = mysqli_num_rows($get_cart_items);
?>
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="index.php"><img src="assets/img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="shop.php">Dresses</a></li>
                                    <li><a href="shop.php">Blouses &amp; Shirts</a></li>
                                    <li><a href="shop.php">T-shirts</a></li>
                                    <li><a href="shop.php">Rompers</a></li>
                                    <li><a href="shop.php">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="shop.php">T-Shirts</a></li>
                                    <li><a href="shop.php">Polo</a></li>
                                    <li><a href="shop.php">Shirts</a></li>
                                    <li><a href="shop.php">Jackets</a></li>
                                    <li><a href="shop.php">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="shop.php">Dresses</a></li>
                                    <li><a href="shop.php">Shirts</a></li>
                                    <li><a href="shop.php">T-shirts</a></li>
                                    <li><a href="shop.php">Jackets</a></li>
                                    <li><a href="shop.php">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="assets/img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <!--<li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="single-product-details.php">Product Details</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="single-blog.php">Single Blog</a></li>
                                <li><a href="regular-page.php">Regular Page</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>-->
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="includes/search.php" method="post" name="search_form">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit" name="search_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src="assets/img/core-img/heart.svg" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#"><img src="assets/img/core-img/user.svg" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="assets/img/core-img/bag.svg" alt=""> <span><?php echo $num_cart_items; ?></span></a>
            </div>
        </div>

    </div>
</header>
