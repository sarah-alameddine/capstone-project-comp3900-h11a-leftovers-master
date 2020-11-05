<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../../private_html/classes/MovieBuilder.php');

if (isset($_GET['id'])) {

    $mb = new MovieBuilder();
    $movie = $mb->get_movie_by_id($_GET['id']);
    if ($movie === FALSE) {
        echo("Movie not found");
        exit();
    } else if ($movie === DATABASE_ERROR) {
        echo("An internal error occured");
        exit();
    }

} else {
    echo("Movie not found");
    exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/moviePage.css">

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <title>FilmFinity</title>
  </head>
  <body>

    <!-- Nav bar-->
    <div class="row" style="margin-bottom: 1%">
      <?php require_once(__DIR__ . '/../../private_html/html-templates/global/nav-2.php'); ?>
    </div>

    <!------------------------ TITLE OF MOVIE ---------------------->
    <div class="pt-5">
    <h1 class="display-4" style="font-family: 'Vollkorn', serif;text-align: center;"><?php echo($movie->get_title()); ?></h1>
    </div>
    <div class="container" style="margin-bottom: 60px;">
      <h1><!-- ADD SOME SPACE HERE --></h1>

      <div class="row">
      <!------------------------ LEFT SECTION ---------------------------------------------------->
        <!-- Movie poster / rating / wishlist -->
        <!-- class="my-3" - changes the spacing of the elements -->
        <div  class="col-md-3 " align="center">
        <div style="width: 200px;height:300px;">
          <!-- <img class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:300px;height:400px;"> -->
          <img id="image1" class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:100%;height:100%;object-fit:contain;">
          </div>
            <div class="my-3">
            <button type="submit" class="btn btn-secondary">ADD TO WISHLIST</button>
            </div>
            <!-- WOULD ANIKET BE ABLE TO CONVERT THE MOVIE RATING INTO STARS -->
            <h4>Movie Rating: <?php echo($movie->get_average()); ?>/5</h4>
            <!--<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>-->
            
        </div>
        <!------------------------ MIDDLE SECTION ---------------------------------------------------->
        <!-- Movie Description -->
        <!-- <div class="col-sm-6" style="background-color:lavenderblush;"> -->
        <div class="col-md-6">
          <!-- <div class="mt-3"> -->
            <!-- <h1 align="center" class="display-4" style="font-family: 'Staatliches', cursive;"><?php echo($movie->get_title()); ?></h1> -->
          <!-- </div> -->
          <!-- <h2>Synopsis</h2> -->
          <div class="pt-5">
          <p style="font-family: 'Montserrat', sans-serif;"><?php echo($movie->get_description()); ?></p>
          <h4>Genre(s):</h4>
          <p><?php echo($movie->get_genre()); ?></p>

          <h4>Director(s):</h4>
          <p><?php echo($movie->get_director()); ?></p>

          <h4>Cast:<h4>
            <!-- TODO ADD THE CAST FOR BACKEND -->
          <p></p>
          </div>

          <!-- Trailer
          <a href="#demo" class="btn btn-secondary" data-toggle="collapse">Trailer</a>
          <div id="demo" class="collapse">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="mt-3" width="560" height="315" src="https://www.youtube.com/embed/2AUmvWm5ZDQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>-->

          <!-- Review section -->
          <div class="pt-5">
            <h4>Reviews:</h4>
          </div>
          <hr style="height:1px;border-width:0;background-color:#6C757D">
          <!-- STAR RATING SECTION -->
          <h4 style="color:#F2F2F2;">Add your own review and rating:</h4>
          <div class="pt-1">
            <!-- TODO BACKEND NEEDED FOR COMMENT -->
            <!-- https://stackoverflow.com/questions/40870635/star-rating-system-html -->
            <form method="POST" action="post-review.php">
                <!--<div class="py-2">
                  <div class="stars">
                    <form action="">
                      <input class="star star-5" id="star-5" type="radio" name="star"/>
                      <label class="star star-5" for="star-5"></label>
                      <input class="star star-4" id="star-4" type="radio" name="star"/>
                      <label class="star star-4" for="star-4"></label>
                      <input class="star star-3" id="star-3" type="radio" name="star"/>
                      <label class="star star-3" for="star-3"></label>
                      <input class="star star-2" id="star-2" type="radio" name="star"/>
                      <label class="star star-2" for="star-2"></label>
                      <input class="star star-1" id="star-1" type="radio" name="star"/>
                      <label class="star star-1" for="star-1"></label>
                    </form>
                  </div>
                </div>-->

                <h4>Rating (1-5): </h4>
                <input type="number" id="rating" name="rating" min="1" max="5" value="1">

                <textarea style="margin-top:5px;" class="form-control" rows="3" name="comment" placeholder="Enter your review"></textarea>
                 <input type="hidden" name="movie_id" value="<?php echo($movie->get_id()); ?>">
                <!-- <button type="button" style="margin-top:10px;margin-left:5px;" class="btn btn-secondary">Submit Review</button> -->
                <input type="submit">
          </form>


          </div>
          <hr style="height:1px;border-width:0;background-color:#03D8A9">

          <?php
              $reviews = $movie->get_reviews();
              foreach ($reviews as $review) {
          ?>
                  <div>
                    <!-- <div>
                      <p><small><strong><?php echo($review->get_username()); ?></strong> - <?php echo($review->get_post_date()); ?><p id="reviewRating">>ddddd</p></small></p>
                    </div>     -->
                  <div style="overflow: hidden;">
                    <p style="float: left;"><small><strong><?php echo($review->get_username()); ?></strong> - <?php echo($review->get_post_date()); ?></small></p>
                    <p style="float: left;" id="reviewRating">- </p>
                  </div>
                    <p><?php echo($review->get_comment()); ?></p>
                  </div>
          <?php
              }
          ?>




          <!-- TODO PAGNATION START -->
          <!--
          <form action="">
          <div class="pagination p1 justify-content-center">
            <ul>
              <a href="#"><li><</li></a>
              <a class="is-active" href="#"><li>1</li></a>
              <a href="#"><li>2</li></a>
              <a href="#"><li>3</li></a>
              <a href="#"><li>4</li></a>
              <a href="#"><li>5</li></a>
              <a href="#"><li>6</li></a>
              <a href="#"><li>></li></a>
            </ul>
          </div>
          </form>
          -->

       <!-- TODO PAGNATION END -->
       
        </div>
        
        <!------------------------ RIGHT SECTION ---------------------------------------------------->
        <!-- Movie recommendation -->
        <!-- style="border-radius: 12px;border: 2px solid red;" -->
        <div class="col-md-3 pt-5 pl-5  sticky-left row d-flex justify-content-center text-center" >
          <!-- <table id="recommendation"><tr><th> -->
          <div id="rec">
          <h4 style="color: #F2F2F2";>Movie Recommendation </h4>
          <hr style="height:1px;border-width:0;background-color:#6C757D">
          <!-- TODO ADD THE IF STATEMENT HERE!!!!!!!!!!!!!!!! -->
          <div class="card-img-top d-flex align-items-center" >
                <div class="pl-5 " >
                  <!-- TODO ADD THE LINK TO THE MOVIE PAGE IN THE 'HREF' AND IN THE 'PHP' SECTION BELOW  -->
                  <a href="ADD HERE MOVIEPAGE LINK">
                    <img #image1 class="mt-3"src="<?php echo($movie->get_image_path()); ?>" alt="movieposter"  style="width: 80px;height:100px;"> 
                  </a>
                </div>
                  <p class="pl-2" ><a href="ADD HERE MOVIEPAGE LINK">Movie 1</a></p>
              </div>

              <div class="card-img-top d-flex align-items-center ">
              <div class="pl-5" >
                  <!-- TODO ADD THE LINK TO THE MOVIE PAGE IN THE 'HREF' AND IN THE 'PHP' SECTION BELOW  -->
                  <a href="ADD HERE MOVIEPAGE LINK">
                    <img #image1 class="mt-3"src="<?php echo($movie->get_image_path()); ?>" alt="movieposter"  style="width: 80px;height:100px;"> 
                  </a>
                  </div>
                  <p class="pl-2"><a href="ADD HERE MOVIEPAGE LINK">Movie 2</a></p>
              </div>

              <div class="card-img-top d-flex align-items-center">
                  <div class="pl-5">
                    <!-- TODO ADD THE LINK TO THE MOVIE PAGE IN THE 'HREF' AND IN THE 'PHP' SECTION BELOW  -->
                    <a href="ADD HERE MOVIEPAGE LINK">
                      <img #image1 class="mt-3"src="<?php echo($movie->get_image_path()); ?>" alt="movieposter"  style="width: 80px;height:100px;"> 
                    </a>
                  </div>
                  <p class="pl-2"><a href="ADD HERE MOVIEPAGE LINK">Movie 3</a></p>
              </div>
              <!-- TODO ADD THE END OF IF STATEMENT HERE!!!!!!!!!!!!!!!! -->
              <!-- TODO ADD THE ELSE STATEMENT HERE!!!!!!!!!!!!!!!! -->
                <!-- ANIKET UNCOMMENT THE LINE BELOW FOR THE ELSE STATEMENT-->
                <!-- <p style="font-family: 'Montserrat', sans-serif;">Login to view recommended movies</p> -->
              <!-- TODO ADD THE END OF ELSE STATEMENT HERE!!!!!!!!!!!!!!!! -->
              <!-- </th></tr></table> -->
              </div>
        </div>
      </div>
    </div>
    
    <!-- footer -->
    <?php require_once(__DIR__ . '/../../private_html/html-templates/global/footer-v1.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
