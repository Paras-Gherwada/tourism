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
          <div class="w-100 d-flex justify-content-between">
            <h2>Tour List</h2>
            <button type="button" class="btn bg-success text-white mx-5" onclick="location.href='add_tour.php'">
              <img src="icons/plus-lg.svg" class="me-1 mb-1" width="14px" height="14px"/>
              Add Tour
            </button>
          </div>

          <div class="table-responsive mt-4">
            <form action="delete_tour.php" method="POST">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <?php
                      $query = 'SHOW COLUMNS FROM tours';
                      $result_set = mysqli_query($connection, $query);
                      while($row = mysqli_fetch_array($result_set))
                        echo "<th scope='col'>".$row['Field']."</th>";
                    ?>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                      $query = 'SELECT * FROM tours';
                      $result_set = mysqli_query($connection, $query);
                      
                      while($row = mysqli_fetch_array($result_set)){
                        echo "<tr>";
                        echo "<td>".$row['Id']."</td>";
                        echo "<td>".$row['Name']."</td>";
                        echo "<td>".$row['Cost']."</td>";
                        echo "<td>".$row['Duration']."</td>";
                        echo "<td>".$row['Location']."</td>";
                        echo "<td><img width='200px' class='img-fluid' src='tour_images/".$row['Cover']."'/></td>";
                        echo "<td class='w-25'>".$row['Description']."</td>";
                        echo "<td class='text-end'>
                                <button class='border-0 me-1 bg-transparent' title='Delete' name='delete_tour' value=".$row['Id'].">
                                  <img src='icons/x-lg.svg'/>
                                </button>
                              </td>";
                        echo "</tr>";
                      } 
                    ?>
                </tbody>
              </table>
            </form>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
