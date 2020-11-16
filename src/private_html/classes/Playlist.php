<?php

require_once(__DIR__ . '/Movie.php');
require_once(__DIR__ . '/User.php');

class Playlist {

    private $id;
    private $name;
    private $description;
    private $movies;
    private $owner;

    public function __construct($id, $name, $description, $owner, $movies=array()) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->movies = $movies;
        $this->owner = $owner;
    }

    /*
     * Add movie
     * @param $movie Movie object
     */
    public function add_movie($movie) {
        $this->movies[] = $movie;
    }

    /*
     * @return playlist id
     */
    public function get_id() {
        return $this->id;
    }

    /*
     * @return name of playlist
     */
    public function get_name() {
        return $this->name;
    }

    /*
     * @param $length how many characters you want
     */
    public function get_description($length=NULL) {
        if (is_null($length)) {
            return $this->description;
        }
        return substr($this->description, 0, $length);
    }

    /*
     * @return array of Movie objects
     */
    public function get_movies() {
        return $this->movies;
    }

    /*
     * @return playlist owner's user id
     */
    public function get_owner_id() {
        return $this->owner->get_id();
    }

    /*
     * @return playlist owner's username
     */
    public function get_owner_username() {
        return $this->owner->get_username();
    }

    /*
     * @param $id user id we are checking to see if they are the owner
     * @return bool
     */
    public function is_owner($id) {
        if ($this->get_owner_id() == $id) {
            return TRUE;
        }
        return FALSE;
    }

    /*
     * @return playlist owner's first letter of their username
     */
    public function get_first_letter($capitalize=FALSE) {
        return $this->owner->get_first_letter($capitalize);
    }

    /*
     * @return playlist owner's profile link
     */
    public function get_owner_profile_link() {
        return $this->owner->get_profile_link();
    }

}