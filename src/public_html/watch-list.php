<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/../../private_html/html-templates/profile/index/top.php');
?>

    <!-- watch list content -->
    <div class="row">
            
        <div class="container">
            <div class="row">
                    
                <div class="col-sm" style="height: 100px;">
                    <span style="position: relative; top: 15%; font-weight: bold; font-size: 20px;color: #F2F2F2;">Watch Lists</span>
                </div>
                
                <?php if ( is_logged_in() && $profile->is_user_same( $_SESSION['user']->get_id() ) ) { ?>

                    <div class="col-sm" style="height: 50px;">
                        <a href="/profile/create-watch-list.php?id=<?php echo($profile_u->get_id()); ?>" class="btn btn-warning" role="button" style="position: absolute; top: 35%; font-weight: bold;  right: 0">Create List</a>
                    </div>

                <?php } ?>

            </div>
        </div>

    </div>

    
    <!-- A LIST OF MOVIE LIST HERE -->
    <div class="container">

        <div class="row equal in-line">

            <?php
            $playlists = $profile_u->get_playlists();
            foreach ($playlists as $playlist) {
            ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem; margin-bottom: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($playlist->get_name()); ?></h5>
                            <p class="card-text"><?php echo($playlist->get_description(50)); ?></p>
                            <a href="/profile/watch-list-content.php?id=<?php echo($playlist->get_id()); ?>" class="card-link">View list</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

<?php require_once(__DIR__ . '/../../private_html/html-templates/profile/watch-list/bottom.php'); ?>
