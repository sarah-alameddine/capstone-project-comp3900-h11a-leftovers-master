<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/MovieBuilder.php');
require_once(__DIR__ . '/../../private_html/classes/User.php');

session_start();

if (isset($_POST['movie_id']) &&
    isset( $_SESSION['user'] ) &&
    isset($_POST['rating']) &&
    isset($_POST['comment'])
    ) {

    echo("in here");
    $mb = new MovieBuilder();
    $movie = $mb->get_movie_by_id($_POST['movie_id']);
    if ($movie === FALSE) {
        echo("Movie not found");
        exit();
    } else if ($movie === DATABASE_ERROR) {
        echo("An internal error occured");
        exit();
    }
    $review_id = $movie->user_added_review($_SESSION['user']->get_id(), $_POST['rating'], $_POST['comment']);

    header('Location: /movies/title.php?id=' . $movie->get_id());
    exit();

} else {
    exit('Internal error');
}

?>