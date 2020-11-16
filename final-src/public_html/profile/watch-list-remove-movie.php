<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (isset($_GET['watchlist']) &&
    isset($_GET['movie']) &&
    ctype_digit($_GET['watchlist']) &&
    ctype_digit($_GET['movie']) &&
    is_logged_in()
   ) {

    $status = $_SESSION['user']->remove_movie_from_playlist($_GET['watchlist'], $_GET['movie']);
    
    if ($status !== NOT_OWNER && $status !== MOVIE_IN_DB) {
        $status = REMOVED;
    }

    header('Location: /profile/watch-list-content.php?id=' . $_GET['watchlist'] . "&status=$status");
    exit();

} else {
    header("Location: /");
    exit();
}


?>