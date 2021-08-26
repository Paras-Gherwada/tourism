<!DOCTYPE html>
<html lang="en-US">

  <?php
    include_once("imports.php");
  ?>

  <body>

    <?php
      include_once("header.php");
      require_once("connection.php");

      $tour_id = $_GET['tour_id'];
      $query = "SELECT * FROM tours WHERE Id = '$tour_id'";
      $result_set = mysqli_query($connection, $query);
      $row = mysqli_fetch_array($result_set);
      $name = $row['Name'];
    ?>

    <div class="subheader">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subheader-info">
              <h1 class="overflow-hidden"><?php echo $name; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class=" my-5 d-md-flex justify-content-center flex-md-equal">
        <div class="text-center text-white overflow-hidden">
          <div>
            <?php echo '<img src="tour_images/'.$row['Cover'].'" width="100%"/>'; ?>
          </div>
        </div>

        <div class="w-75 mx-4 overflow-hidden">
          <ul class="pt-2 px-2 w-100">
            <li class="my-1">
              <img src="icons/clock.svg" class="mx-1">
              <strong>Duration:</strong>
              &nbsp;<?php echo $row['Duration']; ?>&nbsp;Days
            </li>
            <li class="my-1">
              <img src="icons/map-marker.svg" class="mx-1">
              <strong>Location:</strong>
              &nbsp;<?php echo $row['Location']; ?>
            </li>
            <li class="my-1">
              <img src="icons/price-tag.svg" class="mx-1">
              <strong>Price:</strong>
              &nbsp;$<?php echo $row['Cost']; ?>
            </li>
            <li class="my-3">
              <?php
                echo '<a class="btn bg-primary bg-gradient text-white border-0 rounded py-2 px-5" href="order_tour.php?tour_id='.$tour_id.'&tour_name='.$name.'">';
                echo 'Book Now';
                echo '</a>';
              ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="container" id="icon-grid">
        <h2 class="border-bottom overflow-hidden">Tour Description</h2>
        <div class="row g-4 py-4">

          <div class="col d-flex align-items-start">
            <div>
              <p>
                <?php echo $row['Description']; ?>
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>

  </body>
</html>