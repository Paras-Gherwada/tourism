<!doctype html>
<html lang="en">
  <body>
    <div class="container-fluid">
      <div class="row">
        <?php
          include_once("admin_menu.php");
        ?>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
          <div class="">
            <h2>Add New Tour</h2>
          </div>

          <div class="container my-5">
            <div class="row justify-content-center">
              <div class="col-md-12">
          
                <form method="POST" action="insert_tour.php">
                  <div class="row mt-3">            
                    <div class="col-md-4 my-2">
                      <label for="tourname">Name *</label>
                      <input type="text" value="" name="name" id="tourname" class="form-control" required>
                    </div>
                    <div class="col-md-4 my-2">
                      <label for="tourcost">Cost *</label>
                      <input type="number" value="" name="cost" id="tourcost" class="form-control" min="100" max="5000" required>
                    </div>
                    <div class="col-md-4 my-2">
                      <label for="tourduration">Duration *</label>
                      <input type="number" value="" name="duration" id="tourduration" class="form-control" min="5" max="20" required>
                    </div>
                    <div class="col-md-4 my-2">
                      <label for="tourlocation">Location *</label>
                      <input type="text" value="" name="location" id="tourlocation" class="form-control" required>
                    </div>
                    <div class="col-md-4 my-2">
                      <label for="tourimage">Cover Image *</label>
                      <input type="file" value="" name="cover" id="tourimage" class="form-control" required>
                    </div>
                    <div class="col-md-12 my-2">
                      <label for="tourdescription">Description *</label>
                      <textarea name="description" id="tourdescription" rows="6" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-4 my-2">
                      <label for="submit"></label>
                      <input type="submit" name="add" value="Add" class="form-control btn-success bg-gradient border-0 w-50 py-2" required>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>

    </div>
  </body>
</html>