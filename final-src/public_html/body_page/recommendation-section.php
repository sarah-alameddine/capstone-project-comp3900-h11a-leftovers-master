<!-- SECTION 3: our Recommendations -->
<?php if (isset($recommendations)) { ?>
    <div class="container" style="position: relative;">
        <div class="row">
            <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link disabled" id="your-recommendations-tab" data-toggle="tab" href="#your-recommendations" role="tab" aria-controls="your-recommendations" aria-selected="true">Your Recommendations</a>
                </li>
            </ul>
        </div>

        <div class="row" style="margin-top: 1%;">

            <div class="container">
                <div class="row scrollbar scrollbar-dusty-grass flex-row flex-nowrap">
                                            
                    <?php foreach ($recommendations as $movie) { ?>
                    <div class="col-2" style="height: 38vh;">
                        <div class="card" style="margin-bottom: 4%;">
                            <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto" style="width: 19.5vh;">
                            <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                            <div class="card-overlay card-overlay--blur">
                                <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>

        </div>

    </div>

<?php } ?>

        
