<!DOCTYPE html>
<html lang="en-US">

  <?php
    include_once("imports.php");
  ?>

  <body>

    <?php
      include_once("header.php");
      require_once("connection.php");

      error_reporting(E_ALL ^ E_WARNING);

      $id = $_GET['tour_id'];
      $name = $_GET['tour_name'];
    ?>

    <div class="subheader">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subheader-info">
              <h1 class="overflow-hidden">Order Tour</h1>
              <h5 class="overflow-hidden text-white"><?php echo $name; ?></h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9">
          
            <form method="POST" onsubmit="validate()" action="order_tour.php">
              <?php echo "<input type='text' name='tour_id' value='".$id."' style='display: none'>"?>
              <div class="row mt-5">            
                <div class="col-md-6 my-3">
                  <label for="fullname">Full Name *</label>
                  <input type="text" value="" id="fullname" name="name" class="form-control" required>
                </div>
                <div class="col-md-6 my-3">
                  <label for="address">Address *</label>
                  <input type="text" value="" placeholder="City-Pincode" id="address" name="address" class="form-control" required>
                </div>
                <div class="col-md-6 my-3">
                  <label for="phone">Phone Number *</label>
                  <input type="tel" value="" id="phone" name="phone" pattern="[0-9]{10}" class="form-control" required>
                </div>
                <div class="col-md-6 my-3">
                  <label for="email">Email *</label>
                  <input type="email" value="" name="email" id="email" class="form-control" required>
                </div>
                <div class="col-md-6 my-3">
                  <label for="journey_date">Date of Journey *</label>
                  <input type="date" value="" name="journey_date" id="journey_date" class="form-control" min="<?= date('Y-m-d'); ?>" required>
                </div>
                <div class="col-md-6 my-3">
                  <label for="no_of_people">Number of People *</label>
                  <input type="number" value="" name="no_of_people" id="no_of_people" class="form-control" min="1" max="20" required>
                </div>
              </div>

              <div class="text-center">
                  <button type="submit" name="submit" class="bg-success bg-gradient text-white border-0 rounded mt-3 py-2 w-50">Place Order</button>
                </div>
            </form>
          </div>
        
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>

  </body>
</html>


<?php

  if(isset($_POST['submit'])){
    $tour_id = $_POST['tour_id'];
    $order_data = array(
      (mt_rand(100, 999)*mt_rand(1, 77)).date('Y-m-d'),
      $tour_id,
      $_POST['name'],
      $_POST['address'],
      $_POST['phone'],
      $_POST['email'],
      $_POST['journey_date'],
      $_POST['no_of_people']
    );

    $query = "INSERT INTO orders(order_id, tour_id, fullname, address, phonenumber, email, date_of_journey, number_of_people) VALUES(
      '$order_data[0]',
      '$order_data[1]',
      '$order_data[2]',
      '$order_data[3]',
      '$order_data[4]',
      '$order_data[5]',
      '$order_data[6]',
      '$order_data[7]'
    )";

    $res = mysqli_query($connection, $query);
    if($res){
      echo "<script>alert('Tour Added Successfully');</script>";
      $order_data = null;
      
      echo "<script>window.location.href='index.php'</script>";
    }
    else
      echo "<script>alert('Failed to add tour');</script>";
  }
?>