<!doctype html>
<html lang="en">
  <body>
    <div class="container-fluid">
      <div class="row">
        <?php
          include_once("admin_menu.php");
          require_once("connection.php");
        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
          <div class="">
            <h2>Orders</h2>
          </div>

          <div class="table-responsive mt-4">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                <?php
                    $query = 'SHOW COLUMNS FROM orders';
                    $result_set = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($result_set))
                      echo "<th scope='col'>".$row['Field']."</th>";
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = 'SELECT * FROM orders';
                  $result_set = mysqli_query($connection, $query);
                  
                  while($row = mysqli_fetch_array($result_set)){
                    echo "<tr>";
                    echo "<td>".$row['order_id']."</td>";
                    echo "<td>".$row['tour_id']."</td>";
                    echo "<td>".$row['fullname']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['phonenumber']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['date_of_journey']."</td>";
                    echo "<td>".$row['number_of_people']."</td>";
                    echo "</tr>";
                  } 
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>