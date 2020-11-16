<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {

    $status = $_SESSION['user']->add_movie_to_wishlist($_GET['id']);

    header("Location: /movies/title.php?id=" . $_GET['id'] ."&status=$status");
    exit();

} else {
    header("Location: /");
    exit();
}

?>