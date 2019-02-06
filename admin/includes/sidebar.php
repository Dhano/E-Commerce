
<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li <?php if($page == "dashboard"){?> class="nav-item active" <?php }?>>
                <a class="nav-link" href="index.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li <?php if($page == "user"){?> class="nav-item active" <?php }?>>
                <a class="nav-link" href="user.php">
                    <i class="material-icons">person</i>
                    <p>User</p>
                </a>
            </li>
            <li <?php if($page == "products"){?> class="nav-item active" <?php }?>>
                <a class="nav-link" href="./products.php">
                    <i class="material-icons">content_paste</i>
                    <p>Products</p>
                </a>
            </li>
            <li <?php if($page == "promotions"){?> class="nav-item active" <?php }?>>
                <a class="nav-link" href="promotions.php">
                    <i class="material-icons">content_paste</i>
                    <p>Promotions</p>
                </a>
            </li>
        </ul>
    </div>
</div>