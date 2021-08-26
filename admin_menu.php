<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="icons/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Tourism Website - Admin</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/admin_menu.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
      require_once('connection.php');
      $query = "SELECT name FROM site_settings";
      $result_set = mysqli_query($connection, $query);
      $row = mysqli_fetch_array($result_set);
      session_start();
      if(!$_SESSION['admin']){
        echo "<script>alert('You are not logged in');</script>";
        echo "<script>window.location.href='login.php'</script>";
      }
    ?>
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 text-center px-3" href="index.php" title="Go to index page">
        <strong><?php echo $row['name']; ?></strong>
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky">
            <h6 class="sidebar-heading mb-1">
              <div class="navbar-nav w-100">
                <div class="nav-item text-nowrap">
                  <a class="nav-link py-3 ps-3 bg-dark w-100 text-white fs-6" href="#">
                    <img src="icons/person-check.svg" class="me-1 mb-1">
                    <strong style="text-transform: capitalize;"><?php echo $_SESSION['admin'];?></strong>
                  </a>
                </div> 
              </div>
            </h6>

            <ul class="nav flex-column mt-3">
              <li class="nav-item">
                <a class="nav-link hvr-change-background" href="tours.php">
                  <img src="icons/send.svg" class="me-1 mb-1">
                  Tours
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-change-background" href="orders.php">
                  <img src="icons/file.svg" class="me-1 mb-1">
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-change-background" href="settings.php">
                  <img src="icons/settings.svg" class="me-1 mb-1">
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading mt-4 mb-1">
              <div class="navbar-nav w-100">
                <div class="nav-item text-nowrap">
                  <a class="nav-link py-3 ps-3 bg-danger w-100 text-white fs-6" href="logout.php">
                    <img src="icons/box-arrow-right.svg" class="me-1 mb-1">
                    <strong style="text-transform: capitalize;">Logout</strong>
                  </a>
                </div> 
              </div>
            </h6>
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>