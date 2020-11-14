<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once(__DIR__ . '/../private_html/classes/MovieBuilder.php');

$mb = new MovieBuilder();

if (isset($_GET['term']) && isset($_GET['category']) &&
    $_GET['category'] >= 1 && $_GET['category'] <= 5) {

    $results = $mb->search($_GET['term'], $_GET['category'], 1, 1);

} else {
    $results = array();
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
    <link rel="stylesheet" href="assets/css/moviePage.css">
   
    <title>FilmFinity</title>
  </head>
  <body>

    <!-- website header -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>
    <!-- spacing between header and movie search result -->
      <div class="pt-4">
      </div>
    <!-- search results -->
    <div class="container">

      <!---------- Sort by button ---------->
      <div class="row" >
        <div class="col-md-8">
          <h1> Search result for : <i style="color:#03D8A9">"<?php echo(htmlentities($_GET['term'])); ?>"<i></h1>
        </div>
        <div class="col-md-13" >
        <form name="sort" action="" method="POST">
          <input type="hidden" name="search_sort">
          <div class="input-group">
            <select class="custom-select" id="inputGroupSelect04">
              <option selected>Sort Search...</option>
              <option value="alpabetical">Alphabetical A to Z</option>
              <option value="ratingHigh">Rating High to Low</option>
              <option value="ratingLow">Rating Low to High</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-secondary" type="submit" >Sort</button>
            </div>
          </div>
        </form>
        </div>
      </div>
      <hr style="color:gray;background-color:gray">
      <div class="pt-5">
        <!---------- No search results found ---------->
        <?php if (count($results) == 0) { ?>
            <div class="py-5">
              <h2>No results found</h2>
            </div>
        <?php } else { ?>
            <!---------- Search results found ---------->
            <?php foreach ($results as $movie) { ?>
              <div id="searchBorder">
                <div class="media">
                <a href="<?php echo($movie->get_movie_page_path()); ?>">
                  <img #image1 class="align-self-center mr-3" src="<?php echo($movie->get_image_path());?>" alt="movieposter"  style="width: 100px;height:150px;"> 
                </a>
                <div class="media-body" class="py-5" style="padding:5px;" class="d-flex align-items-center">
                  <!---------- Movie title ---------->
                  <div style="overflow: hidden;">
                    <h3  style="float: left;"><a href="<?php echo($movie->get_movie_page_path()); ?>"><?php echo($movie->get_title()); ?> </a></h3>
                    <!---------- Movie rating ---------->
                    <h4 style="float: left;color: #03D8A9;"> &nbsp; &#9733; <?php echo($movie->get_average()); ?> &nbsp;&nbsp;</h4>

                    <!-- TODO IF STATEMENT - Add to watch list ---------->
                    <a class="btn btn-secondary" style="float: right;" href="https://www.google.com/" role="button"> &#10010; WATCHLIST</a>
                  </div>
                  <!---------- Movie description ---------->
                  <h6 class="mt-0" src="<?php echo($movie->get_movie_page_path()); ?>"> <?php echo($movie->get_release_date()); ?></h6>
                  <p><?php echo($movie->get_description(100));?> part from counting words and characters, our online editor can help you to check word count, simply ...</p>

                </div>
              </div>
            </div> 
            <!---------- spacing between the movie posters ---------->
            <div class="pb-5">
            </div>
            <?php } ?>
        <?php } ?>
        <!-- spacing between the movie posters and footer-->
        <div class="pb-5"> 
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
