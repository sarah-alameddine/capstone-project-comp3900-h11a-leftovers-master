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

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="/../public_html/assets/css/moviePage.css"> -->
    <!-- <link rel="stylesheet" href="moviePage.css"> -->
    <link rel="stylesheet" href="moviePage.css">

    <title>FilmFinity</title>
  </head>
  <body>

    <!-- Nav bar-->
    <?php require_once(__DIR__ . '/../../private_html/html-templates/global/nav.php'); ?>


    <div class="container-fluid">
      <h1><!-- ADD SOME SPACE HERE --></h1>

      <div class="row">
        <!-- Movie poster / rating / wishlist -->
        <div  class="col-sm-3" align="center">
          <img src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:200px;height:300px;">
            <button type="submit" class="btn btn-primary">ADD TO WISHLIST</button>
            <!-- WOULD ANIKET BE ABLE TO CONVERT THE MOVIE RATING INTO STARS -->
            <h2>Rating</h2>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>

        <!-- Movie Description -->
        <div class="col-sm-6" style="background-color:lavenderblush;">
          <h1 align="center"><?php echo($movie->get_title()); ?></h1>
          <h2>Synopsis</h2>
          <p><?php echo($movie->get_description()); ?></p>
          <h2>Genre:</h2>
          <p><?php echo($movie->get_genre()); ?></p>
          <h2>Director:</h2>
          <p><?php echo($movie->get_director()); ?></p>
          <!--<h2>Cast:</h2>
          <p>rock dale</p>-->

          <!-- Review section -->
          <h2>Add your own review and rating:</h2>
          <!-- connect this to the corresponding php file -->
          <!-- <form action="moviePage.php" method="post"> -->

          <textarea name="comment" id="comment"></textarea>
          <input type="submit" value="Submit">

          <!-- GET FROM PHP THE CURRENT LOGGED IN USERS NAME -->
          
        </div>

        <!-- Movie recommendation -->
        <div class="col-sm-3" align="center">
          <h1 align="center">Your Movie Recommendation </h1>
          <div> <a href="/movie/">Movie recommendation 1</a></div>
          <div><a href="/movie/">Movie recommendation 2</a></div>
          <div><a href="/movie/">Movie recommendation 3</a></div>
        </div>

      </div>
    </div>
    <!-- ========================================== -->

    <!-- Modal for sign up function -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!-- content of the sign up popup -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupModalLabel">SIGN UP FOR FILMFINITY</h5>
            <!-- close button -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- Body of the modal -->
          <form action="YOUR PHP FILE TO HANDLE REGISTER HERE">
            <div class="modal-body">
              <!-- Email -->
              <div class="form-row">
                <div class="col">
                  <label for="username">Username</label>
                  <input type="username" class="form-control" id="inputEmail" placeholder="" name="username" required>  
                </div>
              </div> 
              <!-- Email -->
              <div class="form-row">
                <div class="col">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="" name="email" required>  
                </div>
              </div> 
              <!-- Password --> 
              <div class="form-row">
                <div class="col">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="" name="password" required>  
                </div>
              </div>  
            </div>
            <!-- footer of the modal -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>