<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (isset($_GET['id']) &&
    ctype_digit($_GET['id']) &&
    is_logged_in()
   ) {
    
    $status = $_SESSION['user']->delete_playlist($_GET['id']);
    header("Location: /profile/watch-list.php?id=" . $_SESSION['user']->get_id() . "&status=$status");
    exit();

} else {
    header("Location: /");
    exit();
}


?>