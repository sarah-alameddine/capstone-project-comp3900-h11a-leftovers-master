<?php

require_once(__DIR__ . '/User.php');

class MovieReview {

    private $rating;
    private $comment;
    private $post_date;
    private $user;

    public function __construct($user, $rating, $comment, $post_date) {
        $this->rating = $rating;
        $this->comment = $comment;
        $this->post_date = $post_date;
        $this->user = $user;
    }

    /*
     * @return movie reviewer's user id
     */
    public function get_user_id() {
        return $this->user->get_id();
    }

    /*
     * @return movie reviewer's username
     */
    public function get_username() {
        return $this->user->get_username();
    }

    /*
     * @return movie reviewer's rating
     */
    public function get_rating() {
        return $this->rating;
    }

    /*
     * @return movie reviewer's comment
     */
    public function get_comment() {
        return $this->comment;
    }

    /*
     * @return movie reviewer's post date
     */
    public function get_post_date() {
        return $this->post_date;
    }

    /*
     * @return movie reviewer's user object
     */
    private function get_user() {
        return $this->user;
    }

    /*
     * @return public path to user's profile
     */
    public function get_user_profile_link() {
        return $this->get_user()->get_profile_link();
    }

}