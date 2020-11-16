<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (isset($_POST['title']) && isset($_POST['description'])) {

    $id = $_SESSION['user']->create_playlist($_POST['title'], $_POST['description']);

    if ($id > 0) {
        header("Location: /profile/watch-list-content.php?id=$id");
        exit();
    }
}

require_once(__DIR__ . '/../../private_html/html-templates/profile/index/top.php');

?>

<div class="container">
       
    <div class="col-sm">
                
        <div class="form-row">
            <div class="col text-center">
                <span style="color:#65CCB8; font-weight:bold; font-size: 30px; width: 100%; display:inline;">Create a Watch List</span>
            </div>
        </div>
        
        <!-- INPUT SECTION TO CREATE WATCHLIST -->
        <form action="" method="POST">

            <!-- INPUT FOR TITLE OF THE LIST -->
            <div class="form-row">
                <div class="col">
                    <label for="inputTitle" style="color:#65CCB8; font-size: 25px">List Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="title" required>  
                </div>
            </div>
        
            <!-- INPUT FOR THE DESCRIPTION OF THE LSIT -->
            <div class="form-row" style="margin-top: 2%;">
                <div class="col">
                    <label for="inputDesc" style="color:#65CCB8; font-size: 25px">List Description</label>
                    <textarea rows="4" cols="50" type="text" class="form-control" id="inputDesc" name="description" required></textarea>
                </div>
            </div>

            <!-- BUTTON TO CREATE THE LIST -->
            <div class="form-row" style="margin-top: 2%;">
                <div class="col">
                    <button type="submit" class="btn btn-primary" style="background-color: #182628;">Create list</button>
                </div>

            </div>
        </form>
              
    </div>

</div>

<?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/bottom.php'); ?>
