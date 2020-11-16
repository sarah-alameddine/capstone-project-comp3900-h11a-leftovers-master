<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (is_logged_in() && isset($_POST['curr_pass'])) {

    // Email & pass
    if (!empty($_POST['new_email']) &&
        !empty($_POST['new_pass1']) &&
        !empty($_POST['new_pass2'])) {
        
        $status = $_SESSION['user']->update_details($_POST['curr_pass'],
                                                    $_POST['new_email'],
                                                    $_POST['new_pass1']);
        
    // Email only
    } else if (!empty($_POST['new_email'])) {
        
        $status = $_SESSION['user']->update_details($_POST['curr_pass'],
                                                    $_POST['new_email'],
                                                    NULL);

    // pass only
    } else if (!empty($_POST['new_pass1']) &&
               !empty($_POST['new_pass2'])) {
        
        if ($_POST['new_pass1'] != $_POST['new_pass2']) {
            $status = PASSWORD_DONT_MATCH;
        } else {

            $status = $_SESSION['user']->update_details($_POST['curr_pass'],
                                                        NULL,
                                                        $_POST['new_pass1']);
        }


    } else {

        header("Location: /profile/update-details.php?id=" .
                $_SESSION['user']->get_id() . "&status=" . PASS_OR_EMAIL);
        exit();

    }

    header("Location: /profile/update-details.php?id=" .
            $_SESSION['user']->get_id() . "&status=$status");
    exit();

} else {
    header("Location: /");
    exit();
}