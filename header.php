<?php

  require_once('connection.php');
  $query = "SELECT * FROM site_settings";
  $result_set = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result_set);
  $name = $row['name'];
  $mail = $row['email'];
  $phone = $row['phonenumber'];

?>

<div id="topbar" class="bg-primary bg-gradient">
  <div class="container d-flex flex-wrap">
    <div class="d-flex mx-5">
      <img src="icons/envelope-fill.svg"/>
      <?php echo '<a href="mailto:'.$mail.'" class="nav-link link-dark px-2 text-white fs-6">'.$mail.'</a>'; ?>
    </div>
    <div class="d-flex mx-5">
      <img src="icons/telephone-fill.svg"/>
      <?php echo '<a href="tel:'.$phone.'" class="nav-link link-dark px-2 text-white fs-6">+91'.$phone.'</a>'; ?>
    </div>
  </div>
</div>

<nav id="navbar" class="mb-4 border-bottom border-primary bg-gradient bg-light">
  <div class="container-fluid d-flex flex-wrap justify-content-center">
    <a href="index.php" class="mx-5 d-flex align-items-center mb-lg-0 me-lg-auto text-dark text-decoration-none">
      <img src="images/logo.png" style="width:57px;"/>
      <span class="mx-3">
        <strong>
          <?php echo $row['name']; ?>
        </strong>
      </span>
    </a>
    <div class="col-12 col-lg-auto mb-lg-0">
      <ul class="nav me-auto mt-2">
        <li class="nav-item">
          <a href="index.php" class="nav-link link-dark px-2 mx-3 hvr-underline-from-left">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link link-dark px-2 mx-3 hvr-underline-from-right">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>