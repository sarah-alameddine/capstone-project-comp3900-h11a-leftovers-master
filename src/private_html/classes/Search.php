<?php



require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/Movie.php');

define('CAT_ALL', 1);
define('CAT_MOVIE', 2);
define('CAT_GENRE', 3);
define('CAT_DIRECTOR', 4);

class Search {

    public function __construct() {

    }

    /*
     * @param $term is String search term
     * @param $category constant CAT_ALL, CAT_MOVIE, CAT_GENRE, CAT_DIRECTOR
     */
    public function search($term, $category) {

        return $this->find_movies($term, $category);

    }


    private function find_movies($term, $category) {

        switch ($category) {
            case CAT_MOVIE:
                $where = "title LIKE '%$term%'";
                break;
            
            case CAT_GENRE:
                $where = "genres LIKE '%$term%'";
                break;

            case CAT_DIRECTOR:
                $where = "directors LIKE '%$term%'";
                break;

            default:
                $where = "title LIKE '%$term%' OR
                          genres LIKE '%$term%' OR
                          directors LIKE '%$term%' OR
                          description LIKE '%$term%'";
                break;
        }

        $sql = "SELECT * FROM movies
                WHERE $where
                LIMIT ?";

        $vals = array(15);

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $db->close();

        $movies = array();
        foreach ($results as $row => $val) {
            $movies[] = new Movie($val['id'], $val['title'], $val['release_date'], $val['description'], $val['genreS'], $val['directorS'], $val['image_path']);
        }

        return $movies;

    }

}