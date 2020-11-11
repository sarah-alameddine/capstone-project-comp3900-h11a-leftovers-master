<?php
date_default_timezone_set("Australia/Sydney");

require_once(__DIR__ . '/MovieReview.php');
require_once(__DIR__ . '/User.php');

class Movie {

    private $id;
    private $title;
    private $release_date;
    private $description;
    private $genre;
    private $director;
    private $views;
    private $image_path;
    private $cast;

    public function __construct($id, $title, $release_date, $description, $genre, $director, $image_path, $cast) {
        $this->id = $id;
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->genre = $genre;
        $this->director = $director;
        $this->image_path = $image_path;
        $this->cast = $cast;
    }

    public function has_user_written_review($user_id) {
        $sql = "SELECT *
                FROM reviews
                WHERE movie_id = ?
                AND user_id = ?
                LIMIT 1";
        $vals = array($this->get_id(), $user_id);
        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $result = $db->query($sql, $vals)->fetchArray();
        if (empty($result)) {
            return FALSE;
        }

        return TRUE;
    }

    public function get_average() {
        $sql = "SELECT AVG(rating) as average
                FROM reviews
                WHERE movie_id = ?";
        $vals = array($this->get_id());
        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $result = $db->query($sql, $vals)->fetchArray();
        if (empty($result)) {
            return 0;
        }

        return round($result['average'], 2);
    }

    public function user_added_review($user_id, $rating, $comment) {

        if (!ctype_digit($rating) ||
            $rating < 1 ||
            $rating > 5
           ) {
            return FALSE;
        }

        if (strlen($comment) > 512) {
            return FALSE;
        }

        return $this->insert_review($user_id, $rating, $comment);

    }

    public function insert_review($user_id, $rating, $comment) {

        $sql = "INSERT INTO reviews (movie_id, user_id, rating, comment, post_date)
                VALUES (?, ?, ?, ?, ?)";
        $curr_date = date("Y-m-d H:i:s", time());
        $vals = array($this->get_id(), $user_id, $rating, $comment, $curr_date);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $review_id = $db->query($sql, $vals)->lastInsertID();
        $db->close();
        return $review_id;

    }

    public function get_reviews() {
        $sql = "SELECT r.rating, r.comment, r.post_date, u.id as user_id, u.username
                FROM reviews r
                JOIN users u
                    ON r.user_id = u.id
                WHERE movie_id = ?
                ORDER BY post_date DESC
                LIMIT 5";
        $vals = array($this->get_id());
        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $results = $db->query($sql, $vals)->fetchAll();
        $db->close();
        $reviews = array();

        foreach ($results as $row => $review) {
            $user = new User($review['user_id'], $review['username']);
            $reviews[] = new MovieReview($user,
                                         $review['rating'],
                                         $review['comment'],
                                         $review['post_date']);
        }

        return $reviews;
    }

    public function get_movie_page_path() {
        return '/movies/title.php?id=' . $this->get_id();
    }

    public function get_id() {
        return $this->id;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_release_date() {
        return $this->release_date;
    }

    /*
     * @param (optional) $len get the first $len characters
     */
    public function get_description($len=NULL) {
        if (is_null($len)) {
            return $this->description;
        }
        return substr($this->description, 0, $len);
    }

    public function get_genre() {
        return $this->genre;
    }

    public function get_director() {
        return $this->director;
    }

    public function get_views() {
        return $this->views;
    }

    public function get_image_path() {
        return  '/movies/assets/posters/' . $this->image_path;
    }

}