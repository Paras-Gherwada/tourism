<?php
    require_once("connection.php");

    if(isset($_POST['delete_tour'])){
        $id = $_POST['delete_tour'];

        $query = "DELETE FROM tours WHERE Id='$id'";
        $res = mysqli_query($connection, $query);

        if($res)
            echo "<script>alert('Tour deleted');</script>";
        else
            echo "<script>alert('Failed to delete tour');</script>";

        echo "<script>window.location.href='tours.php'</script>";
    }
?>