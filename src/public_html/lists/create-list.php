<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>


    <title>Create lists</title>
  </head>
  <body>
    
    <!-- website header -->
    <div class="row" style="margin-bottom: 1%">
        <!-- website header -->
        <?php require_once(__DIR__ . '/../../private_html/html-templates/global/nav-2.php'); ?>
    </div>

    <!-- body -->
    <div class="container">
       
            <div class="col-sm">
                
               <div class="form-row">
                <div class="col text-center">
                  <span style="color:#182628; font-weight:bold; font-size: 30px; width: 100%; display:inline;">Create a watch list</span> 
                </div>
              </div>
              
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="col">
                    <label for="inputTitle">List title</label>
                    <input type="text" class="form-control" id="inputTitle" placeholder="" name="title">  
                  </div>
                </div>

                <div class="form-row" style="margin-top: 2%;">
                  <div class="col">
                    <label for="inputDesc">List description</label>
                    <textarea rows="4" cols="50" type="text" class="form-control" id="inputDesc" placeholder="" name="description"></textarea>
                  </div>
                </div>

                <div class="form-row" style="margin-top: 2%;">
                  <div class="col">
                    <button type="submit" class="btn btn-primary" style="background-color: #182628;">Create list</button>
                  </div>

                </div>
              </form>
              

            </div>

    </div>
    
 
    <!-- footer -->
    <div class="row">
        <?php require_once(__DIR__ . '/../../private_html/html-templates/global/footer-v1.php'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>










   

