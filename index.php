<!DOCTYPE html>
<html lang="en-US">

  <?php
    include_once("imports.php");
  ?>

  <body>

    <?php
      include_once("header.php");
      require_once("connection.php");
    ?>
    
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators bg-primary rounded-pill">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider_1.jpg"/>
        </div>

        <div class="carousel-item">
          <img src="images/slider_2.jpg"/>
        </div>

        <div class="carousel-item">
          <img src="images/slider_3.jpg"/>
        </div>

        <div class="carousel-item">
          <img src="images/slider_4.jpg"/>
        </div>

        <div class="carousel-item">
          <img src="images/slider_5.jpg"/>
        </div>

        <div class="carousel-item">
          <img src="images/slider_6.jpg"/>
        </div>
      </div>

      <button class="carousel-control-prev carousel-dark" title="Click or press left arrow" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" title="Click or press right arrow" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div id="what-we-do" class="bg-gradient">
      <div class="container d-flex flex-column">
        <div class="d-flex flex-column align-items-center">
          <div class="my-2 w-75 text-center">
            <h1 class="overflow-hidden">
              What we do
            </h1>
            <div class="row my-3 pt-3">
              <div class="col my-3 border border-1 border-dark bg-dark rounded-pill"></div>
              <div class="col"><img src="icons/globe.png"/></div>
              <div class="col my-3 border border-1 border-dark bg-dark rounded-pill"></div>
            </div>
          </div>
          <div class="w-90 text-center">
            The purpose of this project is to develop a website which allows users to book their tours and travels anywhere anytime.<br/>
            The aim is to deliver a product which eliminates the need of physically going to a locale for to make a booking. 
          </div>
        </div>
      </div>
    </div>

    <div id="featured-tours" class="bg-gradient">
      <div class="container d-flex flex-column">
        <div class="d-flex flex-column align-items-center">
          <div class="my-2 w-75 text-center">
            <h1 class="overflow-hidden">
              Featured Tours
            </h1>
            <div class="row my-3 pt-3">
              <div class="col my-3 border border-1 border-dark bg-dark rounded-pill"></div>
              <div class="col"><img src="icons/globe.png"/></div>
              <div class="col my-3 border border-1 border-dark bg-dark rounded-pill"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">    
      <div class="row mar-bottom">
        <?php
          $query = 'SELECT * FROM tours';
          $result_set = mysqli_query($connection, $query);
          
          while($row = mysqli_fetch_array($result_set)){
            $id = $row['Id'];
            echo '<div class="col-md-4 album">
                    <a href="select_tour.php?tour_id='.$id.'">
                      <div class="image2 img_hover">
                        <img class="img-center img-responsive" src="tour_images/'.$row['Cover'].'" loading="lazy" style="width:100%; height:40%" />
                        <div class="caption">
                          <span class="package-price bg-primary">$'.$row['Cost'].'</span>
                          <div class="bottomelement overflow-hidden">
                            <h5 class="front">'.$row['Name'].'</h5>
                            <div class="days-counter bg-primary">
                              <span>'.$row['Duration'].'&nbsp;Days</span>
                            </div>
                          </div>
                        </div>
                        <div class="hover_wrap"></div>
                      </div>
                    </a>
                  </div>';
          }
        ?>

      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>

  </body>
</html>