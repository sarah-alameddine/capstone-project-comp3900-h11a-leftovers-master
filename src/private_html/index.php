<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>

    <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav.php'); ?>

    <div class="container">
      <h1>HIGHLIGHT</h1>
      <div class="row">
        <div class="col" style="background-color: green;">Maybe a carousel here</div>
        <div class="col" style="background-color: #db4c4c;">Maybe an admin pick list on best romance here</div>
        <div class="col" style="background-color: #db6f4c;">Maybe an other admin pick list on best Action here</div>
      </div>
    </div>

    <div class="container">
        <h2>NEW & UPCOMING MOVIES</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 5px 0;">
        <div class="col" style="background-color: green;">Movie1</div>
        <div class="col" style="background-color: #db4c4c;">Movie2</div>
        <div class="col" style="background-color: #db934c;">Movie3</div>
        <div class="col" style="background-color: #4c4cdb;">Movie4</div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 5px 0;">
        <div class="col" style="background-color: green;">Movie5</div>
        <div class="col" style="background-color: #db4c4c;">Movie6</div>
        <div class="col" style="background-color: #db934c;">Movie7</div>
        <div class="col" style="background-color: #4c4cdb;">Movie8</div>
      </div>
    </div>

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

    <!-- Modal for log in function -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!-- content of the sign up popup -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">LOGIN</h5>
            <!-- close button -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- Body of the modal -->
          <form action="YOUR PHP FILE TO HANDLE LOG IN HERE">
            <div class="modal-body">
              <!-- Email -->
              <div class="form-row">
                <div class="col">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="" name="EMAIL">  
                </div>
              </div> 
              <!-- Password --> 
              <div class="form-row">
                <div class="col">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="" name="PASSWORD">  
                </div>
              </div> 
              <div class="col-auto">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                  <label class="form-check-label" for="autoSizingCheck">
                    Remember me
                  </label>

                </div>
              </div>  
            </div>
            <!-- footer of the modal -->
            <div class="modal-footer">
              <div class="col">
                <button type="submit" class="btn btn-primary">LOG IN</button>
              </div>
              <div class="col">
                <a href="#" class="badge badge-secondary">FORGOT YOUR PASSWORD?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>