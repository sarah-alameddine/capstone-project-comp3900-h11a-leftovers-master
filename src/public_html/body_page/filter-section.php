<!-- css for the cards -->
<style>
    #home-tab {
        color: white;
        font-size: 22px;
    }

    #profile-tab {
        font-size: 16px;
    }

    #messages-tab {
        font-size: 16px;
    }

    #settings-tab {
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
                <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Featured</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Random</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">New Releases</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">2019</a>
            </li>
                       
        </ul>

    </div>

    
    <div class="row" style="margin-top: 1%;">

        <!-- Tab panes for each filter-->
        <div class="tab-content" style="width: 100%;">

            <!-- tab-pane for RandomMovie -->
            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="container">
                    <div class="row flex-row flex-nowrap">
                            
                        <?php foreach ($random_movies as $movie) { ?>
                        <div class="col-2" style="height: 38vh;">
                            <div class="card" style="margin-bottom: 4%;">
                                <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
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
                
<!-- ======================================= NEW RELEASE == MESSAGES =========================================================== -->
                
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    
                <div class="container">
                    <div class="row flex-row flex-nowrap">
                                
                        <?php foreach ($new_movies as $movie) { ?>
                        <div class="col-2" style="height: 38vh;">
                            <div class="card" style="margin-bottom: 4%;">
                                <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
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

                
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        
                <div class="container">
                    <div class="row flex-row flex-nowrap">
                                    
                        <?php foreach ($year_movies as $movie) { ?>
                        <div class="col-2" style="height: 38vh;">
                            <div class="card" style="margin-bottom: 4%;">
                                <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
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

