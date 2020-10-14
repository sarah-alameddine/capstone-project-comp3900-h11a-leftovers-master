<?php

require_once(__DIR__ . '/../private_html/classes/Authentication.php');
$error = FALSE;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) &&
        isset($_POST['password'])
       ) {

        $auth = new Authentication();
        $user_id = $auth->login($_POST['email'], $_POST['password']);

        if ($user_id === EMAIL_ILLEGAL) {
            $error = 'Please provide a valid email address';
        } else if ($user_id === FALSE) {
            $error = 'Incorrect Password';
        } else {
            session_start();
            $_SESSION['user_id'] = $user_id;
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

    <!-- some CSS for the login page -->
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .bground{
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        z-index: -1;
      }

      @media screen and (max-width: 900px){
        .bground{
          display: none;
        }
      }

    </style>

    <title>Login</title>
  </head>
  <body>
  	<!-- website header -->
  	<?php require_once(__DIR__ . '/../private_html/html-templates/global/nav.php'); ?>

  	<!-- content of the login page -->
  	<img class="bground" src="assets/images/background-login.svg">
  
    <div class="container">
      <div class="row">
        <div class="col-sm">
            <!-- error message -->
            <div class="form-row" style="margin-top: 25%; margin-right: 25%;">
                <?php if ($error !== FALSE) { ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo($error); ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm">
  
          <div class="form-row">
            <div class="col" style="left: 25%;">
              <img src="#" alt="logo" style="width: 40%;">
            </div>
          </div>  
          <div class="form-row">
            <div class="col" style="left: 25%;">
              <img src="assets/images/welcome-login.svg" style="width: 40%;">
            </div>
          </div>
          
          <form action="" method="POST">
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
            <div class="col-auto">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">
                    Remember me
                </label>
              </div>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">LOG IN</button>
            </div>
            <div class="col">
              <a href="#" class="badge badge-secondary">FORGOT YOUR PASSWORD?</a>
            </div>
          
          </form>
        </div>
      </div>
    </div>
    
    <!-- footer -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer.php'); ?>

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

