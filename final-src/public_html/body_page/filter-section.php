<!-- css for the cards -->
<style>
    #featured-tab {
        color: white;
        font-size: 22px;
    }

    #random-tab {
        font-size: 16px;
    }

    #new-releases-tab {
        font-size: 16px;
    }

    #last-year-tab {
        font-size: 16px;
    }

    .nav-link:hover {
        color: #9effec;
    }

    .nav-link:active {
        color: #3b945e;
    }

    .flex-nowrap{
        overflow-x:hidden;
    }
    .flex-nowrap:hover{
        overflow-x:scroll;
    }

</style>


<div class="container" >
    
    <div class="row">
      
        <!-- Nav tabs for filter pane-->
        <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link disabled" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="random-tab" data-toggle="tab" href="#random" role="tab" aria-controls="random" aria-selected="false">Random</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="new-releases-tab" data-toggle="tab" href="#new-releases" role="tab" aria-controls="new-releases" aria-selected="false">New Releases</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="last-year-tab" data-toggle="tab" href="#last-year" role="tab" aria-controls="last-year" aria-selected="false">2019</a>
            </li>
                       
        </ul>

    </div>

    
    <div class="row" style="margin-top: 1%;">

        <!-- Tab panes for each filter-->
        <div class="tab-content" style="width: 100%;">

            <!-- tab-pane for RandomMovie -->
            <div class="tab-pane active" id="random" role="tabpanel" aria-labelledby="random-tab">

                <div class="container">
                    <div class="row scrollbar scrollbar-dusty-grass flex-row flex-nowrap">
                            
                        <?php foreach ($random_movies as $movie) { ?>
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
                
<!-- ======================================= NEW RELEASE == new-releases =========================================================== -->
                
            <div class="tab-pane" id="new-releases" role="tabpanel" aria-labelledby="new-releases-tab">
                    
                <div class="container">
                    <div class="row scrollbar scrollbar-dusty-grass flex-row flex-nowrap">
                                
                        <?php foreach ($new_movies as $movie) { ?>
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

            
                
<!------------- 2019---------->  
            <div class="tab-pane" id="last-year" role="tabpanel" aria-labelledby="last-year-tab">
                        
                <div class="container">
                    <div class="row scrollbar scrollbar-dusty-grass flex-row flex-nowrap">
                                    
                        <?php foreach ($year_movies as $movie) { ?>
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

    </div>

</div>

