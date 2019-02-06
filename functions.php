<?php
/**
 * Created by PhpStorm.
 * User: jaynam
 * Date: 6/2/19
 * Time: 7:58 PM
 */

include_once ("includes/db.php");

function getProduct($product_id){
    global $connection;
    $query="SELECT product.product_id,user_first_name,type,product_name,product_price, product_stock, product_color, product_description, product_features, product_size,AVG(product_rating_value) as rating FROM product JOIN seller JOIN users JOIN product_type JOIN product_rating where product.seller_id = seller.seller_id and seller.user_id = users.user_id AND product.product_type_id = product_type.product_type_id and product.product_id = product_rating.product_id and product.product_id = $product_id";
    $get_query = mysqli_query($connection, $query);
    return $get_query;
}

function getProductImg($product_id){
    global  $connection;
    $query = "SELECT product_image FROM product_images JOIN product where product_image.product_id = product.product_id and product.product_id = $product_id";
    $get_query = mysqli_query($connection, $query);
    return $get_query;
}
?>