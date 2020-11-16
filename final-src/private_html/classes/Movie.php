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
    private $rating;

    public function __construct($id, $title, $release_date, $description, $genre, $director, $image_path, $cast, $rating) {
        $this->id = $id;
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->genre = explode(',', $genre);
        $this->director = explode(',', $director);
        $this->image_path = $image_path;
        $this->cast =  explode(',', $cast);
        $this->rating = $rating;
    }

    /*
     * @return TRUE if user has written a review, else FALSE or DATABASE_ERROR
     */
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

    /*
     * Check the user's review and insert it
     * @return FALSE if invalid rating else return review_id or DATABASE_ERROR
     */
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

    /*
     * Insert the review into the database
     * @return DATABASE_ERROR or affected_rows
     */
    public function insert_review($user_id, $rating, $comment) {

        $sql = "INSERT INTO reviews (movie_id, user_id, rating, comment, post_date)
                VALUES (?, ?, ?, ?, ?)";
        $curr_date = date("Y-m-d H:i:s", time());
        $vals = array($this->get_id(), $user_id, $rating, $comment, $curr_date);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $review_id = $db->query($sql, $vals)->affectedRows();
        $db->close();
        return $review_id;

    }

    /*
     * @return Array of MovieReview objects for this movie
     */
    public function get_reviews($user_id=NULL) {
        $sql = "SELECT 
                    r.user_id as user_id,
                    u.username,
                    r.rating,
                    r.comment,
                    r.post_date
                FROM movies m
                LEFT JOIN reviews r 
                    ON m.id = r.movie_id
                    AND NOT EXISTS (
                        SELECT 1 
                        FROM user_bans b
                        WHERE b.banned_user_id = r.user_id AND b.user_id = ?
                    )
                JOIN users u ON r.user_id = u.id
                WHERE m.id = ?
                GROUP BY r.user_id
                ORDER BY r.post_date DESC";
        $vals = array($user_id, $this->get_id());
        $db = new Database();
        $db->show_errors();
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

    /*
     * @return array of movie objects which are similar to this movie
     */
    public function get_recommendations() {
        $sql = "(SELECT
                'genre' as type,
                m.id,
                m.title,
                m.release_date,
                m.description,
                m.image_path,
                GROUP_CONCAT(DISTINCT g.genre ORDER BY g.genre ASC) as genres,
                GROUP_CONCAT(DISTINCT a.name ORDER BY a.name ASC) as cast,
                GROUP_CONCAT(DISTINCT d.name ORDER BY d.name ASC) as directors,
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
            WHERE m.id != ?
            AND (" .
            $this->like_recommend_like_stmt('g.genre', $this->get_genre_arr()) .
            ") GROUP BY m.id, m.title
            ORDER BY rating DESC
            LIMIT 2)

            UNION

            (SELECT
                'director' as type,
                m.id,
                m.title,
                m.release_date,
                m.description,
                m.image_path,
                GROUP_CONCAT(DISTINCT g.genre ORDER BY g.genre ASC) as genres,
                GROUP_CONCAT(DISTINCT a.name ORDER BY a.name ASC) as cast,
                GROUP_CONCAT(DISTINCT d.name ORDER BY d.name ASC) as directors,
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
            WHERE m.id != ?
            AND (" .
            $this->like_recommend_like_stmt('d.name', $this->get_director_arr()) .
            ") GROUP BY m.id, m.title
            ORDER BY rating DESC
            LIMIT 2)

            UNION

            (SELECT
                'actor' as type,
                m.id,
                m.title,
                m.release_date,
                m.description,
                m.image_path,
                GROUP_CONCAT(DISTINCT g.genre ORDER BY g.genre ASC) as genres,
                GROUP_CONCAT(DISTINCT a.name ORDER BY a.name ASC) as cast,
                GROUP_CONCAT(DISTINCT d.name ORDER BY d.name ASC) as directors,
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
            WHERE m.id != ?
            AND (" .
            $this->like_recommend_like_stmt('a.name', $this->get_cast_arr()) .
            ") GROUP BY m.id, m.title
            ORDER BY rating DESC
            LIMIT 2)";

        $vals = array($this->get_id(), $this->get_id(), $this->get_id());

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        $movies = array();

        $movie_titles = array();

        foreach ($results as $row => $result) {

            if (in_array($result['title'], $movie_titles)) {
                continue;
            }

            $movie_titles[] = $result['title'];

            $movies[$result['type']][] = new Movie($result['id'], $result['title'],
                         $result['release_date'], $result['description'],
                         $result['genres'], $result['directors'],
                         $result['image_path'], $result['cast'], $result['rating']);
        }
        
        return $movies;
    }

    /*
     * Create a like statement for the get_recommendation() function.
     * @return like statement string
     */
    private function like_recommend_like_stmt($col, $arr) {

        $stmt = "";
        foreach ($arr as $val) {
            $stmt .= "$col LIKE '$val' OR ";
        }

        return rtrim($stmt, "OR ");

    }

    /*
     * @return String public path to the movie
     */
    public function get_movie_page_path() {
        return '/movies/title.php?id=' . $this->get_id();
    }

    /*
     * @return int movie id
     */
    public function get_id() {
        return $this->id;
    }

    /*
     * @return string movie title
     */
    public function get_title() {
        return $this->title;
    }

    /*
     * @return release date
     */
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

    /*
     * @return String genere commar seperated
     */
    public function get_genre() {
        return implode(", ", $this->genre);
    }

    /*
     * @return genre
     */
    public function get_genre_arr() {
        return $this->genre;
    }

    /*
     * @return String directors commar seperated
     */
    public function get_director() {
        return implode(", ", $this->director);
    }

    /*
     * @return director
     */
    public function get_director_arr() {
        return $this->director;
    }

    /*
     * @return String cast commar seperated
     */
    public function get_cast() {
        return implode(", ", $this->cast);
    }

    /*
     * @return genre
     */
    public function get_cast_arr() {
        return $this->cast;
    }

    /*
     * @return String public image path
     */
    public function get_image_path() {
        return  '/movies/assets/posters/' . $this->image_path;
    }

    /*
     * @return float of average rating
     */
    public function get_rating($precision=2) {
        return round($this->rating, $precision);
    }

}