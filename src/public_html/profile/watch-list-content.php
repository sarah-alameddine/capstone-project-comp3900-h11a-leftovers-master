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

        <!-- CONTENT OF A PLAYLIST -->
        <div class="container" style="margin-top: 1%;">

            <div class="row equal in-line">

                <div class="card" style="width:10rem; margin-right: 5px; margin-left: 5px; margin-bottom: 10px; border: none;">
                    <!-- REMOVE BUTTON (this button only be seen by the list owner)-->
                    <a href="#" class="btn btn-outline-danger rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 20px;">X</a>
                    
                    <img src="/images/joker.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="padding: 0;">
                        <a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                        <p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
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
