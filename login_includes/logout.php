<?php
ob_start();
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/7/2019
 * Time: 12:17 AM
 */
?>

<?php
    session_start();
    $cookie_name = "e_commerce";
    $user_id_to_logout = $_SESSION['user_id'];
    $_id = $user_id_to_logout;
    $cookie_content = $_id;
    $cookie_time = time() - 86400 * 30;
    $path = "/";
    setcookie($cookie_name, $cookie_content, $cookie_time, $path);

    $_SESSION['user_id'] = "";
    $_SESSION['user_email'] = "";
    $_SESSION['user_role_id'] = "";
    session_destroy();

    header("Location: ../index.php?show_notification=1&logout=1");
?>
