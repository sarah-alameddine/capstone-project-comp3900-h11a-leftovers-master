<!-- SECTION 4: Editor's Picks -->
        <div class="container" style="position: relative;">
            <div class="row">
               <div class="container d-flex">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Editor's Picks</a>
                      </li>
                      <li class="nav-item" style="position: absolute ;right: 0;">
                          <a class="nav-link" href="/editor-picks.php" id="view-all" class="fancy-button bg-gradient1"><span><i class="fa fa-view-all"></i>View All</span></a>
                      </li>
                    </ul>
                </div>

                <div class="row justify-content-center">

                  <!-- Tab panes for each filter-->
                  <div class="tab-content" style="width: 100%;">

                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                      <!-- a carousel for sliding here for Movie filter-->
                      <div id="carousel-5" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
          
                            <!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                              
                              <div class="card-deck" style="margin-top: 1%;">

                              <?php foreach ($editor_picks as $movie) { ?>

                                  <!--3-->
                                  <div class="card">
                                    <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto" >
                                    <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                                      <div class="card-overlay card-overlay--blur">
                                        <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                        <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                                      </div>
                                    </a>
                                  </div>

                              <?php } ?>

                              </div> <!-- card-deck -->
                          </div> <!-- carousel-item-active -->

                          <div class="carousel-item">
                                <div class="card-deck" style="margin-top: 1%;">
                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">Joe Russo</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                  </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                    <div class="card" >
                                      <img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
                                      <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                          <h6 class="card-title">MOVIE TITLE</h6>
                                          <p class="card-text" >Release date</p>
                                        </div>
                                      </a>
                                    </div>

                                </div> 

                          </div>
                        </div> <!-- carousel-inner -->

                            <!-- Carousel Arrows -->
                            <a class="carousel-control-prev" href="#carousel-5" role="button" data-slide="prev">
                              <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                              <!-- <span class="sr-only">Previous</span> --> 
                            </a>
                            <a class="carousel-control-next" href="#carousel-5" role="button" data-slide="next">
                              <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>

                      </div> <!-- carousel5 -->
                    </div> <!-- tab-pane active -->
                  </div> <!-- tab-content -->

                </div> <!-- row -->
        </div> <!-- section4 -->
        </div> <!-- row -->
