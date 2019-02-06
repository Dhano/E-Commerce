<?php
/**
 * Created by PhpStorm.
 * User: jaynam
 * Date: 6/2/19
 * Time: 7:58 PM
 */

include_once ("includes/db.php");

    function getResultWithUser($type){
        global $connection;
        $query = "SELECT * FROM users WHERE user_type_id= $type";
        $get_query = mysqli_query($connection, $query);
        return $get_query;
    }

    function getResultOfProduct(){
        global $connection;
        $query = "SELECT product_id,user_first_name,type,product_name,product_price, product_stock, product_color, product_description, product_features, product_size FROM product JOIN seller JOIN users JOIN product_type where product.seller_id = seller.seller_id and seller.user_id = users.user_id AND product.product_type_id = product_type.product_type_id";
        $getResultOfProduct_query = mysqli_query($connection, $query);
        return $getResultOfProduct_query;
        }

    function getCountOfCust($type){
        global $connection;
        $query = "SELECT count(*) as user_count FROM users WHERE user_type_id= $type";
        $get_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($get_query);
        return $row['user_count'];
    }

    function getCountOfProducts(){
        global $connection;
        $query = "SELECT count(*) as product_count FROM product";
        $get_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($get_query);
        return $row['product_count'];
    }

    if(isset($_GET['getProductOfLastWeek'])){
        getProductOfLastWeek();
    }
    function getProductOfLastWeek(){
        global $connection;
        date_default_timezone_set('Asia/Kolkata');
        //$date = date('Y-m-d', time());
        $res = array();
        for($i=0;$i<7;$i++){
            $date = date('Y-m-d',strtotime("-" . $i . " days"));
            $query = "SELECT count(*) as order_count from orders where created_at like '%$date%'";
            $get_query = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($get_query);
            array_push( $res, $row['order_count']);
        }
        echo json_encode($res);
    }

?>