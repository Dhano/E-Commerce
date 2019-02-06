<?php
ob_start();
session_start();
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/6/2019
 * Time: 10:47 PM
 */
include_once ("../includes/db.php");
?>

<?php

    if(isset($_POST['sign_in']) || isset($_POST['login_form'])){
        extract($_POST);
        $user_email = mysqli_real_escape_string($connection,$user_email);
        $user_password = mysqli_real_escape_string($connection, $user_password);
        $stay_signed_in = $_POST['stay_signed_in'];
        $query="SELECT * FROM users WHERE user_email='$user_email'";
        $select_user_details=mysqli_query($connection,$query);
        //confirmQuery($select_user_details);

        if($row=mysqli_fetch_assoc($select_user_details)) {
            $db_user_id = $row['user_id'];
            $db_user_email = $row['user_email'];
            $db_user_first_name = $row['user_first_name'];
            $db_hashed_password = $row['user_password'];

            if (password_verify($user_password, $db_hashed_password) && $user_email === $db_user_email) {
                $_SESSION['user_email'] = $db_user_email;
                $_SESSION['user_id'] = $db_user_id;
                $_SESSION['user_first_name'] = $db_user_first_name;

                $date = new DateTime();
                $today = date_format($date, 'Y-m-d');

                if ($stay_signed_in) {
                    $cookie_name = "e_commerce";
                    $user_id_to_login = $row['user_id'];
                    $_id = $user_id_to_login;
                    $cookie_content = $_id;
                    $cookie_time = time() + 86400 * 30;
                    $path = "/";
                    setcookie($cookie_name, $cookie_content, $cookie_time, $path);
                } else {
                    $cookie_name = "e_commerce";
                    $user_id_to_login = $row['user_id'];
                    $_id = $user_id_to_login;
                    $cookie_content = $_id;
                    $cookie_time = time() + 3600;
                    $path = "/";
                    setcookie($cookie_name, $cookie_content, $cookie_time, $path);
                }
                header("Location: ../admin/");
            } else {
                header("Location: ../login_page.php?wrong_pass=true");
            }
        } else{
            header("Location: ../login_page.php?wrong_user=true");
        }
    } else{
        header("../login_page.php");
    }
?>
