<?php

class PlaylistBuilder {

    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    /*
     * Get the information about a playlist
     * @return associative array of the info
     */
    private function get_playlist_info() {
        $sql = "SELECT 
                    p.name,
                    p.description,
                    p.user_id,
                    u.username
                FROM playlists p
                JOIN users u ON p.user_id = u.id
                WHERE p.id = ?
                LIMIT 1";

        $vals = array($this->get_id());

        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $result = $db->query($sql, $vals)->fetchArray();

        $db->close();
        return $result;
    }

    /*
     * Gets a specific playlist
     * @param $id ID of the playlist
     * @return Playlist object, FALSE if doesn't exist, DATABASE_ERROR
     */
    public function get_playlist() {

        $info = $this->get_playlist_info();
        if ($info === DATABASE_ERROR) {
            return DATABASE_ERROR;
        } else if (empty($info)) {
            return FALSE;
        }
        $playlist_name = $info['name'];
        $playlist_desc = $info['description'];
        $user = new User($info['user_id'], $info['username']);

        $sql = "SELECT
                    m.id as movie_id,
                    m.title,
                    m.release_date,
                    m.description,
                    m.image_path,
                    GROUP_CONCAT(DISTINCT g.genre) as genres,
                    GROUP_CONCAT(DISTINCT a.name) as cast,
                    GROUP_CONCAT(DISTINCT d.name) as directors,
                    AVG(COALESCE(r.rating, 0)) AS rating
                FROM playlists p
                JOIN playlist_items i ON p.id = i.playlist_id
                JOIN movies m ON i.movie_id = m.id
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
                WHERE p.id = ?
                GROUP BY m.id, m.title";

        $vals = array($user->get_id(), $this->get_id());

        $db = new Database();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }

        $results = $db->query($sql, $vals)->fetchAll();

        $movies = array();
        foreach ($results as $result => $val) {
            if (!is_null($val['movie_id'])) {
                $movies[] = new Movie($val['movie_id'], $val['title'],
                                      $val['release_date'], $val['description'],
                                      $val['genres'], $val['directors'],
                                      $val['image_path'], $val['cast'], $val['rating']);
            }
        }

        return new Playlist($this->get_id(), $playlist_name, $playlist_desc,
                            $user, $movies);

    }

    /*
     * @return id of playlist
     */
    public function get_id() {
        return $this->id;
    }

}

?>