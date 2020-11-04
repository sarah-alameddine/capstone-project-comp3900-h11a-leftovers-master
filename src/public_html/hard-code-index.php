<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

   

    <style>
      label{
        font-weight:bold; color: black; font-family:georgia,garamond,serif;font-size:16px;font-style:italic;
      }

      .carousel-item img{
        height: 300px;
      }

      .carousel-caption{
        left: 0; bottom:10%; width: 100%; 
        height: 20%;
        background-color: black;
        opacity: 0.5;
        cursor: pointer;
        z-index: 5;
      }

      .carousel-head{
        position: absolute;
        left: 5%;
        top:0;
        font-weight: bold;
        color: white;
        font-size: 20px;
      }

      .carousel-content{
        position: relative;
        left: 10%;
        right: 10%;
        top:40%;
        font-weight: bold;
        color: white;
        font-size: 12px;
        text-align: left;
      }

      #carousel-4 {
        position: relative;
      }   
    
    </style>

    <!-- style for nav -->
    <style>
      .dropdown {
        font-weight: bold;
      }
      .dropdown:hover>.dropdown-menu {
        display: block;
      }

    </style>

    <style>
      .nav-link{
        font-weight: bold;
      }
    </style>

    <style>
      .container{
        max-width: 90%;
      }
    </style>

    <!-- css for the cards -->
    <style>

      .card img{
        height: 200px;
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
  <!--  Nav bar -->

  <!--  Nav bar -->
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #182628;">
    <!-- logo and our group name session -->
    <a class="navbar-brand" href="/" >
      <img src="assets/images/logo-header.png" width="140px" height="50px" alt="logo" style="padding-right: 10%;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 2%;">
      
      <ul class="navbar-nav mr-auto">
        <!-- Moives drop down -->
        <li class="nav-item dropdown">
          <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Movies
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Top Rated Movies</a>
            <a class="dropdown-item" href="#">In Theaters</a>
            <a class="dropdown-item" href="#">Coming Soon</a>
            <a class="dropdown-item" href="#">Movie News</a>
          </div>
        </li>

        <!-- Directors and actors dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            People
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Directors</a>
            <a class="dropdown-item" href="#">Actors</a>
          </div>
        </li>

        <!-- Other features dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">What to Watch</a>
            <a class="dropdown-item" href="#">Latest Trailers</a>
            <a class="dropdown-item" href="#">FilmFinder Picks</a>
          </div>
        </li>

      </ul>

      <!-- Search session -->
      <form action="search.php" method="GET" style="max-height: 35px; width: 50%; margin-right: 8%; margin-left: 5%;">
        <div class="input-group mb-3 position-relative">

          <!-- Search filter -->
          <div class="input-group-prepend">
            <select class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 0; border-bottom-right-radius: 0; border: none; box-shadow: none;">
              <option selected>Search Filter<i class="fas fa-align-justify"></i></option>
              <option value="1">Movie Title</option>
              <option value="2">Genre</option>
              <option value="3">Director</option>
            </select>
          </div>

          <!-- Search bar -->
          <input type="text" class="form-control shadow-none" placeholder="Seach movies, genres, directors..." name="term" style="width: 50%; border-color: white; background: white;">

          <!-- Search button -->
          <div class="input-group-append">
            <button class="btn shadow-none" type="submit" id="button-addon2" style="background-color: white; border: none;"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>

      <ul class="navbar-nav mr-auto" >
          
        <?php
        if (isset($_SESSION['user_id'])) {
        ?>
        <!-- log out -->
        <li class="nav-item">
           <a class="nav-link text-light" href="/logout.php">Logout</a>
        </li>

        <?php } else { ?>
        <!-- Login -->
        <li class="nav-item">
          <a class="nav-link text-light" href="/login.php">Login</a>
        </li>

        <!-- Sign up-->
        <li class="nav-item">
          <a class="nav-link text-light" href="/signup.php">Join Us</a>
        </li>
      </ul>

        <?php } ?>
      
      <ul class="navbar-nav mr-auto">

      </ul>

    </div>
  </nav>
      
  <!-- SECTION 1: BIG CAROUSEL SECTION -->
      <div class="container">

        <!-- header of carousel -->
        <div class="row" style="background-color: #65ccb8;">

          <div class="col">
            <span style="font-weight: bold;">New & Upcomming</span>
          </div>

        </div>      

        <!-- content of carousel -->
        <div class="row">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="position: absolute; left: 5%; right:5%;">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <span class="carousel-head">X-MEN: Apocalypse</span>
                    <a href="LINK TO THE MOVIE DETAIL PAGE">
                      <span class="carousel-content"><p>During the prologue scene in ancient Egypt, a group of Apocalypse's royal guards betray him and attempt to destroy him by sabotaging the ritual in which the mutant overlord transfers his essence into a new body...</p></span>
                    </a>
                  </div>
                  <img src="assets/images/x-men.jpg" class="d-block w-100" alt="image1">
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <span class="carousel-head">Movie Title</span>
                    <a href="LINK TO THE MOVIE DETAIL PAGE">
                      <span class="carousel-content">Movie Summary...and more</span>
                    </a>
                  </div>
                  <img src="assets/images/dunkirk.jpeg" class="d-block w-100" alt="image2">
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <span class="carousel-head">Movie Title</span>
                    <a href="LINK TO THE MOVIE DETAIL PAGE">
                      <span class="carousel-content">Movie Summary...and more</span>
                    </a>
                  </div>
                  <img src="assets/images/secret-garden.jpg" class="d-block w-100" alt="image3">
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

        </div>

      </div>

  <!-- FILTER PANE -->    
  <div class="container" style="position: absolute; top: 420px; left: 5%">
        <div class="row">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
              <li class="nav-item" role="presentation">
                <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">What's Popular</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Movie</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Director</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Actor</a>
              </li>
            </ul>

        </div>

        <div class="row">

          <!-- Tab panes for each filter-->
          <div class="tab-content">

            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <!-- a carousel for sliding here for Movie filter-->
              <div id="carousel-1" class="carousel" data-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
  
                    <!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>
                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            
            </div>

            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

              <!-- a carousel for sliding here for Director filter-->
              <div id="carousel-2" class="carousel" data-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">James Cameron</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  


                  </div>
                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Joe Russo</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div> 

                  </div>

                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Steven Spielberg</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div> 

                  </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>

            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">

              <!-- a carousel for sliding here for Actor filter-->
              <div id="carousel-3" class="carousel" >
                <div class="carousel-inner">
                  <div class="carousel-item active" >
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Leonardo DiCaprio</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>   

                  </div>

                  <div class="carousel-item" >
                    
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Scarlett-Johansson</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  

                  </div>

                  <div class="carousel-item">
                    
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Kate Winslet</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  

                  </div>

                </div>
                <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
          </div>

        </div>
        <!-- =================================================================================================================== -->
          <!-- SECTION 2 : -->
        <div class="pt-5">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
              <li class="nav-item" role="presentation">
                <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Your Recommendations</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">Movie</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="messages-tab2" data-toggle="tab" href="#messages1" role="tab" aria-controls="messages1" aria-selected="false">Director</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings1" role="tab" aria-controls="settings1" aria-selected="false">Actor</a>
              </li>
            </ul>

        </div>

        <div class="row">

          <!-- Tab panes for each filter-->
          <div class="tab-content">

            <div class="tab-pane active" id="profile1" role="tabpanel" aria-labelledby="profile-tab2">

              <!-- a carousel for sliding here for Movie filter-->
              <div id="carousel-1" class="carousel" data-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
  
                    <!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/joker.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>
                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/dora.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/black-panther.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            
            </div>

            <div class="tab-pane" id="messages1" role="tabpanel" aria-labelledby="messages-tab2">

              <!-- a carousel for sliding here for Director filter-->
              <div id="carousel-2" class="carousel" data-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">James Cameron</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  


                  </div>
                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Joe Russo</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div> 

                  </div>

                  <div class="carousel-item">
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Steven Spielberg</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div> 

                  </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>

            <div class="tab-pane" id="settings1" role="tabpanel" aria-labelledby="settings-tab">

              <!-- a carousel for sliding here for Actor filter-->
              <div id="carousel-3" class="carousel" >
                <div class="carousel-inner">
                  <div class="carousel-item active" >
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Leonardo DiCaprio</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>   

                  </div>

                  <div class="carousel-item" >
                    
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Scarlett-Johansson</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  

                  </div>

                  <div class="carousel-item">
                    
                    <div class="card-deck" style="margin-top: 1%;">
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">Kate Winslet</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>
                      <div class="card" style="width:10rem; height: 16rem;">
                        <img src="assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 0;">
                          <a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        </div>
                      </div>

                    </div>  

                  </div>

                </div>
                <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
          </div>

        </div>
  </div>
</div>
</div>



  <!-- FOOTER -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>