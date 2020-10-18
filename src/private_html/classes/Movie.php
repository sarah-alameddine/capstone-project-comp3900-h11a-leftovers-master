<?php

class Movie {

    private $id;
    private $title;
    private $release_date;
    private $description;
    private $genre;
    private $director;
    private $views;
    private $image_path;

    public function __construct($id, $title, $release_date, $description, $genre, $director, $views, $image_path) {
        $this->id = $id;
        $this->title = $title;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->genre = $genre;
        $this->director = $director;
        $this->views = $views;
        $this->image_path = $image_path;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_release_date() {
        return $this->release_date;
    }

    public function get_description() {
        return $this->description;
    }

    public function get_genre() {
        return $this->genre;
    }

    public function get_director() {
        return $this->director;
    }

    public function get_views() {
        return $this->views;
    }

    public function get_image_path() {
        return $this->image_path;
    }

}