<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../private_html/html-templates/global/session.php');
require_once(__DIR__ . '/../private_html/classes/MovieBuilder.php');

$errors[1] = "That profile does not exist";
$errors[2] = "There was a problem connecting to the database";
$errors[3] = "That watch list does not exist";
$errors[4] = "You can't view that list";
$errors[5] = "You must search for a term";
$errors[6] = "Movie not found";

$mb = new MovieBuilder();
$random_movies = $mb->get_random_movies(12);
$new_movies = $mb->get_new_releases(12);
$year_movies = $mb->get_year_movies(2019, 12);

if (is_logged_in()) {
    $recommendations = $_SESSION['user']->get_my_recommendations(12);
    $user_id = $_SESSION['user']->get_id();
} else {
    $user_id = NULL;
}

$editor_picks = $mb->get_editor_picks($user_id, 12, SORT_RANDOM);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Home page CSS -->
    <link rel="stylesheet" href="/assets/css/homepagestylev0.2.css">
    <link rel="stylesheet" href="/assets/css/search-section.css">

    <script src="/assets/js/homepage.js"></script>
    <script src="/assets/js/search-section.js"></script>

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
  
    <title>FilmFinity</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon-2.ico"/>
  </head>

  <body>
  
  <!-- WEBSITE NAVIGATION BAR SECTION -->
  <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>
    
    <div class="container" >
        
        <?php if (isset($_GET['error']) && isset($errors[$_GET['error']])) { ?>
            <div class="row">
                <div class="container">
                    <div class="alert alert-danger" role="alert"><?php echo( $errors[$_GET['error']] ); ?></div>
                </div>
            </div>
        <?php } ?>

        <!-- WEBSITE HEADER SECTION -->
        <div class="row" style="margin-bottom: 5%;">
            <!-- Search Bar section-->
            <div id="searchbar2" class="container">
              <h1 class="welcome1">Welcome</h1>
              <h2 class="welcome2">Millions of movie recommendations, all in one place.</h2>
              <form action="search.php" method="GET" class="d-flex justify-content-center h-100" id="main-search">
                  <div class="search"> <input class="search_input" type="text" name="term" placeholder="Search movies, people, directors here..."> <button type="submit" form="main-search" class="search_icon"><i class="fa fa-search"></i></button> </div>
                  <input type="hidden"name="category" value="1">
              </form>
            </div>
        </div>
        
        <!-- TO CHANGE BACK TO THE OLD VERSION CHANE THE PATH TO filter-section-first-version.php -->
        <!-- NOTE: when change back to the first version, line 15,14,16, 19, 25; replace value 12 by 6 -->
        <!-- FILTER SECTION -->
        <div class="row">
            <?php require_once(__DIR__ . '/body_page/filter-section.php'); ?>
        </div>
        
        <!-- TO CHANGE BACK TO THE OLD VERSION CHANE THE PATH TO recommendation-section first-version.php -->
        <!-- RECOMMENDATIONS SECTION -->
        <div class="row">
            <?php require_once(__DIR__ . '/body_page/recommendation-section.php'); ?>
        </div>

        <!-- TO CHANGE BACK TO THE OLD VERSION CHANE THE PATH TO editor-picks-first-version.php -->
        <!-- EDITOR PICKS SECTION -->
        <div class="row">
            <?php require_once(__DIR__ . '/body_page/editor-picks-section.php'); ?>
        </div>
        
    </div> <!-- end of the container -->

    <!-- FOOTER SECTION -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>
</html>
