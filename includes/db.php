<?php
/**
 * Created by PhpStorm.
 * User: NIKHIL SHADIJA
 * Date: 2/6/2019
 * Time: 8:55 PM
 */
?>
<?php
    define("HOST", "localhost");
    define("USERNAME", "Nikhil");
    define("PASSWORD", "n20081998");
    define("DB", "ecommerce");

    $connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

    if(!$connection){
        die("Connection Cannot be established");
    }

?>