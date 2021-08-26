<!DOCTYPE html>
<html lang="en-US">

  <?php
    include_once("imports.php");
  ?>

  <body>

    <?php
      require_once("header.php");

      error_reporting(E_ALL ^ E_WARNING);
      session_start();
      if($_SESSION['admin']){
        echo "<script>
                alert('Already logged in.');
                window.location.href='dashboard.php';
              </script>";
      }
      else
    ?>

    <div class="subheader">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subheader-info">
              <h1 class="overflow-hidden">Login</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="d-flex flex-column justify-content-center align-items-center">
          <form method="POST" action="validate_login.php">
          <div class="mt-5">            
            <div class="my-3">
              <label for="useremail">Email *</label>
              <input type="email" value="" name="useremail" id="usereemail" class="form-control" required>
            </div>
            
            <div class="my-3 overflow-hidden">
              <label for="password">Password *</label>
              <input type="password" value="" name="userpassword" id="userpassword" class="form-control" required>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" value="Login" name="login" class="bg-success bg-gradient text-white border-0 rounded mt-3 py-2 w-100"/>
          </div>
        </form>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>

  </body>
</html>