<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once(__DIR__ . '/../private_html/classes/MovieBuilder.php');
require_once(__DIR__ . '/../private_html/html-templates/global/session.php');

$mb = new MovieBuilder();

if (is_logged_in()) {
    $user_id = $_SESSION['user']->get_id();
} else {
    $user_id = NULL;
}

if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = SORT_RATING_HIGH_TO_LOW;
}

$results = $mb->get_editor_picks($user_id, 100, $sort);

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
    <link rel="stylesheet" href="assets/css/searchPage.css">
   
    <title>FilmFinity - Editor Picks</title>
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
          <h1 class="searchHead">Editor Picks</h1>
        </div>
        <div class="col-md-13" >
        <form action="" method="GET">
          <div class="input-group">
            <select name="sort" class="custom-select" id="inputGroupSelect04">
              <option selected>Sort Search...</option>
              <option value="<?php echo(SORT_ALPHABETICAL_A_Z); ?>">Alphabetical A to Z</option>
              <option value="<?php echo(SORT_ALPHABETICAL_Z_A); ?>">Alphabetical Z to A</option>
              <option value="<?php echo(SORT_RATING_HIGH_TO_LOW); ?>">Rating High to Low</option>
              <option value="<?php echo(SORT_RATING_LOW_TO_HIGH); ?>">Rating Low to High</option>
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
                    <h3 style="float: left;"><a id="link" href="<?php echo($movie->get_movie_page_path()); ?>"><?php echo($movie->get_title()); ?> </a></h3>
                    <!---------- Movie rating ---------->
                    <h4 style="float: left;color: #03D8A9;"> &nbsp; <i style="color: #FFC107;">&#9733;</i> <?php echo($movie->get_rating()); ?> &nbsp;&nbsp;</h4>

                    <?php if (isset($_GET['watchlist']) && ctype_digit($_GET['watchlist'])) { ?>

                        <!-- Add to watch list ---------->
                        <a class="btn btn-secondary" style="float: right;" href="/profile/watch-list-add-movie.php?watchlist=<?php echo($_GET['watchlist']); ?>&movie=<?php echo($movie->get_id()); ?>" role="button"> &#10010; WATCHLIST</a>

                    <?php } ?>

                  </div>
                  <!---------- Movie description ---------->
                  <h6 class="movieDate" class="mt-0" src="<?php echo($movie->get_movie_page_path()); ?>"> <?php echo($movie->get_release_date()); ?></h6>
                  <p class="movieTitle"> 
                    <?php echo($movie->get_description(170));?>...
                  </p>

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
