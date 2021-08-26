<?php
    require_once('connection.php');

    if(isset($_POST['website_settings'])){
        $site_data = array(
            $_POST['name'],
            $_POST['mail'],
            $_POST['phone']
        );

        $query = "TRUNCATE TABLE site_settings";
        $result_set = mysqli_query($connection, $query);

        $query = "INSERT INTO site_settings(name, email, phonenumber) VALUES(
            '$site_data[0]',
            '$site_data[1]',
            '$site_data[2]'
        )";   

        $res = mysqli_query($connection, $query);
        if($res){
          echo "<script>alert('Site data updated');</script>";
          $tour_data = null;
          echo "<script>window.location.href='settings.php'</script>";
        }
        else
          echo "<script>Failed to update</script>";
    }
    
?>