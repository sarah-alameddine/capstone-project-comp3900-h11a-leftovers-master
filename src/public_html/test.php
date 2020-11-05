<pre><?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(__DIR__ . '/../private_html/classes/MovieBuilder.php');

$mb = new MovieBuilder();
$movie = $mb->get_movie_by_id(1);
print_r($movie->get_reviews());