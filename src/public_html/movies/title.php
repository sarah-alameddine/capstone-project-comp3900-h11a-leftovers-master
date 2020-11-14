<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../../private_html/classes/MovieBuilder.php');
require_once(__DIR__ . '/../..//private_html/html-templates/global/session.php');

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

    <!-- JQuery -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

    <!-- Font awesome - icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <title>FilmFinity</title>

    <!-- Change the width of the page -->
    <style>
      @media (min-width: 1200px) {
        .container{
        max-width: 1400px;
        }
      }
    </style>
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
          <div class="pb-4" style="width: 200px;height:300px;">
            <!-- <img class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:300px;height:400px;"> -->
            <img id="image1" class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:100%;height:100%;object-fit:contain;">
          </div>
          
          <?php if (is_logged_in()) { ?>
            <!-- Wishlist button -->
            <div class="my-3">
                <?php if ($_SESSION['user']->is_movie_in_wishlist($movie->get_id())) { ?>
                    <a class="btn btn-secondary" class="glyphicon" href="/movies/remove-from-wishlist.php?id=<?php echo($movie->get_id()); ?>" role="button"> REMOVE FROM WISHLIST</a>
                <?php } else { ?>
                    <a class="btn btn-secondary" class="glyphicon" href="/movies/add-to-wishlist.php?id=<?php echo($movie->get_id()); ?>" role="button"> &#10010; ADD TO WISHLIST</a>
                <?php } ?>
            </div>
          <?php } ?>

          <!-- Movie star rating -->
          <h3><?php echo($movie->get_average()); ?> <span style="color: #FFC107;font-size:30px;">&#9733;</span></h3>
          <h6 style="color: #F2F2F2;"> Average Rating</h6>            
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

            <?php if (is_logged_in() && isset($_GET['status'])) { ?>

                <?php if($_GET['status'] == UNABLE_TO_ADD) { ?>

                    <div class="alert alert-danger" role="alert">Unable to add movie to wishlist</div>

                <?php } else if ($_GET['status'] == ADDED) { ?>

                    <div class="alert alert-primary" role="alert">Added movie to wishlist</div>

                <?php } else if ($_GET['status'] == UNABLE_TO_REMOVE) { ?>

                    <div class="alert alert-danger" role="alert">Unable to remove movie from wishlist</div>

                <?php } else if ($_GET['status'] == REMOVED) { ?>

                    <div class="alert alert-primary" role="alert">Removed movie from wishlist</div>

                <?php } ?>

            <?php } ?>


          
          <p style="font-family: 'Montserrat', sans-serif;"><?php echo($movie->get_description()); ?></p>
          <h4>Genre(s):</h4>
          <p><?php echo($movie->get_genre()); ?></p>

          <h4>Director(s):</h4>
          <p><?php echo($movie->get_director()); ?></p>

          <h4>Cast:<h4>
          <p><?php echo($movie->get_cast()); ?></p>
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
        <?php if (is_logged_in()) { ?>

            <h4 style="color:#F2F2F2;">Add your own review and rating:</h4>
            <div class="pt-1">
            <!-- TODO BACKEND NEEDED FOR COMMENT -->
            <form method="POST" action="post-review.php">
                <!-- <h4>Rating (1-5): </h4> -->
                <!-- <input type="number" id="rating" name="rating" min="1" max="5" value="1"> -->
                <!-- Star rating section -->
                <div class="rating">
                  <input type="radio" id="star5" name="startRating" id="rating" name="rating" class="star" value="5">
                    <label for="star5" class="star" title="5 stars"></label>
                  <input type="radio" id="star4" name="startRating" id="rating" name="rating" class="star" value="4">
                   <label for="star4" class="star" title="4 stars"></label>
                  <input type="radio" id="star3" name="startRating"  id="rating" name="rating" class="star" value="3">
                    <label for="star3" class="star" title="3 stars"></label>
                  <input type="radio" id="star2" name="startRating" id="rating" name="rating" class="star" value="2">
                    <label for="star2" class="star" title="2 stars"></label>
                  <input type="radio" id="star1" name="startRating" id="rating" name="rating" class="star" value="1">
                    <label for="star1" class="star" title="1 stars"></label>
                </div>
                <!-- Comment section -->
                <textarea class="form-control" style="margin-top:5px;" class="form-control" rows="3" name="comment" placeholder="Add your own review..."></textarea>
                <!-- Submit section -->
                <input type="hidden" name="movie_id" value="<?php echo($movie->get_id()); ?>">
                <div class="mt-3" >
                <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Post Review">
              </div>
              </form>

            </div>

        <?php } else { ?>
            <h4 style="color:#F2F2F2;"><a href="/login.php">Login</a> or <a href="/signup.php">Sign Up</a> and post your own reviews</h4>
        <?php } ?>

            <hr style="height:1px;border-width:0;background-color:#6C757D">

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
                    <p style="float: left;" id="reviewRating"> - &#9733; <?php echo($review->get_rating()); ?> &nbsp;</p>
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
        <div class="col-md-3 pt-5 pl-5 sticky-left row d-flex justify-content-center text-center" >
          <!-- <table id="recommendation"><tr><th> -->
          <div id="rec">
            <h4 >Movie Recommendation </h4>
            <hr style="height:1px;border-width:0;background-color:#6C757D">
            <!-- TODO ADD THE IF STATEMENT HERE!!!!!!!!!!!!!!!! -->
            <div class="card-img-top d-flex align-items-center">
                  <div class="pl-5">
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
