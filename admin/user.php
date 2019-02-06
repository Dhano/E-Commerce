<!DOCTYPE html>
<html lang="en">

<?php
$page = "user";
include_once ('includes/header.php');
include_once ('includes/db.php');
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
                                <h4 class="card-title ">User List</h4>
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
                                            Phone No
                                        </th>
                                        <th>
                                            Eamil
                                        </th>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $result = getResultWithUser(0);
                                            $row;
                                            $i = 1;
                                            while($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i++;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['user_first_name'] . " " . $row['user_last_name'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['user_phone'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['user_email'];?>
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
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title mt-0"> Supplier</h4>
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
                                            Phone No
                                        </th>
                                        <th>
                                            Eamil
                                        </th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = getResultWithUser(2);
                                        $row;
                                        $i = 1;
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++;?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_first_name'] . " " . $row['user_last_name'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_phone'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_email'];?>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Delivery Boy</h4>
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
                                            Phone No
                                        </th>
                                        <th>
                                            Eamil
                                        </th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = getResultWithUser(3);
                                        $row;
                                        $i = 1;
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++;?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_first_name'] . " " . $row['user_last_name'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_phone'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_email'];?>
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