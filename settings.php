<!doctype html>
<html lang="en">
  <body>
    <div class="container-fluid">
      <div class="row">
        <?php
          include_once("admin_menu.php");
          include_once("connection.php");

          $query = 'SELECT * FROM site_settings';
          $result_set = mysqli_query($connection, $query);
          $row = mysqli_fetch_array($result_set);

        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
          <div class="">
            <h2>Settings</h2>
          </div>

          <div class="container my-5">
            <div class="row justify-content-center">
              <div class="col-md-12">
          
                <form method="POST" action="site_settings.php">
                  <h4>Website</h4>
                  <div class="row mt-3">            
                    <div class="col-md-4 my-1">
                      <label for="sitename">Name *</label>
                      <input type="text" value="<?php echo $row['name']; ?>" id="sitename" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-4 my-1">
                      <label for="siteemail">Email *</label>
                      <input type="email" value="<?php echo $row['email']; ?>" name="mail" id="siteemail" class="form-control" required>
                    </div>
                    <div class="col-md-4 my-1">
                      <label for="sitephone">Phone Number *</label>
                      <input type="tel" value="<?php echo $row['phonenumber']; ?>" id="sitephone" name="phone" pattern="[0-9]{10}" class="form-control" required>
                    </div>
                    <div class="col-md-4 my-1">
                      <label for="submit"></label>
                      <input type="submit" value="Save" name="website_settings" class="form-control btn-success bg-gradient border-0 w-50" required>
                    </div>
                  </div>
                </form>
                <hr/>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>