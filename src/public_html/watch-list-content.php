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
    
    <title>FilmFinity</title>
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

        <!-- watchlist content -->
        <!-- logic: every row holds 1 container, each container holds 7 cards(movie) -->
        <!-- image of a movie and movie title are put into the card -->
        <!-- if the number of movie isnt enough to fill a whole row -->
        <!-- just create empty card in order to make 6 cards in a row for a nice orientation -->

        <!-- below is example of 9 movies, 1 row is filled, the second row only has 2 movies, the rest 5 cards are empty -->
        <div class="row">

            <div class="container">

            <div class="card-deck" style="margin-top: 1%;">

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>
                    
                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                     </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

            </div>
            </div>

        </div>

        <!-- the second row only has 2 movies and 5 empty cards -->
        <div class="row">

            <div class="container">

            <div class="card-deck" style="margin-top: 1%;">

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                    </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem;">
                    <!-- REMOVE BUTTON -->
                    <a href="#" class="btn btn-warning rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 15px;">-</a>

                    <img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                     </div>
                </div>

                <div class="card" style="width:10rem; height: 16rem; border: none">
                   
                </div>

                <div class="card" style="width:10rem; height: 16rem; border: none">
                   
                </div>

                <div class="card" style="width:10rem; height: 16rem; border: none">
                    
                </div>

                <div class="card" style="width:10rem; height: 16rem; border: none">
                    
                </div>

                <div class="card" style="width:10rem; height: 16rem; border: none">
                    
                </div>

            </div>
            </div>

        </div>

        <!-- THIS PART ONLY APPEARS TO THE USER -->
        <div class="row" style="margin-top: 2%;">
            <div class="container">
                
                <div class="row">

                    <div class="col-sm" style="position: relative; right: 0; height: 50px;">
                        <a href="#" class="btn btn-warning" role="button" style=" font-weight: bold;">Add movie</a>
                    </div>

                    <!-- DELETE THE CURRENT LIST -->
                    <!-- UPON CLICKING THE DELETE LIST BUTTON, USERS GET BACK TO THE WATCHLISTS PAGE -->
                    <div class="col-sm" style="height: 50px; position: relative; right: 0;">
                        <form>
                            <a href="#" class="btn btn-warning" role="button" style="position: absolute; font-weight: bold;">Delete List</a>
                        </form>
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
