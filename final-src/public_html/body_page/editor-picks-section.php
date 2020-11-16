


<div class="container">
    
    <div class="row">
      
        <!-- Nav tabs for filter pane-->
        <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link disabled" id="editors-picks-tab" data-toggle="tab" href="#editors-picks" role="tab" aria-controls="editors-picks" aria-selected="true">Editor's Picks</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="/editor-picks.php" id="view-all" class="fancy-button bg-gradient1"><span><i class="fa fa-view-all"></i>View All</span></a>
            </li>
                       
        </ul>

    </div>

    
    <div class="row w-100" style="margin-top: 1%;">
                
        <div class="container">
            <div class="row scrollbar scrollbar-dusty-grass flex-row flex-nowrap">
                            
                <?php foreach ($editor_picks as $movie) { ?>
                <div class="col-2" style="height: 38vh;">
                    <div class="card" style="margin-bottom: 4%;">
                        <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto" style="width: 18.9vh;">
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

