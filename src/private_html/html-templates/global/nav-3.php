<?php
// This is for debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

// This is required to save authenication across pages
session_start();
?>

<!-- style for nav -->
<style>
  .dropdown {
    font-weight: bold;
  }
  .dropdown:hover>.dropdown-menu {
    display: block;
  }

</style>

<style>
  .nav-link{
    font-weight: bold;
  }
</style>

<!--  Nav bar -->
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #0f181a;">
  <!-- logo and our group name session -->
  <a class="navbar-brand" href="/" >
    <img src="/assets/images/logo-header.png" width="140px" height="50px" alt="logo" style="padding-right: 10%;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 2%;">
    
    <ul class="navbar-nav mr-auto">
      <!-- Moives drop down -->
      <li class="nav-item dropdown">
        <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Top Rated Movies</a>
          <a class="dropdown-item" href="#">In Theaters</a>
          <a class="dropdown-item" href="#">Comming Soon</a>
          <a class="dropdown-item" href="#">Movie News</a>
        </div>
      </li>

      <!-- Directors and actors dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          People
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Directors</a>
          <a class="dropdown-item" href="#">Actors</a>
        </div>
      </li>

      <!-- Other features dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">What to Watch</a>
          <a class="dropdown-item" href="#">Latest Trailers</a>
          <a class="dropdown-item" href="#">FilmFinder Picks</a>
        </div>
      </li>

    </ul>

    <!-- Search session -->
    <form action="search.php" method="GET" style="max-height: 35px; width: 50%; margin-right: 8%; margin-left: 5%;">
      <div class="input-group mb-3 position-relative">

        <!-- Search filter -->
        <div class="input-group-prepend">
          <select class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 0; border-bottom-right-radius: 0; border: none; box-shadow: none;">
            <option selected>Search Filter<i class="fas fa-align-justify"></i></option>
            <option value="1">Movie Title</option>
            <option value="2">Genre</option>
            <option value="3">Director</option>
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

    <ul class="navbar-nav mr-auto" >
        
      <?php
      if (isset($_SESSION['user_id'])) {
      ?>
      <!-- log out -->
      <li class="nav-item">
         <a class="nav-link text-light" href="/logout.php">Logout</a>
      </li>

      <?php } else { ?>
      <!-- Login -->
      <li class="nav-item">
        <a class="nav-link text-light" href="/login-2.php">Login</a>
      </li>

      <!-- Sign up-->
      <li class="nav-item">
        <a class="nav-link text-light" href="/signup-2.php">Join Us</a>
      </li>
    </ul>

      <?php } ?>
    
    <ul class="navbar-nav mr-auto">

    </ul>

  </div>
</nav>



