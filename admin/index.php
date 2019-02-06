<!DOCTYPE html>
<html lang="en">

<?php
$page = "dashboard";
    include_once ('includes/header.php');
    include_once ('functions.php');
?>
<body class="dark-edition">
  <div class="wrapper ">
    <?php
        include_once ('includes/sidebar.php');
    ?>
    <div class="main-panel">
        <?php
            include_once ('includes/navbar.php');
        ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>

                </div>
                <div class="card-body">
                  <h4 class="card-title">Sales in last 7 days</h4>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-lg-4">
                  <div class="card card-chart">
                      <div class="card-body">
                          <h3 class="card-title">Total No of Customer</h3>
                          <p class="card-category"><?php echo getCountOfCust(0);?></p>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-lg-4">
                  <div class="card card-chart">
                      <div class="card-body">
                          <h3 class="card-title">Total No of Seller</h3>
                          <p class="card-category"><?php echo getCountOfCust(2);?></p>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-lg-4">
                  <div class="card card-chart">
                      <div class="card-body">
                          <h3 class="card-title">Total No of Products</h3>
                          <p class="card-category"><?php echo getCountOfProducts();?></p>
                      </div>
                  </div>
              </div>


          </div>
        </div>
      </div>
        <?php
            include_once ('includes/footer.php');
        ?>
      <script>
        const x = new Date().getFullYear();
        /*let date = document.getElementById('date');*/
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>

  <?php
    include_once ('includes/scripts.php');
  ?>
</body>

</html>