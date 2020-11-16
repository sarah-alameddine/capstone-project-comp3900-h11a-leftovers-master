<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/Database.php');

define('IMAGE_ERROR', -1);
define('DUPLICATE_MOVIE', -2);

class AdminDashboard {

    public function __construct() {

    }

    /*
     * Return associative array of genre and id
     */
    public function get_genres() {

        $db = new Database();

        $sql = "SELECT id, genre FROM genres ORDER BY genre limit ?";
        $vals = array(25);

        $results = $db->query($sql, $vals)->fetchAll();

        $db->close();
        return $results;

    }

    /*
     * Add movie to database
     * @return movie's ID, IMAGE_ERROR or DUPLICATE_MOVIE
     */
    public function add_movie($title, $release_date, $description, $image, $genres, $directors, $cast) {

        
        // Upload Image
        if ($this->allow_image_upload($image)) {
            $image_filename = uniqid('', TRUE) . "." . $this->image_ext_to_lower($image);
            $image_path = __DIR__ . '/../../public_html/movies/assets/posters/' . $image_filename;
            move_uploaded_file($image['tmp_name'], $image_path);
        } else {
            return IMAGE_ERROR;
        }

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $movie_id = $this->insert_movie($db, $title, $release_date,
                                        $description, $image_filename);

        if ($movie_id == 0) {
            return DUPLICATE_MOVIE;
        }

        $this->insert_directors($db, $directors);

        $this->insert_actors($db, $cast);

        $this->insert_genres($db, $movie_id, $genres);

        $this->link_director_and_movie($db, $directors, $movie_id);

        $this->link_cast_and_movie($db, $cast, $movie_id);

        $db->close();

        return $movie_id;

    }

    /*
     * Inserts directors
     * @param $db Database Object
     * @param $director a string of directors eg. Bob Smith,John Williams
     * @return affected rows
     */
    private function insert_directors($db, $directors) {
        $sql = "INSERT IGNORE INTO directors (name) VALUES ";
        $vals = array();
        $dir_arr = explode(",", $directors);
        foreach ($dir_arr as $director) {
            $sql .= "(?),";
            $vals[] = trim($director);
        }
        $sql = rtrim($sql, ",");
        return $db->query($sql, $vals)->affectedRows();

    }

    /*
     * Get the id's of all directors
     * @param $director a string of directors eg. Bob Smith,John Williams
     * @return int Affected rows
     */
    private function link_director_and_movie($db, $directors, $movie_id) {

        $sql = "SELECT id
                FROM directors
                WHERE ";
        $vals = array();
        $dir_arr = explode(",", $directors);
        foreach ($dir_arr as $director) {
            $sql .= "name = ? OR ";
            $vals[] = trim($director);
        }
        $sql = rtrim($sql, "OR ");
        $results = $db->query($sql, $vals)->fetchAll();

        $sql = "INSERT INTO movie_directors (movie_id, director_id) VALUES ";
        $vals = array();
        foreach ($results as $row => $val) {
            $sql .= "(?, ?),";
            $vals[] = $movie_id;
            $vals[] = $val['id'];
        }
        $sql = rtrim($sql, ",");
        return $db->query($sql, $vals)->affectedRows();

    }

    /*
     * Inserts cast
     * @param $db Database Object
     * @param $cast a string of directors eg. Bob Smith,John Williams
     * @return affected rows
     */
    private function insert_actors($db, $cast) {
        $sql = "INSERT IGNORE INTO actors (name) VALUES ";
        $vals = array();
        $cast_arr = explode(",", $cast);
        foreach ($cast_arr as $actor) {
            $sql .= "(?),";
            $vals[] = trim($actor);
        }
        $sql = rtrim($sql, ",");
        return $db->query($sql, $vals)->affectedRows();

    }

    /*
     * Get the id's of all directors
     * @param $director a string of directors eg. Bob Smith,John Williams
     * @return int Affected rows
     */
    private function link_cast_and_movie($db, $casts, $movie_id) {

        $sql = "SELECT id
                FROM actors
                WHERE ";
        $vals = array();
        $cast_arr = explode(",", $casts);
        foreach ($cast_arr as $cast) {
            $sql .= "name = ? OR ";
            $vals[] = trim($cast);
        }
        $sql = rtrim($sql, "OR ");
        $results = $db->query($sql, $vals)->fetchAll();

        $sql = "INSERT INTO movie_cast (movie_id, actor_id) VALUES ";
        $vals = array();
        foreach ($results as $row => $val) {
            $sql .= "(?, ?),";
            $vals[] = $movie_id;
            $vals[] = $val['id'];
        }
        $sql = rtrim($sql, ",");
        return $db->query($sql, $vals)->affectedRows();

    }

    /*
     * Inserts movie
     * @param $db Database Object
     * @return movie id
     */
    private function insert_movie($db, $title, $release_date, $description, $image) {
        $sql = "INSERT IGNORE INTO movies (title, release_date, description, image_path)
                VALUES (?, ?, ?, ?)";
        $vals = array($title, $release_date, $description, $image);
        return $db->query($sql, $vals)->lastInsertID();

    }

    /*
     * Inserts genres
     * @param $db Database Object
     * @return int affected rows
     */
    private function insert_genres($db, $movie_id, $genres) {
        $sql = "INSERT INTO movie_genres (movie_id, genre_id) VALUES ";
        $vals = array();
        foreach ($genres as $genre) {
            $sql .= "(?, ?),";
            $vals[] = $movie_id;
            $vals[] = $genre;
        }
        $sql = rtrim($sql, ",");
        return $db->query($sql, $vals)->affectedRows();

    }

    /*
     * Add a movie to the editor picks
     * @return TRUE, DATABASE_ERROR
     */
    public function add_movie_to_editor_picks($movie_id) {
        $sql = "INSERT IGNORE INTO editor_picks (movie_id)
                VALUES (?)";
        $vals = array($movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $db->query($sql, $vals);
        $db->close();
        return TRUE;
    }

    /*
     * Remove a movie to the editor picks
     * @return TRUE, DATABASE_ERROR
     */
    public function remove_movie_from_editor_picks($movie_id) {
        $sql = "DELETE FROM editor_picks
                WHERE movie_id = ?
                LIMIT 1";
        $vals = array($movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $db->query($sql, $vals);
        $db->close();
        return TRUE;
    }

    /*
     * Checks to see if an image is allowed to be uploaded
     * @return bool TRUE if allowed, else FALSE
     */
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

    /*
     * @return extension of an image and covert to lowercase
     */
    private function image_ext_to_lower($image) {
        $image_ext = explode('.', $image['name']);
        return strtolower(end($image_ext));
    }
}

?>