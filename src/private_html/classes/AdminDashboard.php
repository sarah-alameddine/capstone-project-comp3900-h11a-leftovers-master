<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/Database.php');

class AdminDashboard {

    public function __construct() {

    }

    /*
     * Return associative array of genre and id
     */
    public function get_genres() {

        $db = new Database();

        $sql = "SELECT id, name FROM genres limit ?";
        $vals = array(25);

        $results = $db->query($sql, $vals)->fetchAll();

        $db->close();
        return $results;

    }

    public function add_movie($title, $release_date, $description, $image, $genres, $directors, $cast) {

        
        // Image
        if ($this->allow_image_upload($image)) {
            $image_filename = uniqid('', TRUE) . "." . $this->image_ext_to_lower($image);
            $image_path = __DIR__ . '/../../public_html/movies/assets/posters/' . $image_filename;
            move_uploaded_file($image['tmp_name'], $image_path);
        }

        $sql = "INSERT INTO movies (title, release_date, description, image_path, directors, cast)
                VALUES (?, ?, ?, ?, ?, ?)";
        $vals = array($title, $release_date, $description, $image_filename, $directors, $cast);
        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $movie_id = $db->query($sql, $vals)->lastInsertID();

        $sql = "INSERT INTO movies_genre (movie_id, genre_id) VALUES ";
        $vals = array();
        foreach ($genres as $genre) {
            if (ctype_digit($genre) && $genre >= 1 && $genre <= 18) {
                $sql .= "(?, ?),";
                $vals[] = $movie_id;
                $vals[] = $genre;
            }
        }

        $sql = rtrim($sql, ",");
        $db->query($sql, $vals);
        $db->close();

        return $movie_id;

    }

    private function allow_image_upload($image) {
        $image_ext = explode('.', $image['name']);
        $image_actual_ext = strtolower(end($image_ext));
        $allowed_image_ext = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($image_actual_ext, $allowed_image_ext) &&
            $image['error'] === 0 &&
            $image['size'] < 5000000) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function image_ext_to_lower($image) {
        $image_ext = explode('.', $image['name']);
        return strtolower(end($image_ext));
    }
}

?>