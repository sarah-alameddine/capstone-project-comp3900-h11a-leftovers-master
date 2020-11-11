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
    $movie_id = $ad->add_movie($_POST['title'], $_POST['release_date'], $_POST['description'], $_FILES['image'], $_POST['genres'], $_POST['directors'], $_POST['cast']);
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
                
               <div class="form-row">
                <div class="col">
                  <span style="color:#182628; font-weight:bold; font-size: 30px; margin-left: 15%">Add a new movie</span> 
                </div>
              </div>
              
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <!-- error message -->
                  <div class="col">
                      <?php if ($error !== FALSE) { ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo($error); ?>
                      </div>
                      <?php } ?>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="inputTitle">Title</label>
                    <input type="text" class="form-control" id="inputTitle" placeholder="" name="title">  
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputReleaseDate">Release Date</label>
                    <input type="date" class="form-control" id="inputReleaseDate" placeholder="" name="release_date">  
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputImage">Image</label>
                    <input type="file" class="form-control" id="inputImage" placeholder="" name="image">  
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputDesc">Description</label>
                    <textarea rows="4" cols="50" type="text" class="form-control" id="inputDesc" placeholder="" name="description"></textarea>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputGenre">Genres</label>

                    <?php
                        $ad = new AdminDashboard();
                        $genres = $ad->get_genres();

                        foreach ($genres as $row => $val) {
                    ?>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="genres[]" value="<?php echo($val['id']); ?>" id="genre<?php echo($val['name']); ?>">
                          <label class="form-check-label" for="genre<?php echo($val['name']); ?>"><?php echo($val['name']); ?></label>
                        </div>

                    <?php } ?>

                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputDirector">Directors</label>
                    <input type="text" class="form-control" id="inputDirector" placeholder="" name="directors">  
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="inputCast">Cast</label>
                    <input type="text" class="form-control" id="inputCast" placeholder="" name="cast">  
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary" style="background-color: #182628;">Add Movie</button>
                  </div>

                </div>
              </form>
              

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










   

