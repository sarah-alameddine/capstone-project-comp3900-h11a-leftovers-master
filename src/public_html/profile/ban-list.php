<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../../private_html/classes/AdminDashboard.php');

$error = FALSE;
if (
    isset($_POST['title']) &&
    isset($_POST['release_date']) &&
    isset($_POST['description']) &&
    isset($_FILES['image']) &&
    isset($_POST['genres']) &&
    isset($_POST['directors'])
   ) {

    $ad = new AdminDashboard();
    $movie_id = $ad->add_movie($_POST['title'], $_POST['release_date'], $_POST['description'], $_FILES['image'], $_POST['genres'], $_POST['directors']);
    if ($movie_id === FALSE) {
        $error = "Images must be JPG, JPEG, PNG or GIF and no more than 5mb in size";
    } else if ($movie_id === DATABASE_ERROR) {
        $error = "An internal error occoured.";
    } else {
        $error = "Added movie " . $_POST['title'];
    }

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

    <!-- style for login body -->
    <style>
      .form-row{
        margin-left: 25%;
        margin-right: 25%;
      }
    </style>

    <title>Add Movie</title>
  </head>
  <body>
    
    <!-- website header -->
    <div class="row" style="margin-bottom: 1%">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../../private_html/html-templates/global/nav-2.php'); ?>
    </div>

    <!-- content of the login page -->
    <!-- login body -->
    <div class="container">
       
            <div class="col-sm">
                
              <div class="row">
                <div class="col text-center">
                  <span style="color:#182628; font-weight:bold; font-size: 30px; width: 100%; display:inline;">People you have banned</span> 
                </div>
              </div>

            </div>
                
            <div class="container border border-light" style="margin-left: 25%; width: 50%; margin-top: 10px; border-width: 5px !important;">  

              <div class="row" style="margin-top: 5%; margin-bottom: 5%">

                  <div class="col">
                    
                    <a href="A LINK TO THE RESPECTIVE USER PROFILE" class="btn btn-warning rounded-circle" style="position: absolute; font-weight: bold; font-size: 15px; display: block; width: 38px; height: 38px;">A</a>
                    
                    <a href="A LINK TO THE RESPECTIVE USER PROFILE" style="position: relative; top: 20%; left: 50px; color: black;">USERNAME1</a>
                    <!-- Remove people from ban list -->
                    <a href="#" style="position: relative; top: 20%; float: right; font-size: 15px;">[remove]</a>

                  </div>

              </div> 

              <div class="row" style="margin-top: 5%; margin-bottom: 5%">

                  <div class="col">
                    
                    <a href="A LINK TO THE RESPECTIVE USER PROFILE" class="btn btn-warning rounded-circle" style="position: absolute; font-weight: bold; font-size: 15px; display: block; width: 38px; height: 38px;">F</a>
                    
                    <a href="A LINK TO THE RESPECTIVE USER PROFILE" style="position: relative; top: 20%; left: 50px; color: black;">USERNAME2</a>
                    <!-- Remove people from ban list -->
                    <a href="#" style="position: relative; top: 20%; float: right; font-size: 15px;">[remove]</a>

                  </div>

              </div> 

            </div> 

            <div class="container" style="margin-top: 3%; margin-bottom: 5%; margin-left: 25%;">
              You have banned .... people
            </div>  
    </div>
    
 
    <!-- footer -->
    <div class="row">
        <?php require_once(__DIR__ . '/../../private_html/html-templates/global/footer-v1.php'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>










   

