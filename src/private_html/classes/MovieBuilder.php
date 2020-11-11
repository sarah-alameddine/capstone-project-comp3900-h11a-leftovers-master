<?php

/*
SELECT m.name, AVG(r.rating) AS avg_rating
FROM movies m
INNER JOIN reviews r ON m.id = r.movie_id
WHERE NOT EXISTS (SELECT 1 FROM blocked b
                  WHERE b.blocked_cus_id = r.cus_id AND b.cus_id = 1)
GROUP BY m.name;
http://www.sqlfiddle.com/#!9/1c0a8b/11
*/

require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/Movie.php');
date_default_timezone_set("Australia/Sydney");

define('SECS_IN_DAY', 86400);
define('CAT_ALL', 1);
define('CAT_MOVIE', 2);
define('CAT_GENRE', 3);
define('CAT_DIRECTOR', 4);

class MovieBuilder {

    public function __construct() {

    }

    /*
     * @returns movie object of one particular movie
     */
    public function get_movie_by_id($id) {

        $sql = "SELECT
                    m.id, m.title, m.release_date, m.description,
                    GROUP_CONCAT(g.name SEPARATOR ', ') as genres,
                    m.directors, m.image_path, m.cast
                FROM movies m
                JOIN movies_genre mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                WHERE m.id = ?
                GROUP BY m.id, m.title
                LIMIT 1";

        $vals = array($id);

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) return DATABASE_ERROR;
        $result = $db->query($sql, $vals)->fetchArray();

        if (!isset($result['id'])) {
            return FALSE;
        }

        $movie = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast']);

        return $movie;
    }

    public function get_random_movies() {
        $sql = "SELECT
                    m.id, m.title, m.release_date, m.description,
                    GROUP_CONCAT(g.name SEPARATOR ', ') as genres,
                    m.directors, m.image_path, m.cast
                FROM movies m
                JOIN movies_genre mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                GROUP BY m.id, m.title
                ORDER BY rand()
                LIMIT ?";

        $vals = array(7);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        foreach ($results as $row => $movie) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast']);
        }
        
        return $movies;
    }

    /*
     * returns array of movie objects
     */
    public function get_new_releases() {
        $sql = "SELECT
                    m.id, m.title, m.release_date, m.description,
                    GROUP_CONCAT(g.name SEPARATOR ', ') as genres,
                    m.directors, m.image_path, m.cast
                FROM movies m
                JOIN movies_genre mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                WHERE release_date >= ?
                GROUP BY m.id, m.title
                ORDER BY release_date DESC
                LIMIT 15";

        $min_time =  date("Y-m-d H:i:s", time() - (SECS_IN_DAY * 60));

        $vals = array($min_time);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();

        $movies = array();

        foreach ($results as $row => $movie) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast']);
        }

        return $movies;
    }

    /*
     * Enables the search function
     */
    public function search($term, $category, $page, $sort_by) {

        switch ($category) {
            case CAT_MOVIE:
                $where = "title LIKE '%$term%'";
                break;
            
            case CAT_GENRE:
                $where = "g.name LIKE '%$term%'";
                break;

            case CAT_DIRECTOR:
                $where = "directors LIKE '%$term%'";
                break;

            default:
                $where = "title LIKE '%$term%' OR
                          g.name LIKE '%$term%' OR
                          directors LIKE '%$term%' OR
                          description LIKE '%$term%'";
                break;
        }

        $sql = "SELECT
                    m.id, m.title, m.release_date, m.description,
                    GROUP_CONCAT(g.name SEPARATOR ', ') as genre_list,
                    m.directors, m.image_path, m.cast
                FROM movies m
                JOIN movies_genre mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                WHERE $where
                GROUP BY m.id, m.title
                LIMIT ?";

        $vals = array(15);

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $db->close();

        $movies = array();
        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genre_list'], $result['directors'],
                         $result['image_path'], $result['cast']);
        }

        return $movies;

    }

}

?>