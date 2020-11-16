<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/MovieBuilder.php');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (is_logged_in() &&
    isset($_POST['movie_id']) &&
    isset($_POST['rating']) &&
    isset($_POST['comment'])
    ) {

    $mb = new MovieBuilder();
    $movie = $mb->get_movie_by_id($_POST['movie_id']);
    if ($movie === FALSE) {
        header("Location: /?error=6");
        exit();
    } else if ($movie === DATABASE_ERROR) {
        header("Location: /?error=4");
        exit();
    }
    $review_id = $movie->user_added_review($_SESSION['user']->get_id(), $_POST['rating'], $_POST['comment']);

    $status = REVIEW_ADDED;
    if ($review_id === FALSE) {
        $status = INVALID_REVIEW;
    }

    header('Location: /movies/title.php?id=' . $movie->get_id() . "&status=$status");
    exit();

} else {
    header('Location: /');
    exit();
}

?>