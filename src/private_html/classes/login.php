<?php

require_once(__DIR__ . '/Authentication.php');


$error = FALSE;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) &&
        isset($_POST['password'])
       ) {

        $auth = new Authentication();
        $status = $auth->login($_POST['email'], $_POST['password']);

        if ($status === EMAIL_ILLEGAL) {
            $error = 'Please provide a valid email address';
        } else if ($status === FALSE) {
            $error = 'Incorrect Password';
        } else {
            echo("You logged in successfully. Your user id is $status");
            exit();
        }

    } else {
        $error = 'Please ensure you have entered information to all of the fields.';
    }
}


echo($error);
?>

<form action="" method="POST">
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@gmail.com"><br>

  <label for="password">password:</label><br>
  <input type="text" id="password" name="password" value="#Mypassword123"><br>

  <input type="submit" value="Submit">
</form> 