<?php

require_once(__DIR__ . '/User.php');

class BannedUser {

    private $user;

    public function __construct($id, $username) {
        $this->user = new User($id, $username);
    }

    /*
     * @return first character of username
     */
    public function get_first_letter($capitalize=FALSE) {
        return $this->get_user()->get_first_letter($capitalize);
    }

    /*
     * @return the public path to unban the user
     */
    public function get_unban_link() {
        return "/profile/unban.php?id=" . $this->get_user()->get_id() . "&banlist=1";
    }

    /*
     * @return the public path to go the user's profile
     */
    public function get_profile_link() {
        return $this->get_user()->get_profile_link();
    }

    /*
     * @return username
     */
    public function get_username() {
        return $this->get_user()->get_username();
    }

    /*
     * @return user object
     */
    private function get_user() {
        return $this->user;
    }

}

?>