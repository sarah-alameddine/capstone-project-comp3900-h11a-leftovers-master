<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/homepagestyle.css">
    
    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>
    <script src="/assets/js/homepage.js"></script>

    <title>FilmFinity</title>
  </head>
  <body>

    <!-- Nav bar-->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav.php'); ?>

    <!-- Home Page Feature section carousel-->
    <div class="top-content">
    <div class="container-fluid">
    <h1>LATEST RELEASES</h1>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="/assets/images/black-panther.jpg" class="img-fluid mx-auto d-block" alt="img1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Black Panther</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/joker.jpg" class="img-fluid mx-auto d-block" alt="img2">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Joker</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/movie1poster.jpg" class="img-fluid mx-auto d-block" alt="img3">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Movie 1</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/dora.jpg" class="img-fluid mx-auto d-block" alt="img4">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Dora</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/black-panther.jpg" class="img-fluid mx-auto d-block" alt="img5">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Black Panther</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/joker.jpg" class="img-fluid mx-auto d-block" alt="img6">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Joker</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/movie1poster.jpg" class="img-fluid mx-auto d-block" alt="img7">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Movie 1</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/assets/images/dora.jpg" class="img-fluid mx-auto d-block" alt="img8">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Dora</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


    <!-- Movie Recommendations Carousel -->
    <?php require_once(__DIR__ . '/homepage-body.php'); ?>

    <!-- Modal for sign up function -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!-- content of the sign up popup -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupModalLabel">SIGN UP FOR FILMFINITY</h5>
            <!-- close button -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- Body of the modal -->
          <form action="YOUR PHP FILE TO HANDLE REGISTER HERE">
            <div class="modal-body">
              <!-- Email -->
              <div class="form-row">
                <div class="col">
                  <label for="username">Username</label>
                  <input type="username" class="form-control" id="inputEmail" placeholder="" name="username" required>  
                </div>
              </div> 
              <!-- Email -->
              <div class="form-row">
                <div class="col">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="" name="email" required>  
                </div>
              </div> 
              <!-- Password --> 
              <div class="form-row">
                <div class="col">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="" name="password" required>  
                </div>
              </div>  
            </div>
            <!-- footer of the modal -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>