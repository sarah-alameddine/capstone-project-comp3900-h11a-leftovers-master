<!doctype html>
<html lang="en">
    <head>
        <style>
            .body{
                background-color: black;
            }
        </style>
    </head>
    <body style="background-color: black;">
    <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/watch-list/top.php'); ?>

        <!-- CONTENT OF A PLAYLIST -->
        <div class="container" style="margin-top: 1%;">

            <div class="row equal in-line">

                <?php

                if (count($pl->get_movies()) == 0) { ?>

                    <h2 style="color: #F2F2F2;">No movies in this list</h2>
                
                <?php

                } else {
                    foreach ($pl->get_movies() as $movie) {
                ?>
                    <div class="col-3" style="margin-top: 5%">
                        <div class="card" style="width:10rem; margin-bottom: 10px; border: none;">
                            
                            <?php if (is_logged_in() && $pl->is_owner($_SESSION['user']->get_id())) { ?>
                            
                                <a href="/profile/watch-list-remove-movie.php?watchlist=<?php echo($pl->get_id()); ?>&movie=<?php echo($movie->get_id()); ?>" class="btn btn-outline-danger rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 20px;">X</a>

                            <?php } ?>
                            
                            <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top" alt="...">
                            <div class="card-body" style="padding: 0;background-color:black;">
                                <a href='#'>
                                    <h6 class="card-title" style="color:#F2F2F2; text-align: center;"><?php echo($movie->get_title()); ?></h6>
                                </a>
                                <p class="card-text" style="padding: 0; margin: 0;color:#03D8A9; text-align: center;"><?php echo($movie->get_release_date()); ?></p>
                                  
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
        </div>

        <?php if (is_logged_in() && $_SESSION['user']->is_user_same($pl->get_owner_id())) { ?>

            <!-- THIS PART ONLY APPEARS TO THE USER -->
            <div class="row" style="margin-top: 2%;">
                <div class="container">
                    
                    <div class="row">

                        <div class="col-sm" style="position: relative; right: 0; height: 50px;">
                            <a href="/profile/watch-list-search.php?id=<?php echo($pl->get_id()); ?>" class="btn btn-warning" role="button" style=" font-weight: bold;">Add movie</a>
                        </div>

                        <!-- DELETE THE CURRENT LIST -->
                        <!-- UPON CLICKING THE DELETE LIST BUTTON, USERS GET BACK TO THE WATCHLISTS PAGE -->
                        <div class="col-sm" style="height: 50px; position: relative; right: 0;">
                            <a href="/profile/watch-list-delete-list.php?id=<?php echo($pl->get_id()); ?>" class="btn btn-warning float-right" role="button" style="font-weight: bold;">Delete List</a>
                        </div>
                    </div>

                </div>
            </div>

        <?php } ?>

    </div>

    <footer style="margin-top: 5%">
        <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/watch-list/bottom.php'); ?>
    </footer>
    </body>
</html>
