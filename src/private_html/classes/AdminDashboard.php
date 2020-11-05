<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . '/Database.php');

class AdminDashboard {

    public function __construct() {

    }

    public function add_movie($title, $release_date, $description, $image, $genres, $directors) {

        
        // Image
        if ($this->allow_image_upload($image)) {
            $image_filename = uniqid('', TRUE) . "." . $this->image_ext_to_lower($image);
            $image_path = __DIR__ . '/../../public_html/movies/assets/posters/' . $image_filename;
            move_uploaded_file($image['tmp_name'], $image_path);
        }

        $sql = "INSERT INTO movies (title, release_date, description, image_path, genres, directors)
                VALUES (?, ?, ?, ?, ?, ?)";
        $vals = array($title, $release_date, $description, $image_filename, $genres, $directors);
        $db = new Database();
        $db->show_errors();
        if ($db->has_error()) {
            return DATABASE_ERROR;
        }
        return $db->query($sql, $vals)->lastInsertID();

    }

    private function allow_image_upload($image) {
        $image_ext = explode('.', $image['name']);
        $image_actual_ext = strtolower(end($image_ext));
        $allowed_image_ext = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($image_actual_ext, $allowed_image_ext) &&
            $image['error'] === 0 &&
            $image['size'] < 5000000) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function image_ext_to_lower($image) {
        $image_ext = explode('.', $image['name']);
        return strtolower(end($image_ext));
    }
}

?>