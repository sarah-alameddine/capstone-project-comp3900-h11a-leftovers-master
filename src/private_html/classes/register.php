<?php

require_once(__DIR__ . '/Authentication.php');


$error = FALSE;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) &&
        isset($_POST['email']) &&
        isset($_POST['password'])
       ) {

        $auth = new Authentication();
        $status = $auth->create_account($_POST['username'], $_POST['email'], $_POST['password'], time(), FALSE);

        if ($status === DATABASE_ERROR) {
            $error = 'An internal error occured';
        } else if ($status === USERNAME_EMAIL_ALREADY_REGISTERED) {
            $error = 'Both the email and userame are already registered.';
        } else if ($status === EMAIL_ALREADY_REGISTERED) {
            $error = 'An account with the same email address already exists.';
        } else if ($status === USERNAME_ALREADY_REGISTERED) {
            $error = 'The username you have provided is taken.';
        } else if ($status === ACCOUNT_ALREADY_REGISTERED) {
            $error = 'Username/Email you have provided is taken.';
        } else if ($status === USERNAME_ILLEGAL) {
            $error = 'Usernames can only contain letters and numbers.';
        } else if ($status === EMAIL_ILLEGAL) {
            $error = 'Please provide a valid email address';
        } else if ($status === PASSWORD_ILLEGAL) {
            $error = 'Passwords must contain at least 1 uppercase letter, at least 1 lowercase letter, at least 1 digit and at least 1 special character.';
        } else {
            echo("You reigstered successfully. Your user id is $status");
            exit();
        }

    } else {
        $error = 'Please ensure you have entered information to all of the fields.';
    }
}


echo($error);
?>

<form action="" method="POST">
  <label for="username">username:</label><br>
  <input type="text" id="username" name="username" value="John"><br>

  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@gmail.com"><br>

  <label for="password">password:</label><br>
  <input type="text" id="password" name="password" value="#Mypassword123"><br>

  <input type="submit" value="Submit">
</form> 