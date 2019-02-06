<?php
    ob_start();

    if(isset($_COOKIE['e_commerce'])){
        header("Location: admin/index.php");
    } else{
?>

<?php
    include_once ("login_includes/header.php");
?>


<!DOCTYPE html>
<html>
<body id="loginPage">

<div id="preloader">
    <div id="status"> &nbsp; </div>
</div>

<ul class="cb-slideshow" hidden>
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
</ul>

<section class="material-half-bg" hidden>
    <div class="cover"></div>
</section>
<section class="login-content" hidden>

    <div class="login-box" hidden>

        <form class="login-form" id="login_form" action="login_includes/login.php" method="post" name="login_form">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group">
                <label class="control-label">USERNAME</label>
                <input class="form-control" type="text" placeholder="Email" autofocus  name="user_email">
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="user_password">
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox" name="stay_signed_in"><span class="label-text">Stay Signed in</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container" id="sign_in_btn">
<!--                <input type="submit" name="login" value="SIGN IN" class="btn btn-primary btn-block" >-->
                <button class="btn btn-primary btn-block" type="submit" name="sign_in"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>

            <div class="form-group">
                <div id="messages" class="error-container"></div>
            </div>

        </form>


        <form class="forget-form" action="" method="post">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="text" placeholder="Email" name="user_email">
            </div>
            <div class="form-group btn-container">
                <button name="forgot_btn" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
            </div>
        </form>

    </div>
</section>

<?php
    include_once ("login_includes/footer.php");
?>

</body>
</html>
<?php }
        ?>