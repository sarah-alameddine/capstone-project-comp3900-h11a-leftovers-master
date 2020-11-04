<?php

require_once(__DIR__ . '/../private_html/classes/Authentication.php');

$error = FALSE;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) &&
        isset($_POST['email']) &&
        isset($_POST['password'])
       ) {

        $auth = new Authentication();
        $user = $auth->create_account($_POST['username'], $_POST['email'], $_POST['password'], time(), FALSE);

        if ($user === DATABASE_ERROR) {
            $error = 'An internal error occured';
        } else if ($user === USERNAME_EMAIL_ALREADY_REGISTERED) {
            $error = 'Both the email and userame are already registered.';
        } else if ($user === EMAIL_ALREADY_REGISTERED) {
            $error = 'An account with the same email address already exists.';
        } else if ($user === USERNAME_ALREADY_REGISTERED) {
            $error = 'The username you have provided is taken.';
        } else if ($user === ACCOUNT_ALREADY_REGISTERED) {
            $error = 'Username/Email you have provided is taken.';
        } else if ($user === USERNAME_ILLEGAL) {
            $error = 'Usernames can only contain letters and numbers. Must be 3-30 characters long';
        } else if ($user === EMAIL_ILLEGAL) {
            $error = 'Please provide a valid email address';
        } else if ($user === PASSWORD_ILLEGAL) {
            $error = 'Passwords must contain at least 1 uppercase letter, at least 1 lowercase letter, at least 1 digit and at least 1 special character.';
        } else {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: /');
            exit();
        }

    } else {
        $error = 'Please ensure you have entered information to all of the fields.';
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

    <!-- some CSS for signup -->
    <style>
      .form-row{
        margin-left: 10%;
        margin-right: 10%;
      }
    </style>

    <title>SignUp</title>
  </head>
  <body>

    <!-- website header -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php');
    if (isset($_SESSION['user'])) {
        header('Location: /');
        exit();
    }
    ?>

    <!-- content of the signup page -->
        <!-- signup body -->
    <div class="container" style="margin-top: 2%">
      <div class="row">
        <div class="col-sm border border-top-0 border-bottom-0 border-left-0">
            
           <div class="form-row">
            <div class="col">
              <span style="color:#182628; font-weight:bold; font-size: 30px; margin-left: 5%">Welcome to FilmFinity</span> 
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <!-- error message -->
              <?php if ($error !== FALSE) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo($error); ?>
              </div>
              <?php } ?>
            
            </div>
          </div>  
          <form action="" method="POST">
            <div class="form-row">
              <div class="col">
                <label for="inputUsername"><i class="fas fa-envelope" style="padding: 0 2px;"></i>Username</label>
                <input type="username" class="form-control" id="iinputUsername" placeholder="" name="username">  
              </div>
            </div>  
            <div class="form-row">
              <div class="col">
                <label for="inputEmail"><i class="fas fa-envelope" style="padding: 0 2px;"></i>Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="" name="email">  
              </div>
            </div>  
            <div class="form-row">
              <div class="col"> 
                <label for="inputPassword"><i class="fas fa-key" style="padding: 0 2px;"></i>Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="" name="password">  
              </div>
            </div>

            <div class="form-row" style="margin-top: 5%;">
              <div class="col">
                <button type="submit" class="btn btn-primary" style="background-color: #182628;">CREATE YOUR ACCOUNT</button>
              </div>
            </div>
            
          </form>

        </div> 

        <!-- left column -->
        <div class="col-sm" >
          <div class="form-row">
            <div class="col">  
              <span style="font-size: 28px; color:#182628 font-weight: bold;">Benefits of being a member</span>
            </div>
          </div>

            <div class="form-row">
              <div class="col">
                <hr>
                <span style="font-size: 18px; font-weight: bold;">Customed Recommendations</span><br>
                <span style="font-size: 15px;">Movies recommendations based on your taste.</span>
              </div>   
            </div>  

            <div class="form-row">
              <div class="col">
                <br>
                <span style="font-size: 18px; font-weight: bold;">Personal lists</span><br>
                <span style="font-size: 15px;">Create your own watchlist and wishlist.</span>
              </div>   
            </div>  

            <div class="form-row">
              <div class="col">
                <br>
                <span style="font-size: 18px; font-weight: bold;">Contribute to FilmFinity</span><br>
                <span style="font-size: 15px;">Review and rate the movies.</span><br>
                <span style="font-size: 15px;">Shareing your thoughts on a movie with others.</span>
              </div>   
            </div>    

          </div> 

        </div>  

      </div>
    </div>

    <!-- footer -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>