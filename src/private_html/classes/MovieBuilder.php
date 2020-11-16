<?php

require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/Movie.php');
date_default_timezone_set("Australia/Sydney");

define('SECS_IN_DAY', 86400);
define('CAT_ALL', 1);
define('CAT_MOVIE', 2);
define('CAT_GENRE', 3);
define('CAT_DIRECTOR', 4);
define('CAT_ACTOR', 6);
define('SORT_ALPHABETICAL_A_Z', 1);
define('SORT_ALPHABETICAL_Z_A', 2);
define('SORT_RATING_HIGH_TO_LOW', 3);
define('SORT_RATING_LOW_TO_HIGH', 4);
define('SORT_RANDOM', 5);

class MovieBuilder {

    public function __construct() {

    }

    /*
     * @returns movie object of one particular movie
     */
    public function get_movie_by_id($id, $user_id=NULL) {

        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = ?
                    )
                WHERE m.id = ?
                GROUP BY m.id, m.title
                LIMIT 1";

        $vals = array($user_id, $id);

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
                         $result['image_path'], $result['cast'], $result['rating']);

        return $movie;
    }

    /*
     * @param $limit how many movie you want in the array
     * @return Array of MovieObjects that are randomly selected
     */
    public function get_random_movies($limit=12) {
        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = NULL
                    )
                GROUP BY m.id, m.title
                ORDER BY rand()
                LIMIT ?";

        $vals = array($limit);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;
    }

    /*
     * @returns array of movie objects
     */
    public function get_new_releases($limit=12) {

        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = NULL
                    )
                WHERE m.release_date >= ?
                GROUP BY m.id, m.title
                ORDER BY m.release_date DESC
                LIMIT ?";

        $min_time =  date("Y-m-d H:i:s", time() - (SECS_IN_DAY * 60));
        $vals = array($min_time, $limit);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;

    }

    /*
     * @return Array of movie objects which are editor picks
     */
    public function get_editor_picks($user_id, $limit, $sort) {

        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN editor_picks e ON m.id = e.movie_id
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = ?
                    )
                GROUP BY m.id, m.title " .
                $this->order_stmt($sort) .
                " LIMIT ?";

        $min_time =  date("Y-m-d H:i:s", time() - (SECS_IN_DAY * 60));
        $vals = array($user_id, $limit);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;

    }

    /*
     * @returns array of movie objects
     */
    public function get_year_movies($year, $limit=12) {

        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = NULL
                    )
                WHERE YEAR(m.release_date)= ?
                GROUP BY m.id, m.title
                ORDER BY m.release_date DESC
                LIMIT ?";

        $vals = array( $year, $limit);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;

    }

    /*
     * @param $term Search term, a string
     * @param $category, int, defined at the top of the file
     * @param $sort, int, type of sort you want defined at the top of the file
     * @param $user_id to help calculate average of the movie
     * Allows you to search movies based on a term
     */
    public function search($term, $category, $sort, $user_id=NULL) {

        $where = $this->build_search_where_clause($term, $category);
        $sql = "SELECT 
                    m.id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM movies m
                JOIN movie_cast mc ON m.id = mc.movie_id
                JOIN actors a ON mc.actor_id = a.id
                JOIN movie_directors md ON m.id = md.movie_id
                JOIN directors d ON md.director_id = d.id
                JOIN movie_genres mg ON m.id = mg.movie_id
                JOIN genres g ON mg.genre_id = g.id
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = ?
                    )
                WHERE $where
                GROUP BY m.id, m.title " .
                $this->order_stmt($sort);

        $vals = array($user_id);

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();

        $db->close();

        $movies = array();
        foreach ($results as $row => $result) {
            $movies[] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;

    }

    /*
     * @return string Helper to get specific order type
     */
    private function order_stmt($sort) {
        if ($sort == SORT_ALPHABETICAL_A_Z) {
            return "ORDER BY m.title ASC, rating DESC";
        } else if ($sort == SORT_ALPHABETICAL_Z_A) {
            return "ORDER BY m.title DESC, rating DESC";
        } else if ($sort == SORT_RATING_LOW_TO_HIGH) {
            return "ORDER BY rating ASC, m.title ASC";
        } else if ($sort == SORT_RANDOM) {
            return "ORDER BY rand()";
        } else {
            return "ORDER BY rating DESC, m.title ASC";
        }
    }

    /*
     * @return string Helper to get similar movie terms
     */
    private function build_search_where_clause($term, $category) {

        $terms = explode(" ", $term);
        $where = '';

        foreach ($terms as $val) {
            
            if ($category == CAT_MOVIE) {
                $where .= "m.title LIKE '%$val%' OR
                           m.description LIKE '%$val%' OR";

            } else if ($category == CAT_GENRE) {

                $where .= "g.genre LIKE '%$val%' OR";

            } else if ($category == CAT_DIRECTOR) {

                $where .= "d.name LIKE '%$val%' OR";

            } else if ($category == CAT_ACTOR) {

                $where .= "a.name LIKE '%$val%' OR";

            } else {
                $where = "m.title LIKE '%$val%' OR
                          m.description LIKE '%$val%' OR
                          g.genre LIKE '%$val%' OR
                          d.name LIKE '%$val%' OR
                          a.name LIKE '%$val%' OR";
            }

        }
        return rtrim($where, 'OR');

    }

}

?>