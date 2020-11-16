<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../../private_html/classes/User.php');
require_once(__DIR__ . '/../../private_html/html-templates/global/session.php');

if (is_logged_in()){

    if (!isset($_GET['id']) || !$_SESSION['user']->is_user_same($_GET['id'])) {
        header("Location: /profile/ban-list.php?id=" . $_SESSION['user']->get_id());
        exit();
    }

} else {
    header("Location: /?error=4");
    exit();
}

require_once(__DIR__ . '/../../private_html/html-templates/profile/index/top.php');

?>


<!-- BODY OF BANLIST PAGE -->
<div class="container">
       
    <div class="col-sm">
        <div class="row" style="margin-top: 5%;">
            <div class="col text-center">
                <span style="color:#65CCB8; font-weight:bold; font-size: 30px; width: 100%; display:inline;">People you have banned</span>
            </div>
        </div>
    </div>
    
    <!-- BANLIST CONTENT -->
    <div class="container border border-light" style="margin-left: 25%; width: 50%; margin-top: 10px; border-width: 5px !important;">

        <?php
        $bans = $_SESSION['user']->get_ban_list();

        if (count($bans) == 0) {
        ?>

        <div class="container" style="margin-top: 3%; margin-bottom: 5%; margin-left: 25%; color: white;">
            You haven't banned anyone.
        </div>

        <?php
        } else {
            foreach ($bans as $banned_u) {
        ?>

        <div class="row" style="margin-top: 5%; margin-bottom: 5%">

            <div class="col">
                            
                <a href="<?php echo($banned_u->get_profile_link());?>" class="btn btn-warning rounded-circle" style="position: absolute; font-weight: bold; font-size: 15px; display: block; width: 38px; height: 38px;"><?php echo($banned_u->get_first_letter(TRUE)); ?></a>
                            
                <a href="<?php echo($banned_u->get_profile_link());?>" style="position: relative; top: 20%; left: 50px; color: white;"><?php echo($banned_u->get_username()); ?></a>
                            <!-- Remove people from ban list -->
                <a href="<?php echo($banned_u->get_unban_link()); ?>" style="position: relative; top: 20%; float: right; font-size: 15px;">[Unban]</a>

            </div>

        </div>

        <?php
            }
        }
        ?>
    </div>
</div>

<!-- FOOTER OF THE PAGE -->
<footer style="margin-top: 10%">
    <?php require_once(__DIR__ . '/../../private_html/html-templates/profile/index/bottom.php'); ?>
</footer>
