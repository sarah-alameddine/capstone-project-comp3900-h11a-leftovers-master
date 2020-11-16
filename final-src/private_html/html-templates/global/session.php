<?php
require_once(__DIR__ . '/../../classes/User.php');

// This is required to save authenication across pages
session_start();

/*
 * @return true if user is logged in, else false
 */
function is_logged_in() {
    return isset($_SESSION['user']);
}
?>