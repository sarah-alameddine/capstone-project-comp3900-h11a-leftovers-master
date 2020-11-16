<?php require_once(__DIR__ . '/session.php'); ?>

<!-- style for nav -->
<style>
  .dropdown {
    font-weight: bold;
  }
  .dropdown:hover>.dropdown-menu {
    display: block;
  }

  .dropdown-item{
      font-family: 'Lato', sans-serif;
  }

  .nav-item{
    font-family: 'Lato', sans-serif;
  }

  .nav-link{
    font-weight: bold;
  }

  .nav-link:hover{
    color: #9effec; 
  }
</style>

<!--  Nav bar -->
<nav class="navbar navbar-expand-md navbar-light" style="width: 100%; background: #182628;">
  
    <div class="container" style="width: 10%">
        <!-- logo and our group name session -->
        <a class="navbar-brand" href="/" >
            <img src="/assets/images/logo-v3.png" width="auto" height="75px" alt="logo" style="padding-left:25px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 1%;">
        
        <div class="container" style="width: 25%; margin-left: 2%;">

            <ul class="navbar-nav mr-auto">
                <!-- Movies drop down -->
                <li class="nav-item dropdown">
                    <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What to Watch
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/editor-picks.php">Editor's Picks</a>
                        <a class="dropdown-item" href="/quiz.php">Take a quiz</a>
                    </div>
                </li>
            </ul>

        </div>
    
        <div class="container" style="width: 100%; margin-right: 5%;">
            <!-- Search session -->
            <form action="/search.php" method="GET" style="max-height: 35px; width: 80%;">
                <div class="input-group mb-3 position-relative">

                    <!-- Search filter -->
                    <div class="input-group-prepend">
                        <select name="category" class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 0; border-bottom-right-radius: 0; border: none; box-shadow: none;">
                        <option value="<?php echo(CAT_ALL); ?>" selected>Search Filter<i class="fas fa-align-justify"></i></option>
                        <option value="<?php echo(CAT_MOVIE); ?>">Movie</option>
                        <option value="<?php echo(CAT_GENRE); ?>">Genre</option>
                        <option value="<?php echo(CAT_DIRECTOR); ?>">Director</option>
                        <option value="<?php echo(CAT_ACTOR); ?>">Actor</option>
                        </select>
                    </div>

                    <!-- Search bar -->
                    <input type="text" class="form-control shadow-none" placeholder="Search movies, genres, directors..." name="term" style="width: 50%; border-color: white; background: white;">

                    <!-- Search button -->
                    <div class="input-group-append">
                        <button class="btn shadow-none" type="submit" id="button-addon2" style="background-color: white; border: none;"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
    
        </div>
    
        <!-- Login/logout and register section -->
        <div class="container" style="width: 20%">
            <ul class="navbar-nav mr-auto" >
            
                <?php if (is_logged_in()) { ?>

                    <!-- log out -->
                    <div class="container" style="margin-right: 0;">
                 
                        <li class="nav-item dropdown">
                            <div class="btn-group" style="position: absolute; right:5%; bottom: -25px;">
                                <!-- REPLACE THE X BELOW BY THE FIRST LETTER OF USERNAME -->
                                <button type="button" class="btn btn-warning rounded-circle" data-toggle="dropdown" aria-haspopup="true" style="font-weight: bold; font-size: 20px;"><?php echo($_SESSION['user']->get_first_letter(TRUE)); ?></button>
                        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="/profile/index.php?id=<?php echo($_SESSION['user']->get_id()); ?>">Profile</a>
                                    <a class="dropdown-item" href="/profile/wishlist.php?id=<?php echo($_SESSION['user']->get_id()); ?>">Wishlist</a>
                                    <a class="dropdown-item" href="/profile/watch-list.php?id=<?php echo($_SESSION['user']->get_id()); ?>">Watch List</a>
                                    <a class="dropdown-item" href="/profile/ban-list.php?id=<?php echo($_SESSION['user']->get_id()); ?>">Ban Lists</a>
                                    <a class="dropdown-item" href="/profile/update-details.php?id=<?php echo($_SESSION['user']->get_id()); ?>">Update details</a>

                                    <?php if ($_SESSION['user']->is_admin()) { ?>
                                        <!-- THIS ONE IS ONLY VIEWABLE IN THE ADMIN MOD -->
                                        <a class="dropdown-item" href="/../../admin/add-movie.php">Add movies</a>
                                    <?php } ?>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                    </div>

                <?php } else { ?>

                    <!-- Login -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/login.php">Login</a>
                    </li>

                    <!-- Sign up-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/signup.php">Join Us</a>
                    </li>

                <?php } ?>
            </ul>
        </div>
    
    </div>
</nav>




