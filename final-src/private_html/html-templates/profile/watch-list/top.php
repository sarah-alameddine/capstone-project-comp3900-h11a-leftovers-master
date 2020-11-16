<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../../../classes/PlaylistBuilder.php');
require_once(__DIR__ . '/../../global/session.php');

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {

    $pb = new PlaylistBuilder($_GET['id']);
    $pl = $pb->get_playlist();
    if ($pl === FALSE) {
        header('Location: /?error=3');
        exit();
    }
} else {
    header('Location: /?error=3');
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
    <!--
    <link rel="stylesheet" href="/assets/css/homepagestyle.css">
    <script src="/assets/js/homepage.js"></script>
    -->

    <title>Watch list content</title>
    <style>
        #banner{
            position: relative;
            background-image: url(https://images.unsplash.com/photo-1502252430442-aac78f397426?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc1MjQyfQ&auto=format&fit=crop&w=3150&q=80);
            background-size: cover;
            padding: 1.5em;
            height: 15em
        }
        .body{
            background-color: black;
        }
    </style>
  </head>
  <body>
    
    <div class="row">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../../global/nav-2.php'); ?>
    </div>

    <div class="container">      

        <?php if(isset($_GET['status'])) { ?>
            <div class="row">
                <div class="container">
                    <?php if ($_GET['status'] == NOT_OWNER) { ?>
                        <div class="alert alert-primary" role="alert">You are not the owner of this playlist</div>
                    <?php } else if ($_GET['status'] == DATABASE_ERROR) { ?>
                        <div class="alert alert-primary" role="alert">There was a database error</div>
                    <?php } else if ($_GET['status'] == MOVIE_IN_DB) { ?>
                        <div class="alert alert-primary" role="alert">This movie is already in this playlist</div>
                    <?php } else if ($_GET['status'] == ADDED) { ?>
                        <div class="alert alert-primary" role="alert">Movie added to playlist</div>
                    <?php } else if ($_GET['status'] == REMOVED) { ?>
                        <div class="alert alert-primary" role="alert">Movie removed from playlist</div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        
        
        <div id="banner" class="row" style="background-color: #182628; opacity: 0.8;">
            <div class="col-md-2" style="height: 240px; position: relative;">
                <div class="rounded-circle" style="background-color: #B9770E; width: 120px; height: 120px; position: relative; left: 20%; top: 25%;">
                    
                    <div class="row" style="position: relative; top: 12%; left: 47%; font-size: 60px; color: white;"> <?php echo($pl->get_first_letter(TRUE)); ?>
                    </div>

                </div>
            </div>

            <div class="col-md-10">

                <div class="container" style="position: relative; top: 15%">
                    
                    <div class="row" style="font-weight:bold; font-size: 40px;">
                        <a href="<?php echo($pl->get_owner_profile_link()); ?>" style="color: white;">List creator: <?php echo($pl->get_owner_username()); ?></a>
                    </div>
                    
                    <div class="row" style="color: white; font-weight: bold; font-size: 25px;">List name:
                        <?php echo($pl->get_name()); ?>
                    </div>

                    <div class="row" style="color: white; font-weight: bold; margin-top: 2%;">
                        Description
                    </div>

                    <div class="row" style="color: white;">
                        <?php echo($pl->get_description()); ?>
                    </div>

                </div>
            </div>

        </div>
      
    </body>