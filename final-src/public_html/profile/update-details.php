<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (is_logged_in()){
    if (!isset($_GET['id']) || !$_SESSION['user']->is_user_same($_GET['id'])) {
        header("Location: /profile/update-details.php?id=" .
                $_SESSION['user']->get_id());
        exit();
    }

} else {
    header("Location: /?error=4");
    exit();
}

require_once(__DIR__ . '/../../private_html/html-templates/profile/index/top.php');

?>

    <div class="container">
       
            <div class="col-sm">
                
               <div class="form-row">
                <div class="col text-center">
                  <div class="py-4">
                    <span style="color:#03D8A9; font-weight:bold; font-size: 30px; width: 100%; display:inline;">Update details</span> 
                  </div>
                </div>
              </div>
              
              <form action="/profile/update-details-post.php" method="POST">

                <div class="form-row">
                  <div class="col" >
                    <div class="py-1">
                      <label style="color:#F2F2F2;" for="inputTitle">New email (Optional)</label>
                      <input type="text" class="form-control" id="inputTitle" name="new_email">  
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <div class="py-1">
                      <label style="color:#F2F2F2;" for="inputTitle">New Password (Optional)</label>
                      <input type="password" class="form-control" id="inputTitle" name="new_pass1">  
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <div class="py-1">
                      <label style="color:#F2F2F2;" for="inputTitle">Retype New Password </label>
                      <input type="password" class="form-control" id="inputTitle" name="new_pass2">  
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <div class="py-1">
                      <label style="color:#F2F2F2;" for="inputTitle">Current Password (Required for all detail updates)</label>
                      <input type="password" class="form-control" id="inputTitle" name="curr_pass" required>  
                    </div>
                  </div>
                </div>

                <div class="form-row" style="margin-top: 2%;">
                  <div class="col">
                    <button type="submit" class="btn btn-primary" style="background-color: #182628;">Update</button>
                  </div>

                </div>
              </form>
              
            </div>

    </div>
    <footer style="margin-top: 10%">
        <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/bottom.php'); ?>
    </footer>
