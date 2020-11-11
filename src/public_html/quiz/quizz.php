
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

    <!-- style for login body -->
    <style>
      .form-row{
        margin-left: 25%;
        margin-right: 25%;
      }
    </style>

    <title>Quizz Page</title>
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
                <div class="col">
                  <span style="color:#182628; font-weight:bold; font-size: 30px; margin-left: 15%">Welcome to our quizzes</span> 
                </div>
              </div>
              
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <!-- error message if not answer all questions -->
                  <div class="col">
                      <?php if ($error !== FALSE) { ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo($error); ?>
                      </div>
                      <?php } ?>
                  </div>

                </div>

                <!-- question 1 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">What kind of mood are you in?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question1Answer1" name="question1Answer" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="question1Answer1">Kind of sad</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question1Answer2" name="question1Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question1Answer2">Happy, happy!</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question1Answer3" name="question1Answer" class="custom-control-input" value="1">
                          <label class="custom-control-label" for="question1Answer3">Just normal</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 2 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">Do you like movies that keep you guessing?</label>
                    
                    <div class="row">

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question2Answer1" name="question2Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question2Answer1">Love them!</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question2Answer2" name="question2Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question2Answer2">Sometimes</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question2Answer3" name="question2Answer" class="custom-control-input" value="1">
                          <label class="custom-control-label" for="question2Answer3">Not usually</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 3 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">Are you in love?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question3Answer1" name="question3Answer" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="question3Answer1">Very much so!</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question3Answer2" name="question3Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question3Answer2">I guess so</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question3Answer3" name="question3Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question3Answer3">Not now</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 4 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">Do you need a good laugh?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question4Answer1" name="question4Answer" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="question4Answer1">love to!</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question4Answer2" name="question4Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question4Answer2">either way</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question4Answer3" name="question4Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question4Answer3">Not necessary</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 5 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">Do workout?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question5Answer1" name="question5Answer" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="question5Answer1">Every day</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question5Answer2" name="question5Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question5Answer2">Sometimes</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question5Answer3" name="question5Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question5Answer3">Just too lazy</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 6 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">Do you like to be scared?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question6Answer1" name="question6Answer" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="question6Answer1">I love it!</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question6Answer2" name="question6Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question6Answer2">Sometimes</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question6Answer3" name="question6Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question6Answer3">No thank you</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <!-- question 7 -->
                <div class="form-row" style="margin-bottom: 2%;">
                  <div class="col">
                    <label for="inputTitle" style="font-weight: bold;">What do you think of mythology?</label>
                    
                    <div class="row">

                      <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question7Answer1" name="question7Answer" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="question7Answer1">It's real!</label>
                        </div>
                      </div>

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question7Answer2" name="question7Answer" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="question7Answer2">Quite intertesting</label>
                        </div>
                      </div> 

                      <div class="col">  
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="question7Answer3" name="question7Answer" class="custom-control-input" value="3">
                          <label class="custom-control-label" for="question7Answer3">I believe in science</label>
                        </div>
                      </div> 

                    </div>

                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary" style="background-color: #182628;">Submit quizz</button>
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










   

