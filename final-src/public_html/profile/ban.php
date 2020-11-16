<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (isset($_GET['id']) &&
    ctype_digit($_GET['id']) &&
    is_logged_in()
   ) {

    $status = $_SESSION['user']->ban_user($_GET['id']);
    if ($status != BANNED && $status != SELF_BAN) {
        header("Location: /?error=2");
        exit();
    }

    header("Location: /profile/?id=" . $_GET['id'] ."&status=$status");
    exit();

} else {
    header("Location: /");
    exit();
}

?>