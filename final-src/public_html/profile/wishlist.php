
<!-- USER INFOR -->
<?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/top.php'); ?>
    
    <!-- WISHLIST PAGE BODY -->
        <div class="container" style="margin-top: 1%;">

            <div class="row equal in-line" style="left: 15%;">

                    <?php

                    $user_id = NULL;
                    if (is_logged_in()) {
                        $user_id == $_SESSION['user']->get_id();
                    }

                    $wishlist = $profile->get_wishlist($user_id);

                    if (empty($wishlist)) {

                    ?>

                    <h2 style="color: white;">No movies in wishlist</h2>

                    <?php
                    } else {
                        foreach ($wishlist as $movie) {
                    ?>
                        <div class="col-3" style="margin-top: 5%">
                            <div class="card" style="width:10rem; margin-bottom: 10px; border: none;">

                                <?php if (is_logged_in() && $profile->is_user_same($_SESSION['user']->get_id())) { ?>
                                
                                    <a href="/movies/remove-from-wishlist.php?id=<?php echo($movie->get_id()); ?>&wishlist=1" class="btn btn-outline-danger rounded-circle" style="position: absolute; right:5%; top: 3%; font-weight: bold; font-size: 20px;">X</a>

                                <?php } ?>

                                <a href="<?php echo($movie->get_movie_page_path()); ?>"><img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top" ></a>
                                <div class="card-body">
                                    <a href='<?php echo($movie->get_movie_page_path()); ?>'><h6 class="card-title"><?php echo($movie->get_title()); ?></h6></a>
                                    <p class="card-text"><?php echo($movie->get_release_date()); ?></p>
                                      
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>


            </div>

        </div>
    
    </div>

<!-- FOOTER -->
<footer style="margin-top: 10%">
    <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/bottom.php'); ?>
</footer>
