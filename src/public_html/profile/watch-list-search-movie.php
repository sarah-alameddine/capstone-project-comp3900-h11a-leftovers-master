<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>
    <!--
    <link rel="stylesheet" href="/assets/css/homepagestyle.css">
    <script src="/assets/js/homepage.js"></script>
    -->
    
    <title>Add movie to wishlist</title>
  </head>
  <body>
    
    <div class="row">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>
    </div>

    <div class="container">      

        <div class="row" style="background-color: #182628; opacity: 0.8;">
            
            <div class="col-md-2" style="height: 240px; position: relative;">
                <div class="rounded-circle" style="background-color: #B9770E; width: 120px; height: 120px; position: relative; left: 20%; top: 25%;">
                    
                    <div class="row" style="position: relative; top: 12%; left: 47%; font-size: 60px; color: white;"> A
                    </div>

                </div>
            </div>

            <div class="col-md-10">

                <div class="container" style="position: relative; top: 20%">

                    <div class="row" style="color: white; font-weight: bold; font-size: 25px;">
                        A list by
                    </div> 

                    <div class="row" style="color: white; font-size: 25px;">
                        USERNAME
                    </div>

                    <div class="row" style="color: white; font-weight: bold; margin-top: 2%;">
                        About this list
                    </div>

                    <div class="row" style="color: white;">
                        No description; if there's description, put it here
                    </div>

                </div>
            </div>

        </div>

        <!-- A search bar here -->
        <div class="row" style="margin-top: 5%; margin-left: 10%; margin-right: 10%;">

            <div class="container" style="width: 100%; margin-right: 5%;">
                <!-- Search session -->
                <form action="search.php" method="GET" style="max-height: 35px; width: 100%;">
                    <div class="input-group mb-3 position-relative">

                        <!-- Search filter -->
                        <div class="input-group-prepend">
                            <select class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 0; border-bottom-right-radius: 0;border-color: black; box-shadow: none;">
                                <option selected>Search Filter<i class="fas fa-align-justify"></i></option>
                                <option value="1">Movie Title</option>
                                <option value="2">Genre</option>
                                <option value="3">Director</option>
                            </select>
                        </div>

                        <!-- Search bar -->
                        <input type="text" class="form-control shadow-none border-right-0 border-left-0" placeholder="Search for movies to add to your watchlist..." name="term" style="width: 50%; border-color: black; background: white;">

                        <!-- Search button -->
                        <div class="input-group-append">
                            <button class="btn shadow-none border-left-0" type="submit" id="button-addon2" style="background-color: white; border-color: black;"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
    
            </div>

        </div>

        <!-- Search result here -->
        <div class="row" style="margin-top: 5%; margin-bottom: 5%;">

            <!---------- Sort by button ---------->
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm">
                        <h1> Search result for : <i style="color:#03D8A9">"<?php echo(htmlentities($_GET['term'])); ?>"<i></h1>
                    </div>

                    <div class="col-sm">
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
            </div>

            <div class="container">
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

                </div>    
            </div>
        </div>

    </div>

    <div class="row">
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
    </div>



     
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
