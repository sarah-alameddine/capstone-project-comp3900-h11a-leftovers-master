<?php
// This is for debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

// This is required to save authenication across pages
session_start();
?>

<style>
  label{
    font-weight:bold; color: black; font-size:16px;
  }
</style>

<!--  Nav bar -->
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #d9b44a;">
  <!-- logo and our group name session -->
  <a class="navbar-brand" href="/">
    <img src="/assets/images/logo.png" width="150px" height="70px" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <!-- Search session -->
    <form action="/search.php" method="GET" class="form-inline my-2 my-lg-0" style="width: 60%; padding-left: 10px;">

      <!-- search bar -->
      <div class="input-group mb-3" style="border-color: black; width: 90%; margin-bottom: 0 !important;">
        <input type="text" class="form-control shadow-none" placeholder="Search movies, genres, directors..." name="term" style="border: none;">
        <div class="input-group-append">
          <button class="btn shadow-none" type="submit" id="button-addon2" style="background-color: white; border: none;"><i class="fas fa-search"></i></button>
        </div>
      </div>
      
      <!-- search filter -->
      <div class="custom-control custom-radio custom-control-inline" style="margin-left: 5%;">
          <input type="radio" id="customRadio1" name="category" class="custom-control-input" value="1" checked>
          <label class="custom-control-label" for="customRadio1">All</label>
          <i class="fas fa-align-justify" style="padding: 5px;"></i>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadio2" name="category" class="custom-control-input" value="2">
          <label class="custom-control-label" for="customRadio2">Movie</label>
          <i class="fas fa-film" style="padding: 5px;"></i>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadio3" name="category" class="custom-control-input" value="3">
          <label class="custom-control-label" for="customRadio3">Genre</label>
          <i class="fas fa-theater-masks" style="padding: 5px;"></i>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadio4" name="category" class="custom-control-input" value="4">
          <label class="custom-control-label" for="customRadio4">Director</label>
          <i class="fas fa-user-friends" style="padding: 5px;"></i>
      </div>
    </form>
    
    <!-- register and login session -->
    <ul class="navbar-nav mr-auto">
      <?php
      if (isset($_SESSION['user_id'])) {
      ?>

      <li class="nav-item" style="padding: 3px 10px;">
        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/logout.php'" style="border-color: black; background-color: #75b1a9;">Logout
        </button>
      </li>

      <?php } else { ?>

      <!-- Sign Up function-modal for signup code is at the end of the file-->
      <li class="nav-item" style="padding: 3px 10px;">
        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/signup.php'" style="border-color: black; background-color: #75b1a9;">SIGN UP
        </button>
      </li>
      <!-- Log in function-modal for log in code is at the end of the file -->
      <li class="nav-item" style="padding: 3px 10px;">
        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/login.php'" style="border-color: black; background-color: #75b1a9;">LOG IN
        </button>
      </li>

      <?php } ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other features
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Quizz</a>
          <a class="dropdown-item" href="#">Top Movies</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Bla bla bla</a>
        </div>
      </li>
      
    </ul>
  
  </div>
</nav>

