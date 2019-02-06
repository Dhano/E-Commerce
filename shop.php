<!DOCTYPE html>
<html lang="en">

<?php
    include_once ("includes/db.php");
    include_once ("includes/header.php");
?>

<body>
    <!-- ##### Header Area Start ##### -->
    <?php
        include_once ("includes/navbar.php");
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <?php
        include_once ("includes/right-cart.php");
    ?>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">

                                    <?php
                                        $query = "SELECT product_id, user_first_name, type, product_name, product_price, product_stock, product_color, product_description, product_features, product_size FROM product JOIN seller JOIN users JOIN product_type where product.seller_id = seller.seller_id and seller.user_id = users.user_id  AND product.product_type_id = product_type.product_type_id";
                                        $select_products_query = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($select_products_query) > 0){
                                    ?>

                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span><?php echo mysqli_num_rows($select_products_query); ?></span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php while($row = mysqli_fetch_assoc($select_products_query)) {
                                    extract($row);
                                ?>
                                <!-- Single Product -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="assets/img/product-img/product-1.jpg" alt="">
                                            <!-- Hover Thumb -->
                                            <img class="hover-img" src="assets/img/product-img/product-2.jpg" alt="">

                                            <!-- Product Badge -->
                                            <div class="product-badge offer-badge">
                                                <span>-10%</span>
                                            </div>
                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span><?php echo $product_description; ?></span>
                                            <a href="single-product-details.php?product_id=<?php echo $product_id; ?>">
                                                <h6><?php echo $product_name; ?></h6>
                                            </a>
                                            <p class="product-price"><span class="old-price"> Rs. <?php echo ($product_price + $product_price * 0.1); ?></span> Rs. <?php echo $product_price; ?></p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
        include_once ("includes/footer.php");
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <?php
        include_once ("includes/scripts.php");
    ?>

</body>

</html>