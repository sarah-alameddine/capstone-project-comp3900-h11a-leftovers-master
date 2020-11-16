<?php

require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/User.php');

class Profile {

    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    /*
     * @return FALSE if user not found, DATABASE_ERROR
     */
    public function get_info() {
        $sql = "SELECT
                    u.id,
                    u.username
                FROM users u
                WHERE u.id = ?
                LIMIT 1";
        $vals = array($this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $result = $db->query($sql, $vals)->fetchArray();
        if (empty($result)) {
            return FALSE;
        }
        $db->close();
        return new User($result['id'], $result['username']);
    }

    /*
     * Get movies part of the user's wishlist
     * @param $viewer_user_id user id of the person viewing
     * @return Array of Movie objects
     */
    public function get_wishlist($viewer_user_id) {

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
                JOIN wishlist_items w ON m.id = w.movie_id
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
                WHERE w.user_id = ?
                GROUP BY m.id, m.title";

        $vals = array($viewer_user_id, $this->get_id());

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $results = $db->query($sql, $vals)->fetchAll();

        $movies = array();
        foreach ($results as $result => $val) {
            $movies[] = new Movie($val['id'], $val['title'],
                                  $val['release_date'], $val['description'],
                                  $val['genres'], $val['directors'],
                                  $val['image_path'], $val['cast'], $val['rating']);
        }

        return $movies;

    }

    /*
     * @param $id user id
     * @return bool true if profile and user are same, else false
     */
    public function is_user_same($id) {
        if ($this->get_id() == $id) {
            return TRUE;
        }
        return FALSE;
    }

    /*
     * @return profile's user id
     */
    public function get_id() {
        return $this->id;
    }

}

?>