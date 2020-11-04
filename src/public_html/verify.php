<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../private_html/classes/Authentication.php');
$error = FALSE;
if (isset($_GET['pin']) && isset($_GET['email'])) {

    $auth = new Authentication();
    echo("Work in progress");

} else {
    exit('You need to request a password request first');
}

?>