<?php

require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/Movie.php');

class MovieBuilder {

    public function __construct() {

    }

    public function get_movie_by_id($id) {

        $sql = "SELECT *
                FROM movies
                WHERE id = ?
                LIMIT 1";

        $vals = array($id);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $result = $db->query($sql, $vals)->fetchArray();

        if (!isset($result['id'])) {
            return FALSE;
        }

        return new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genre'], $result['director'],
                         $result['views'], $result['image_path']);


    }

}

?>