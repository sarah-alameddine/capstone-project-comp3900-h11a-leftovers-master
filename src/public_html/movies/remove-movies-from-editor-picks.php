<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/classes/AdminDashboard.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (is_logged_in() &&
    isset($_GET['id']) &&
    ctype_digit($_GET['id']) &&
    $_SESSION['user']->is_admin()) {

    $ad = new AdminDashboard();

    $status = $ad->remove_movie_from_editor_picks($_GET['id']);

    header("Location: /movies/title.php?id=" . $_GET['id'] ."&status=" . REMOVED);
    exit();

} else {
    header("Location: /");
    exit();
}

?>