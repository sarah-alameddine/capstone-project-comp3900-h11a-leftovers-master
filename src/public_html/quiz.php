<?php

$error = FALSE;

function add_term($answer, $genre) {
    if ($answer == 1) {
        return $genre;
    }
    return "";
}

if (isset($_POST['submit']) &&
    isset($_POST['scary']) &&
    isset($_POST['romance']) &&
    isset($_POST['action']) &&
    isset($_POST['comedy'])
   ) {

    $term = add_term($_POST['scary'], " horror ");
    $term .= add_term($_POST['romance'], " romance ");
    $term .= add_term($_POST['action'], " action ");
    $term .= add_term($_POST['comedy'], " comedy ");
    
    if ($term == "") {
        $error = "Looks like we don't have any suggestions for you :(";
    } else {
        header("Location: /search.php?term=$term");
        exit();
    }

} else if (isset($_POST['submit'])) {
    $error = "Please answer all the questions";
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
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon-2.ico"/>

    <!-- style for login body -->
    <style>
      body {
        background-color: black;
      }

      .form-row{
        margin-left: 25%;
        margin-right: 25%;
      }

     .textColor{
      color: #F2F2F2;
     }
     
     .label{
      color: #F2F2F2;
     }
    </style>

    <title>Quizz Page</title>
  </head>
  <body>
    
    <!-- website header -->
    <div class="row" style="margin-bottom: 1%">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>
    </div>

    <!-- body -->
    <div class="container">
       
            <div class="col">
                
               <div class="form-row" style="margin-top: 2%;" class="py-4">
                <div class="col" style="left: 10%;">
                  <span style="color:#F2F2F2; font-weight:bold; font-size: 30px; margin-left: 15%">Watch To Watch Quiz</span> 
                </div>
              </div>

              <hr style="height:1px;border-width:0;background-color:#6C757D">

              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <!-- error message if not answer all questions -->
                  <div class="col">
                      <?php if ($error !== FALSE) { ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo($error); ?>
                      </div>
                      <?php } ?>
                  </div>

                </div>

                <!-- question 1 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  
                  <div class="col" style="left: 25%;">
                    <label for="inputTitle" style="font-weight: bold;color:#F2F2F2;">Do you like being scared?</label>
                    
                    <div class="row">

                      <div class="col" >
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="scaryQ1" name="scary" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="scaryQ1" style="color:#03D8A9">Yes</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="scaryQ2"  name="scary" class="custom-control-input" value="0">
                          <label class="custom-control-label" for="scaryQ2" style="color:#03D8A9">No</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 2 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col" style="left: 25%;">
                    <label for="inputTitle" style="font-weight: bold;color:#F2F2F2;">Are your in love?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="romanceQ1" name="romance" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="romanceQ1" style="color:#03D8A9">Yes</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="romanceQ2"  name="romance" class="custom-control-input" value="0">
                          <label class="custom-control-label" for="romanceQ2" style="color:#03D8A9">No</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 3 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col" style="left: 25%;">
                    <label for="inputTitle" style="font-weight: bold;color:#F2F2F2;">Do you like being on the edge of your seat?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="actionQ1" name="action" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="actionQ1" style="color:#03D8A9">Yes</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="actionQ2"  name="action" class="custom-control-input" value="0">
                          <label class="custom-control-label" for="actionQ2" style="color:#03D8A9">No</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 4 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col" style="left: 25%;">
                    <label for="inputTitle" style="font-weight: bold;color:#F2F2F2;">Do you need a good laugh?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="comedyQ1" name="comedy" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="comedyQ1" style="color:#03D8A9">Yes</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="comedyQ2"  name="comedy" class="custom-control-input" value="0">
                          <label class="custom-control-label" for="comedyQ2" style="color:#03D8A9">No</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                  </div>
                </div>

                <div class="form-row">
                  <div class="col" style="left: 45%;">
                    <button type="submit" name="submit" value="1" class="btn btn-primary" style="background-color: #182628;">Submit quiz</button>
                  </div>

                </div>
              </form>
              

            </div>

    </div>
    
 
    <!-- footer -->
    <div class="row" style="margin-top: 5%">
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>










   

