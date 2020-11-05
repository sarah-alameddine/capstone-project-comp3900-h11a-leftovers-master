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

    public function get_user_id() {
        return $this->user->get_id();
    }

    public function get_username() {
        return $this->user->get_username();
    }

    public function get_rating() {
        return $this->rating;
    }

    public function get_comment() {
        return $this->comment;
    }

    public function get_post_date() {
        return $this->post_date;
    }

}