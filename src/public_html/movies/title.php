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
      <!-- <h1 style="text-align: center;">sssssssssssssssssssss</h1> -->
    </div>
    <div class="container" style="margin-bottom: 60px;">
      <h1><!-- ADD SOME SPACE HERE --></h1>

      <div class="row">
      <!------------------------ LEFT SECTION ---------------------------------------------------->
        <!-- Movie poster / rating / wishlist -->
        <!-- class="my-3" - changes the spacing of the elements -->
        <div  class="col-sm-3 " align="center">
        <div style="width: 200px;height:300px;">
          <!-- <img class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:300px;height:400px;"> -->
          <img id="image1" class="mt-3" src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:100%;height:100%;object-fit:contain;">
          </div>
            <div class="my-3">
            <button type="submit" class="btn btn-secondary">ADD TO WISHLIST</button>
            </div>
            <!-- WOULD ANIKET BE ABLE TO CONVERT THE MOVIE RATING INTO STARS -->
            <h4>Movie Rating</h4>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            
        </div>
        <!------------------------ MIDDLE SECTION ---------------------------------------------------->
        <!-- Movie Description -->
        <!-- <div class="col-sm-6" style="background-color:lavenderblush;"> -->
        <div class="col-sm-6" >
          <!-- <div class="mt-3"> -->
            <!-- <h1 align="center" class="display-4" style="font-family: 'Staatliches', cursive;"><?php echo($movie->get_title()); ?></h1> -->
          <!-- </div> -->
          <!-- <h2>Synopsis</h2> -->
          <div class="pt-5">
          <p style="font-family: 'Montserrat', sans-serif;"><?php echo($movie->get_description()); ?></p>
          <h4>Genre:</h4>
          <p><?php echo($movie->get_genre()); ?></p>

          <h4>Director:</h4>
          <p><?php echo($movie->get_director()); ?></p>
          <!--<h2>Cast:</h2>
          <p>rock dale</p>-->
          </div>

          <!-- Trailer -->
          <a href="#demo" class="btn btn-secondary" data-toggle="collapse">Trailer</a>
          <div id="demo" class="collapse">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="mt-3" width="560" height="315" src="https://www.youtube.com/embed/2AUmvWm5ZDQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Review section -->
          <div class="pt-5"><h4>Reviews:</h4></div>
          <hr style="height:1px;border-width:0;background-color:#6C757D">
          <!-- <hr style="color:#03D8A9"> -->
          <div class="pt-1">
            <!-- <h4 style="color:#F2F2F2;">Add your own review and rating:</h4> -->
            <!-- TODO BACKEND NEEDED FOR COMMENT -->
            <div class="py-2">
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
            </div>
            <textarea style="margin-top:5px;" class="form-control" rows="3" id="comment" placeholder="Enter your review"></textarea>
            <button type="button" style="margin-top:10px;margin-left:5px;" class="btn btn-secondary">Submit Review</button>
          </div>
          <hr style="height:1px;border-width:0;background-color:#03D8A9">
          <div>
            <div>
              <p><small><strong>UserReview1</strong> - 20.10.2020 22:22</small></p>
            </div>    
            <p>Suspendisse vitae lacus enim. Donec eu mauris sit amet ante fringilla aliquam sit amet sit amet quam. Etiam blandit enim ullamcorper massa tincidunt blandit. Fusce lobortis, neque et dignissim interdum, mi arcu ultrices lectus, a luctus elit orci eget ipsum. Donec ullamcorper ante eu laoreet placerat. Etiam in sem elit. Duis convallis odio ut dolor luctus ullamcorper. Aenean porta aliquam eros, quis bibendum ante consectetur a.</p>
          </div>
        <!-- TODO PAGNATION START -->
        <nav aria-label="Page navigation example">
  <ul class="pagination pg-blue">
    <li class="page-item"><a class="page-link">Previous</a></li>
    <li class="page-item"><a class="page-link">1</a></li>
    <li class="page-item"><a class="page-link">2</a></li>
    <li class="page-item"><a class="page-link">3</a></li>
    <li class="page-item"><a class="page-link">Next</a></li>
  </ul>
</nav>
       <!-- TODO PAGNATION END -->
        </div>
        
        <!------------------------ RIGHT SECTION ---------------------------------------------------->
        <!-- Movie recommendation -->
        <!-- style="border-radius: 12px;border: 2px solid red;" -->
        <div class="col-sm-3 pt-5 pl-5  sticky-left row d-flex justify-content-center text-center" >
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
