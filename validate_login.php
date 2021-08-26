<?php
    require_once("connection.php");
    if(isset($_POST['login'])){
        $email = $_POST['useremail'];
        $password = $_POST['userpassword'];
    }

    
    $query = "SELECT name, password FROM admin WHERE email = '$email'";
    $result_set = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result_set);

    if(password_verify($password, $row['password'])){
        session_start();
        $_SESSION['admin'] = $row['name'];
        header("Location: tours.php");
    }
    else{
        echo    "
                    <script>
                        alert('Invalid login details');
                        window.location.href='login.php';
                    </script>
                ";
    }
?>