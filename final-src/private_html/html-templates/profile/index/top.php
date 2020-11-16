<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../../classes/Profile.php');
require_once(__DIR__ . '/../../../classes/User.php');

if (!isset($_GET['id'])) {
    header("Location: /?error=1");
    exit();
}

$profile = new Profile($_GET['id']);
$profile_u = $profile->get_info();
if ($profile_u === FALSE) {
    header("Location: /?error=1");
    exit();
} else if ($profile_u === DATABASE_ERROR) {
    header("Location: /?error=2");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>
  
    <style>
        #banner{
            position: relative;
            background-image: url(https://images.unsplash.com/photo-1502252430442-aac78f397426?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc1MjQyfQ&auto=format&fit=crop&w=3150&q=80);
            background-size: cover;
            padding: 1.5em;
            height: 15em
        }
        body {
            background-color: black;
        }

    </style>

    <title>Profile page</title>
  </head>

  <body>
    
    <div class="row">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../../global/nav-2.php'); ?>
    </div>

    <div class="container">

    <?php if (isset($_GET['status'])) { ?>

        <div class="row">
            <div class="container">
                <div class="alert alert-primary" role="alert">
                    <?php if ($_GET['status'] == BANNED) { ?>
                        You have banned <?php echo($profile_u->get_username()); ?>
                    <?php } else if ($_GET['status'] == UNBANNED) { ?>
                        You have successfully unbanned the user
                    <?php } else if ($_GET['status'] == SELF_BAN) { ?>
                        You cannot ban/unban yourself
                    <?php } else if ($_GET['status'] == REMOVED) { ?>
                        Movie was removed from wishlist
                    <?php } else if ($_GET['status'] == PLAYLIST_TOO_LONG) { ?>
                        The max characters length for the title is 64 and max character lengeth for the description is 1024
                    <?php } else if ($_GET['status'] == UNABLE_TO_ADD) { ?>
                        We weren't able to add your request to the database
                    <?php } else if ($_GET['status'] == DELETED_LIST) { ?>
                        Successfully deleted the watchlist
                    <?php } else if ($_GET['status'] == NOT_OWNER) { ?>
                        You can't do that if you aren't the owner
                    <?php } else if ($_GET['status'] == PASS_OR_EMAIL) { ?>
                        Please enter either the a new password with the retyped password or new email
                    <?php } else if ($_GET['status'] == EMAIL_ILLEGAL) { ?>
                        Please provide a valid new email address
                    <?php } else if ($_GET['status'] == PASSWORD_ILLEGAL) { ?>
                        Please provide a valid new password
                    <?php } else if ($_GET['status'] == INCORRECT_PASS) { ?>
                        Your current password is incorrect
                    <?php } else if ($_GET['status'] == DETAILS_UPDATED) { ?>
                        Your details have been successfully updated
                    <?php } else if ($_GET['status'] == PASSWORD_DONT_MATCH) { ?>
                        Your new password and retyped password do not match
                    <?php } ?>



                </div>
            </div>
        </div>

    <?php } ?>
    
    
    
    <div id="banner" class="row" >
        
        <div class="col-md-2" style="height: 240px; position: relative;">
            <div class="rounded-circle" style="background-color: #B9770E; width: 120px; height: 120px; position: relative; left: 20%; top: 25%;">
                
                <!-- THIS IS THE FIRST LETTER OF THE USERNAME -->
                <div class="row" style="position: relative; top: 12%; left: 47%; font-size: 60px; color: white;"> <?php echo($profile_u->get_first_letter(TRUE)); ?>
                </div>

            </div>
        </div>

        <div class="col-md-10">
            
            <!-- FILL THE USERNAME IN -->
            <div class="row" style="position: relative; top: 30%; left: 2%; font-size: 40px; font-weight: bold; color: white;"> <?php echo($profile_u->get_username()); ?>
            </div>
            
            <?php if (is_logged_in() && !$_SESSION['user']->is_user_same($profile_u->get_id())) { ?>
                <!-- If current user hasnt ban this user, ban button will not display otherwise remove ban button will display -->
                <div class="row" style="position: relative; top: 35%; left: 2%; font-size: 30px; color: white;">

                    <?php if ( $_SESSION['user']->check_ban($profile_u->get_id()) ) { ?>
                        <a href="/profile/unban.php?id=<?php echo($profile_u->get_id()); ?>" class="btn btn-warning" role="button" aria-pressed="true">Unban this user</a>

                    <?php } else { ?>
                        <a href="/profile/ban.php?id=<?php echo($profile_u->get_id()); ?>" class="btn btn-warning" role="button" aria-pressed="true">Ban this user</a>
                    <?php } ?>

                </div>
            <?php } ?>

        </div>

    </div>
        
    <div class="row" style="border-bottom: 1px solid #182628;">
        <div class="container">
            
            <div class="row" style="margin-top: 1%;">

                <div class="col-2" style="height: 7vh; left: 30%;">
                    <a href="/profile/watch-list.php?id=<?php echo($profile_u->get_id()); ?>" class="badge badge-pill badge-info" style="font-size:2vh; background-color:#08755a; position: relative; top: 15%;"> Watch List </a>
                </div>

                <div class="col-2" style="height: 7vh; left: 32%;">
                    <a href="/profile/wishlist.php?id=<?php echo($profile_u->get_id()); ?>" class="badge badge-pill badge-info" style="font-size:2vh; background-color:#08755a; position: relative; top: 15%;"> Wishlist </a>
                </div>
                
                <?php if ( is_logged_in() && $_SESSION['user']->is_user_same($profile_u->get_id()) ) { ?>

                    <!-- ban list is only be viewable by the owner of the ban list -->
                    <div class="col-2" style="height: 7vh; left: 32%;">
                        <a href="/profile/ban-list.php?id=<?php echo($profile_u->get_id()); ?>" class="badge badge-pill badge-info" style="font-size:2vh; background-color:#08755a; position: relative; top: 15%;">My Ban List</a>
                    </div>

                <?php } ?>

            </div>

        </div>
    </div>

