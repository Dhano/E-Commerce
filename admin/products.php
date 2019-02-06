<!DOCTYPE html>
<html lang="en">

<?php
$page = "products";
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Products</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Stock
                        </th>
                        <th>
                          Color
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Features
                        </th>
                        <th>
                            Seller
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Size
                        </th>

                      </thead>
                      <tbody>
                      <?php
                      $result = getResultOfProduct();
                      $row;
                      $i = 1;
                      while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                              <td>
                                  <?php echo $i++;?>
                              </td>
                              <td>
                                  <?php echo $row['product_name'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_price'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_stock'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_color'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_description'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_features'];?>
                              </td>
                              <td>
                                  <?php echo $row['user_first_name'];?>
                              </td>
                              <td>
                                  <?php echo $row['type'];?>
                              </td>
                              <td>
                                  <?php echo $row['product_size'];?>
                              </td>
                          </tr>
                          <?php
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
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
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <?php
  include_once ('includes/scripts.php');
  ?>
</body>

</html>