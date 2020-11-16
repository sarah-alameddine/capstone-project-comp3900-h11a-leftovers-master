<!-- SECTION 3: our Recommendations -->

<div class="container" style="position: relative;">
        
    <?php if (isset($recommendations)) { ?>

        <!-- SECTION 3: YOUR RECOMMENDATIONS -->
        <div class="row">
        <div class="container" style="position: relative;">
              <div class="row">
                  <!-- NAV TABS -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Your Recommendations</a>
                    </li>
                  </ul>
              </div>

              <div class="row justify-content-center">

                <!-- Tab panes for each filter-->
                <div class="tab-content" style="width: 100%;">

                  <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- a carousel for sliding here for Movie filter-->
                    <div id="carousel-4" class="carousel slide" data-interval="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">

                        <!-- a deck of cards here, each card is a movie  CAN FIT 6 MOVIES INTO 1 slide-->
                        
                            <div class="card-deck" style="margin-top: 1%;">
                              <!--1-->

                              <?php foreach ($recommendations as $movie) { ?>

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
                            <!-- 1 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 2 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 3 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 4 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 5 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 6 -->
                            <div class="card">
                              <img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                          </div> <!-- card-deck -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item">
                          <div class="card-deck" style="margin-top: 1%;">
                            <!-- 1 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 2 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 3 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 4 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 5 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                            <!-- 6 -->
                            <div class="card">
                              <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                              <a href='https://www.google.com/'>
                                <div class="card-overlay card-overlay--blur">
                                  <h6 class="card-title">MOVIE TITLE</h6>
                                  <p class="card-text" >Release date</p>
                                </div>
                              </a>
                            </div>

                          </div> <!-- card-deck -->
                        </div> <!-- carousel-item -->
                      </div> <!-- carousel-inner -->

                      <!-- Carousel Arrows -->
                      <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev">
                        <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next">
                        <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> <!-- carousel4 -->

                  </div> <!-- tab-pane-active -->
                </div> <!-- tab-content -->
              </div> <!-- row -->
        </div> <!-- section3 -->
        </div> <!-- row -->

    <?php } ?>

</div>



        
