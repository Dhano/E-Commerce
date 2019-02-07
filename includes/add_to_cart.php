<?php
ob_start();
session_start();

include_once ("db.php");
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/7/2019
 * Time: 9:50 AM
 */
?>
<?php
    if(isset($_GET['product_id']) && isset($_GET['url'])){
        $product_id = $_GET['product_id'];
        $url = $_GET['url'];
        $user_id = $_SESSION['user_id'];
        $get_user_active_cart_query = "SELECT * FROM cart WHERE user_id = $user_id AND active = 1";
        $get_active_carts = mysqli_query($connection, $get_user_active_cart_query);

        if($active_cart_row = mysqli_fetch_assoc($get_active_carts)){
            $active_cart_id = $active_cart_row['cart_id'];
        } else{
            $add_user_cart_query = "INSERT INTO cart(user_id, active) VALUES($user_id, 1)";
            $add_user_cart = mysqli_query($connection, $add_user_cart_query);
            //die(mysqli_error($connection));
            $active_cart_id = mysqli_insert_id($connection);
        }
        $add_to_cart_query = "INSERT INTO cart_products(cart_id, product_id, cart_products_quantity) VALUES($active_cart_id, $product_id, 1)";
        mysqli_query($connection, $add_to_cart_query);
        header("Location: $url");
    } else if(isset($_GET['remove_from_cart'])) {
        $product_id = $_GET['remove_from_cart'];
        $user_id = $_SESSION['user_id'];

        $get_user_active_cart_query = "SELECT * FROM cart WHERE user_id = $user_id AND active = 1";
        $get_active_carts = mysqli_query($connection, $get_user_active_cart_query);

        if ($active_cart_row = mysqli_fetch_assoc($get_active_carts)) {
            $active_cart_id = $active_cart_row['cart_id'];
            $remove_from_cart = "DELETE FROM cart_products WHERE cart_id = $active_cart_id AND product_id = $product_id";
            mysqli_query($connection, $remove_from_cart);
            echo mysqli_error($connection);
        }
    }
?>
