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
                <div class="row" style="position: relative; top: 30%; left: 2%; font-size: 30px; color: white;"> USERNAME
                </div>
            </div>

        </div>
        
        <div class="row" style="border-bottom: 1px solid #182628;">
            <div class="container">
                
                <div class="row">

                    <div class="col-2" style="height: 40px; left: 30%;">
                        <a href="#" class="badge badge-warning" style="position: relative; top: 15%;">WATCH LISTS</a>
                    </div>

                    <div class="col-2" style="height: 40px; left: 30%;">
                        <a href="/wishlist.php" class="badge badge-warning" style="position: relative; top: 15%;">WISHLIST</a>
                    </div>
                       
                    <div class="col-2" style="height: 40px; left: 30%;">
                        <a href="#" class="badge badge-warning" style="position: relative; top: 15%;">BAN LIST</a>
                    </div>

                </div>

            </div>
        </div>

        <!-- watch list content -->
        <div class="row">
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm" style="height: 150px;">
                        <span style="position: relative; top: 15%; font-weight: bold; font-size: 20px;"> My Lists </span>
                    </div>
                
                    <div class="col-sm" style="height: 50px;">
                        <a href="#" class="btn btn-warning" role="button" style="position: absolute; top: 35%; font-weight: bold;  right: 0">Create List</a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Watch lists if there are any -->
        <!-- logic similar to wish list; 3 cards(list) into a card-deck -->
        <!-- a card-deck is inside a container, the containter inside a row -->
        <!-- each row must have 3 list, if there's not enough 3 list in a row, leftover is fill by empty card -->

        <div class="row" style="margin-bottom: 1%;">

            <div class="container">

                <div class="card-deck">
                    
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">List name</h5>
                            <p class="card-text">Number of items in the list</p>
                            <a href="/watch-list-content.php" class="card-link">View list</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">List name</h5>
                            <p class="card-text">Number of items in the list</p>
                            <a href="#" class="card-link">View list</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">List name</h5>
                            <p class="card-text">Number of items in the list</p>
                            <a href="#" class="card-link">View list</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- example of a "not full" row -->
        <div class="row" style="margin-bottom: 1%;">

            <div class="container">

                <div class="card-deck">
                    
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">List name</h5>
                            <p class="card-text">Number of items in the list</p>
                            <a href="#" class="card-link">View list</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; border: none;">

                    </div>

                    <div class="card" style="width: 18rem; border: none;">
                        
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
