<?php

require_once(__DIR__ . '/Movie.php');
require_once(__DIR__ . '/Playlist.php');
require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/BannedUser.php');
require_once(__DIR__ . '/Authentication.php');

define('PLAYLISTS_PER_PAGE', 9);
define('SELF_BAN', -1);
define('UNBANNED', -2);
define('BANNED', -3);
define('UNABLE_TO_ADD', -4);
define('ADDED', -5);
define('UNABLE_TO_REMOVE', -8);
define('REMOVED', -7);
define('PLAYLIST_TOO_LONG', -9);
define('NOT_OWNER', -10);
define('MOVIE_IN_DB', -11);
define('DELETED_LIST', -12);
define('LIST_DOESNT_EXIST', -13);
define('PASS_OR_EMAIL', -14);
define('PASSWORD_DONT_MATCH', -15);
define('DETAILS_UPDATED', - 16);
define('REVIEW_ADDED', -17);
define('INVALID_REVIEW', -18);

class User {

    private $id;
    private $username;
    private $is_admin;

    public function __construct($id, $username, $is_admin=FALSE) {
        $this->id = $id;
        $this->username = $username;
        $this->is_admin = $is_admin;
    }

    /*
     * Add a movie to user's wishlist
     * @return wishlist id on success or FALSE if unable to insert or
     * DATABASE_ERROR
     */
    public function add_movie_to_wishlist($movie_id) {
        $sql = "INSERT INTO wishlist_items (user_id, movie_id) VALUES (?,?)";
        $vals = array($this->get_id(), $movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $wishlist_id = $db->query($sql, $vals)->lastInsertID();
        if ($wishlist_id == 0) {
            return UNABLE_TO_ADD;
        }

        $db->close();

        return ADDED;
    }

    /*
     * @return bool true if its in this user's wishlist
     */
    public function is_movie_in_wishlist($movie_id) {

        $sql = "SELECT id
                FROM wishlist_items
                WHERE user_id = ?
                AND movie_id = ?
                LIMIT 1";
        $vals = array($this->get_id(), $movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return FALSE;
        }

        $result = $db->query($sql, $vals)->fetchArray();

        if (empty($result)) {
            return FALSE;
        }

        return TRUE;
    }

    /*
     * @return bool true if its in editor picks
     */
    public function is_movie_in_editor_picks($movie_id) {

        $sql = "SELECT id
                FROM editor_picks
                WHERE movie_id = ?
                LIMIT 1";
        $vals = array($movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return FALSE;
        }

        $result = $db->query($sql, $vals)->fetchArray();

        if (empty($result)) {
            return FALSE;
        }
        return TRUE;
    }

    /*
     * Remove movie from wishlist
     * @return int amount of affected rows on success or DATABASE_ERROR
     */
    public function remove_movie_from_wishlist($movie_id) {

        $sql = "DELETE FROM wishlist_items
                WHERE user_id = ?
                AND movie_id = ?
                LIMIT 1";
        $vals = array($this->get_id(), $movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return UNABLE_TO_REMOVE;
        }
        $affected_rows = $db->query($sql, $vals)->affectedRows();
        $db->close();

        return REMOVED;

    }

    /*
     * Create a playlist
     * @return playlist ID, PLAYLIST_TOO_LONG, UNABLE_TO_ADD on error, DATABASE ERROR
     */
    public function create_playlist($name, $description) {

        if (strlen($name) > 64 || strlen($description) > 1024) {
            return PLAYLIST_TOO_LONG;
        }

        $sql = "INSERT INTO playlists (name, description, user_id)
                VALUES (?,?,?)";
        $vals = array($name, $description, $this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $id = $db->query($sql, $vals)->lastInsertID();
        if ($id == 0) {
            return UNABLE_TO_ADD;
        }

        $db->close();

        return $id;
    }

    /*
     * Delete a playlist
     * @return int affected rows, return NOT_OWNER if not owner
     * or DATABASE_ERROR
     */
    public function delete_playlist($playlist_id) {

        // Check if user owns the playlist
        if ($this->owns_playlist($playlist_id) !== TRUE) {
            return NOT_OWNER;
        }

        // Delete playlist items
        $sql_items = "DELETE FROM playlist_items WHERE playlist_id = ?";
        $vals_items = array($playlist_id);

        // Delete playlist
        $sql_pl = "DELETE FROM playlists WHERE user_id = ? AND id = ? LIMIT 1";
        $vals_pl = array($this->get_id(), $playlist_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $affected_rows = $db->query($sql_items, $vals_items)->affectedRows();
        $affected_rows = $db->query($sql_pl, $vals_pl)->affectedRows();
        if ($affected_rows == 0) {
            return LIST_DOESNT_EXIST;
        }
        $db->close();

        return DELETED_LIST;
    }

    /*
     * @return Array of playlists without movies or DATABASE_ERROR
     */
    public function get_playlists() {

        $sql = "SELECT 
                    p.id as playlist_id,
                    p.name,
                    p.description,
                    u.id as user_id,
                    u.username
                FROM playlists p
                JOIN users u ON p.user_id = u.id
                WHERE p.user_id = ?";
        $vals = array($this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $results = $db->query($sql, $vals)->fetchAll();

        $playlists = array();
        foreach ($results as $result => $val) {
            $user = new User($val['user_id'], $val['username']);
            $playlists[] = new Playlist($val['playlist_id'],
                                        $val['name'],
                                        $val['description'],
                                        $user);
        }

        return $playlists;
    }

    /*
     * Add a movie to a playlist
     * @return playlist_items ID, FALSE if unable to insert, DATABASE_ERROR
     */
    public function add_movie_to_playlist($playlist_id, $movie_id) {

        // Check if user owns the playlist
        if ($this->owns_playlist($playlist_id) !== TRUE) {
            return NOT_OWNER;
        }

        $sql = "INSERT INTO playlist_items (playlist_id, movie_id)
                VALUES (?, ?)";

        $vals = array($playlist_id, $movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $id = $db->query($sql, $vals)->lastInsertID();
        if ($id == 0) {
            return MOVIE_IN_DB;
        }

        $db->close();
        return $id;
    }

    /*
     * Remove a movie to a playlist
     * @return int affected rows, NOT_OWNER if unable to delete, DATABASE_ERROR
     */
    public function remove_movie_from_playlist($playlist_id, $movie_id) {

        // Check if user owns the playlist
        if ($this->owns_playlist($playlist_id) !== TRUE) {
            return NOT_OWNER;
        }

        $sql = "DELETE FROM playlist_items
                WHERE playlist_id = ?
                AND movie_id = ?
                LIMIT 1";
        $vals = array($playlist_id, $movie_id);

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $affected_rows = $db->query($sql, $vals)->affectedRows();

        $db->close();
        return $affected_rows;

    }

    /*
     * @param $id ID of the playlist
     * @return boolean TRUE if owns playlist, false if not
     */
    private function owns_playlist($id) {
        // Check if you own the playlist
        $sql = "SELECT id
                FROM playlists
                WHERE id = ?
                AND user_id = ?
                LIMIT 1";
        $vals = array($id, $this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $result = $db->query($sql, $vals)->fetchArray();

        if ( !isset($result['id']) ) {
            return FALSE;
        }
        return TRUE;
    }

    /*
     * @param $id user id of the person you want to ban
     * @return BANNED, SELF_BAN, DATABSE_ERROR
     */
    public function ban_user($id) {
        if ($id == $this->get_id()) {
            return SELF_BAN;
        }

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $sql = "INSERT IGNORE INTO user_bans (user_id, banned_user_id)
                VALUES (?, ?)";
        $vals = array($this->get_id(), $id);

        $db->query($sql, $vals);

        return BANNED;

    }

    /*
     * @param $id user id of the person you want to ban
     * @return UNBANNED, SELF_BAN, DATABSE_ERROR
     */
    public function unban_user($id) {
        if ($id == $this->get_id()) {
            return SELF_BAN;
        }

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $sql = "DELETE FROM user_bans
                WHERE user_id = ?
                AND banned_user_id = ?
                LIMIT 1";
        $vals = array($this->get_id(), $id);

        $db->query($sql, $vals);

        return UNBANNED;

    }

    /*
     * Get the ban list of the user
     * @return Array of BannedUser objects
     */
    public function get_ban_list() {
        $sql = "SELECT
                    b.banned_user_id,
                    u.username
                FROM user_bans b
                JOIN users u ON b.banned_user_id = u.id
                WHERE b.user_id = ?";

        $vals = array($this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        $results = $db->query($sql, $vals)->fetchAll();

        $bans = array();
        foreach ($results as $row => $val) {
            $bans[] = new BannedUser($val['banned_user_id'], $val['username']);
        }

        return $bans;

    }

    /*
     * @param $id user id of the person you want to see if you banned
     * @return Bool on TRUE, you've banned them, else FALSE
     */
    public function check_ban($id) {

        $sql = "SELECT id
                FROM user_bans
                WHERE user_id = ?
                AND banned_user_id = ?
                LIMIT 1";

        $vals = array($this->get_id(), $id);

        $db = new Database();
        if ($db->has_error()) {
            return FALSE;
        }
        $result = $db->query($sql, $vals)->fetchArray();
        if (empty($result)) {
            return FALSE;
        }
        return TRUE;

    }

    /*
     * @return Array of movie objects that are your recommendations
     */
    public function get_my_recommendations($limit=12) {
        $sql = "(SELECT 
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
                JOIN wishlist_items wi ON m.id = wi.movie_id
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
                WHERE wi.user_id = ?
                GROUP BY m.id, m.title
                LIMIT ?)

                UNION

                (SELECT 
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
                JOIN playlist_items pi ON m.id = pi.movie_id
                join playlists p ON pi.playlist_id = p.id
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
                WHERE p.user_id = ?
                GROUP BY m.id, m.title
                LIMIT ?)

                UNION

                (SELECT 
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
                        WHERE b.banned_user_id = r.user_id AND b.user_id = ?
                    )
                GROUP BY m.id, m.title
                ORDER BY rating DESC
                LIMIT ?)
                LIMIT ?";

        $vals = array($this->get_id(), $this->get_id(), $limit,
                      $this->get_id(), $this->get_id(), $limit,
                      $this->get_id(), $limit, $limit);

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
     @param $curr_pass current password
     @param $new_email (optional). Must provide new pass if missing
     @param $new_pass (optional). Must provide new email if missing
     @return int affected rows, EMAIL_ILLEGAL, PASSWORD_ILLEGAL, INCORRECT_PASS
     */
    public function update_details($curr_pass, $new_email=NULL, $new_pass=NULL) {
        $auth = new Authentication();
        return $auth->update_details($this->get_id(), $curr_pass, $new_email, $new_pass);

    }

    /*
     * check if a user ID is the same as this user
     * @return bool TRUE if same id's
     */
    public function is_user_same($id) {
        if ($this->get_id() == $id) {
            return TRUE;
        }
        return FALSE;
    }

    /*
     * @return first character of username
     */
    public function get_first_letter($capitalize=FALSE) {
        if ($capitalize == TRUE) {
            return strtoupper(substr($this->get_username(), 0, 1));
        }
        return substr($this->get_username(), 0, 1);
    }

    /*
     * @return String username
     */
    public function get_username() {
        return $this->username;
    }

    /*
     * @return int user id
     */
    public function get_id() {
        return $this->id;
    }

    /*
     * @return the public path to go the user's profile
     */
    public function get_profile_link() {
        return "/profile/?id=" . $this->get_id();
    }

    /*
     * @return bool true if you are admin, else FALSE
     */
    public function is_admin() {
        return $this->is_admin;
    }

}