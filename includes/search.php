<?php
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/7/2019
 * Time: 11:31 AM
 */
?>
<?php
    if(isset($_POST['search_btn']) || isset($_POST['search_form']) ){
        $search_keyword = $_POST['search'];

        $search_query = "SELECT product_id, user_first_name, type, product_name, product_price, product_stock, product_color, product_description, product_features, product_size FROM product JOIN seller JOIN users JOIN product_type where product.seller_id = seller.seller_id and seller.user_id = users.user_id  AND product.product_type_id = product_type.product_type_id AND product.product_name LIKE '$search_keyword' ORDER BY product.product_type_id";
    }
?>
