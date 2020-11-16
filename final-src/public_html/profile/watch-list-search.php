
<!doctype html>
<html lang="en">
    <head>
        <?php
        require_once(__DIR__ . '/../../private_html/html-templates/profile/watch-list/top.php');
        require_once(__DIR__ . '/../../private_html/classes/MovieBuilder.php');
        ?>
    </head>
    <body style="background: black">

        <!-- A search bar here -->
        <div class="row" style="margin-top: 5%; margin-left: 10%; margin-right: 10%;">

            <div class="container" style="width: 100%; margin-right: 5%;">
                <!-- Search session -->
                <h2 style="color:white;">Search for a movie to add</h2>
                <form action="/search.php" method="GET" style="max-height: 35px; width: 100%;">
                    <div class="input-group mb-3 position-relative">

                        <!-- Search filter -->
                        <div class="input-group-prepend">
                            <select name="category" class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 0; border-bottom-right-radius: 0;border-color: black; box-shadow: none;">
                                <option value="<?php echo(CAT_ALL); ?>" selected>Search Filter<i class="fas fa-align-justify"></i></option>
                                <option value="<?php echo(CAT_MOVIE); ?>">Movie</option>
                                <option value="<?php echo(CAT_GENRE); ?>">Genre</option>
                                <option value="<?php echo(CAT_DIRECTOR); ?>">Director</option>
                                <option value="<?php echo(CAT_ACTOR); ?>">Actor</option>
                            </select>
                        </div>

                        <!-- Search bar -->
                        <input type="text" class="form-control shadow-none border-right-0 border-left-0" placeholder="Search for movies to add to your watchlist..." name="term" style="width: 50%; border-color: black; background: white;">
                        <input type="hidden" id="custId" name="watchlist" value="<?php echo($pl->get_id()) ?>">

                        <!-- Search button -->
                        <div class="input-group-append">
                            <button class="btn shadow-none border-left-0" type="submit" id="button-addon2" style="background-color: white; border-color: black;"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <!-- FOOTER -->
        <footer style="margin-top: 5%">
            <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/bottom.php'); ?>
        </footer>
    </body>
</html>