<?php

require_once(__DIR__ . '/../private_html/classes/Search.php');

$search = new Search();

if (isset($_GET['term']) && isset($_GET['category']) &&
    $_GET['category'] >= 1 && $_GET['category'] <= 4) {

    $results = $search->search($_GET['term'], $_GET['category']);

} else {
    $results = array();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a13c7bceb2.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/moviePage.css">

    <title>FilmFinity</title>
  </head>
  <body>
    
    <div style="position: relative; min-height: 100vh;">
        <!-- Nav bar-->
        <?php require_once(__DIR__ . '/../private_html/html-templates/global/nav-2.php'); ?>

        <div style="padding-bottom: 2.5rem;">
            <!-- search results -->
            <div class="container-fluid" style="margin-bottom: 60px;">
                <h1> Search result for : <?php echo(htmlentities($_GET['term'])); ?> </h1>

                <?php if (count($results) == 0) { ?>

                  <h1>No results found</h1>

                <?php } else { ?>

                    <?php foreach ($results as $movie) { ?>

                        <div> <a href="/movies/title.php?id=<?php echo($movie->get_id()); ?>"><?php echo($movie->get_title()); ?> (<?php echo($movie->get_release_date()); ?>)</a></div>
                        <img src="<?php echo($movie->get_image_path()); ?>" alt="movieposter" style="width:150px;height:200px;">

                    <?php } ?>

                <?php } ?>

            </div>

        </div>
        
        <!-- Footer -->
            <?php require_once(__DIR__ . '/../private_html/html-templates/global/footer.php'); ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
