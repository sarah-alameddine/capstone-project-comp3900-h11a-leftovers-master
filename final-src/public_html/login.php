<?php
// This is for debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../private_html/html-templates/global/session.php');

if (is_logged_in()) {
    header('Location: /');
    exit();
}

require_once(__DIR__ . '/../private_html/classes/Authentication.php');
$error = FALSE;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) &&
        isset($_POST['password'])
       ) {

        $auth = new Authentication();
        $user = $auth->login($_POST['email'], $_POST['password']);

        if ($user === EMAIL_ILLEGAL) {
            $error = 'Please provide a valid email address';
        } else if ($user === FALSE) {
            $error = 'Incorrect Password';
        } else {
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

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Other CSS links -->
        <link rel="stylesheet" href="/assets/css/homepagestylev0.2.css">

        <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

        <!-- style for login body -->
        <style>
            #login-body{
                background-color:white;
              }
              .form-row{
                margin-left: 25%;
                margin-right: 25%;
              }
        </style>

        <title>Login</title>
    </head>
    <body id="login-body">
    
        <!-- WEBSITE HEADER -->
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php');
        if (isset($_SESSION['user'])) {
            header('Location: /');
            exit();
        }
        ?>

        <!-- CONTENT OF THE LOGIN PAGE -->
        <div class="container" style="margin-top: 2%;">
       
            <div class="col-sm">
                
                <div class="form-row">
                    <div class="col">
                      <span style="color:#182628; font-weight:bold; font-size: 30px; margin-left: 28%;">Login to your account</span>
                    </div>
                </div>
                
                <!-- INPUT SECTION -->
                <form action="" method="POST">
                    
                    <!-- ERROR MESSAGES SECTION -->
                    <div class="form-row">
                        <div class="col">
                            <?php if ($error !== FALSE) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo($error); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- EMAIL SECTION -->
                    <div class="form-row">
                        <div class="col">
                            <label for="inputEmail" class="input-title"><i class="fas fa-envelope"></i>Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="" name="email" style="width: 100%;">
                        </div>
                    </div>

                    <!-- PASSWORD SECTION -->
                    <div class="form-row">
                        <div class="col">
                            <label for="inputPassword" class="input-title"><i class="fas fa-key"></i>Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="" name="password" style="width: 100%;">
                        </div>
                    </div>
            
                    <!-- BUTTONS SECTION -->
                    <div class="form-row">
                        <div class="col" style="margin-left: 25%; margin-top: 5%;">
                            <button type="submit" class="fancy-button bg-gradient1 input-button">LOG IN</button>
                            <span style="font-size: 15px;">or</span>
                            <a class="btn btn-link fancy-button bg-gradient1 input-button" href="/signup.php" role="button">Create a New Account</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        
        <!-- FOOTER SECTION -->
        <footer style="position: absolute; margin-top: 20%;">
            <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer-v1.php'); ?>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>










   
