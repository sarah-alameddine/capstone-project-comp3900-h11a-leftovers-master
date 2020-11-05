<?php

class User {

    private $id;
    private $username;

    public function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;
    }

    /*
     * @return first character of username
     */
    public function get_first_letter() {
        return substr($this->get_username(), 0, 1);
    }

    /*
     * @return String username
     */
    public function get_username() {
        return $this->username;
    }

    public function get_id() {
        return $this->id;
    }

}