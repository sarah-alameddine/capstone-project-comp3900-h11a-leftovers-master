<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../private_html/html-templates/global/session.php');
require_once(__DIR__ . '/../private_html/classes/MovieBuilder.php');

$errors[1] = "That profile does not exist";
$errors[2] = "There was a problem connecting to the database";
$errors[3] = "That watch list does not exist";
$errors[4] = "You can't view other people's ban list";

$mb = new MovieBuilder();
$random_movies = $mb->get_random_movies(6);
$new_movies = $mb->get_new_releases(6);
$year_movies = $mb->get_year_movies(2019, 6);

if (is_logged_in()) {
    $recommendations = $_SESSION['user']->get_my_recommendations(6);
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
    
  <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>
    
    <div class="container" >
        
        <?php if (isset($_GET['error']) && isset($errors[$_GET['error']])) { ?>
            <div class="row">
                <div class="container">
                    <div class="alert alert-danger" role="alert"><?php echo( $errors[$_GET['error']] ); ?></div>
                </div>
            </div>
        <?php } ?>

        <!-- now is the big carousel -->
        <div class="row">
            <!-- Search Bar section-->
            <div id="searchbar" class="container">
              <h1 class="welcome1">Welcome</h1>
              <h2 class="welcome2">Millions of movie recommendations, all in one place.</h2>
              <form action="search.php" method="GET" class="d-flex justify-content-center h-100" id="main-search">
                  <div class="search"> <input class="search_input" type="text" name="term" placeholder="Search movies, people, directors here..."> <button type="submit" form="main-search" class="search_icon"><i class="fa fa-search"></i></button> </div>
                  <input type="hidden"name="category" value="1">
              </form>
            </div>
        </div>

        <!-- now is the filter pane -->
        <div class="row">
            <?php require_once(__DIR__ . '/body_page/filter-section-hardcode-2.php'); ?>
        </div>

    <?php if (isset($recommendations)) { ?>

        <!-- SECTION 3: YOUR RECOMMENDATIONS -->
        <div class="row">
        <div class="container" style="position: relative;">
              <div class="row">
                  <!-- NAV TABS -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Your Recommendations</a>
                    </li>
                  </ul>
              </div>

              <div class="row justify-content-center">

                <!-- Tab panes for each filter-->
                <div class="tab-content" style="width: 100%;">

                  <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- a carousel for sliding here for Movie filter-->
                    <div id="carousel-4" class="carousel slide" data-interval="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">

                        <!-- a deck of cards here, each card is a movie  CAN FIT 6 MOVIES INTO 1 slide-->
                        
                            <div class="card-deck" style="margin-top: 1%;">
                              <!--1-->

                              <?php foreach ($recommendations as $movie) { ?>

                                  <!--3-->
                                  <div class="card">
                                    <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto" >
                                    <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                                      <div class="card-overlay card-overlay--blur">
                                        <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                        <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                                      </div>
                                    </a>
                                  </div>

                              <?php } ?>

                            </div> <!-- card-deck -->

                        </div> <!-- carousel-item-active -->

                        <div class="carousel-item">
                          <div class="card-deck" style="margin-top: 1%;">
                            <!-- 1 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 2 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 3 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 4 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 5 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 6 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                          </div> <!-- card-deck -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item">
                          <div class="card-deck" style="margin-top: 1%;">
                            <!-- 1 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 2 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 3 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 4 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 5 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 6 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                          </div> <!-- card-deck -->
                        </div> <!-- carousel-item -->
                      </div> <!-- carousel-inner -->

                      <!-- Carousel Arrows -->
                      <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev">
                        <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next">
                        <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> <!-- carousel4 -->

                  </div> <!-- tab-pane-active -->
                </div> <!-- tab-content -->
              </div> <!-- row -->
        </div> <!-- section3 -->
        </div> <!-- row -->

    <?php } ?>

        <!-- SECTION 4: Editor's Picks -->
        <div class="row">
        <div id="section4" class="container" style="position: relative;">
                <div class="row">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Editor's Picks</a>
                      </li>
                    </ul>
                </div>

                <div class="row justify-content-center">

                  <!-- Tab panes for each filter-->
                  <div class="tab-content" style="width: 100%;">

                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                      <!-- a carousel for sliding here for Movie filter-->
                      <div id="carousel-5" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
          
                            <!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                              
                              <div class="card-deck" style="margin-top: 1%;">
                                <!--1-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                                <!--2-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                                <!--3-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                                <!--4-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                                <!--5-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                                <!--6-->
                                <div class="card">
                                  <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                                  <a href='https://www.google.com/'>
                                    <div class="card-overlay card-overlay--blur">
                                      <h6 class="card-title">MOVIE TITLE</h6>
                                      <p class="card-text" >Release date</p>
                                    </div>
                                  </a>
                                </div>

                              </div> <!-- card-deck -->
                          </div> <!-- carousel-item-active -->

                          <div class="carousel-item">
                                <div class="card-deck" style="margin-top: 1%;">
                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">Joe Russo</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                  </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                </div> 

                          </div>
                        </div> <!-- carousel-inner -->

                            <!-- Carousel Arrows -->
                            <a class="carousel-control-prev" href="#carousel-5" role="button" data-slide="prev">
                              <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                              <!-- <span class="sr-only">Previous</span> --> 
                            </a>
                            <a class="carousel-control-next" href="#carousel-5" role="button" data-slide="next">
                              <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>

                      </div> <!-- carousel5 -->
                    </div> <!-- tab-pane active -->
                  </div> <!-- tab-content -->

                </div> <!-- row -->
        </div> <!-- section4 -->
        </div> <!-- row -->
    
    </div> <!-- end of the container -->

    <!-- a row to place our footer -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
