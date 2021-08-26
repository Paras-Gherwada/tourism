<?php
  require_once("connection.php");

  if(isset($_POST['add'])){
    $tour_data = array(
      (mt_rand(100, 999)*mt_rand(1, 99)).date('Y-m-d'),
      $_POST['name'],
      $_POST['cost'],
      $_POST['duration'],
      $_POST['location'],
      $_POST['cover'],
      $_POST['description']
    );

    $tour_data[6] = str_replace("'","",$tour_data[6]);
    $tour_data[6] = str_replace('"','',$tour_data[6]);

    $query = "INSERT INTO tours(Id, Name, Cost, Duration, Location, Cover, Description) VALUES(
      '$tour_data[0]',
      '$tour_data[1]',
      '$tour_data[2]',
      '$tour_data[3]',
      '$tour_data[4]',
      '$tour_data[5]',
      '$tour_data[6]'
    )";

    $res = mysqli_query($connection, $query);
    if($res){
        echo "<script>Tour Added Successfully</script>";
        $tour_data = null;
        echo "<script>window.location.href='tours.php'</script>";
    }
    else{
        echo "<script>Failed to add tour</script>";
        echo "<script>window.location.href='add_tour.php'</script>";
    }
  }
?>