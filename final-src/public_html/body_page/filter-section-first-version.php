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
</style>


<div class="container" style="position: relative;">
    
    <div class="row">

           <!-- Nav tabs -->
           <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
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
                <a href="#" id="view-all" class="fancy-button bg-gradient1"><span><i class="fa fa-view-all"></i>View All</span></a>
            </ul>

    </div>

    
    <div class="row justify-content-center">

        <!-- Tab panes for each filter-->
        <div class="tab-content" style="width: 100%;">

            <!-- tab-pane for Movie -->
            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                  <!-- a carousel for sliding here for Movie filter-->
                  <div id="carousel-1" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
  
                            <!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                            <div class="card-deck" style="margin-top: 1%;">

                                  <?php foreach ($random_movies as $movie) { ?>

                                    <div class="card" >
                                        <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
                                        <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                                            <div class="card-overlay card-overlay--blur">
                                                <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                                <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                                            </div>
                                        </a>
                                    </div>

                                <?php } ?>

                            </div>

                          </div>
<!-- ========================================== MOVIE =================================================== -->
                          <div class="carousel-item">
                            <div class="card-deck" style="margin-top: 1%;">
                        
                                <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                  <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                          </div>

                         <div class="carousel-item">

                            <div class="card-deck" style="margin-top: 1%;">
                            
                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                          </div>

                    </div>
                    <!--
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="fa fa-chevron-circle-left" aria-hidden="true" ></span>
                      <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                       <span class="fa fa-chevron-circle-right" aria-hidden="true" ></span>
                       <span class="sr-only">Next</span>
                       </a>
                    -->
                   </div>
        
            </div>
<!-- ======================================= NEW RELEASE == MESSAGES =========================================================== -->
            <!-- tab-pane for director -->
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

                <!-- a carousel for sliding here for Director filter-->
                   <div id="carousel-2" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            
                            <div class="card-deck" style="margin-top: 1%;">
                                  
                                  <?php foreach ($new_movies as $movie) { ?>

                                    <div class="card" >
                                        <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
                                        <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                                            <div class="card-overlay card-overlay--blur">
                                                <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                                <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                                            </div>
                                        </a>
                                    </div>

                                <?php } ?>

                            </div>

                          </div>

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

                          <div class="carousel-item">
                            
                            <div class="card-deck" style="margin-top: 1%;">
                                  <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">ENOLA HOLMES</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card" >
                                    <img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                </div>


                            </div>

                        </div>

                    </div>
                    <!--
                    <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                       <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                    <!-- <span class="sr-only">Previous</span> -->
                    </a>
                    <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="fa fa-chevron-circle-right" aria-hidden="true" ></span>
                    <span class="sr-only">Next</span>
                       </a>
                    -->
                 </div>

            </div>

<!------------- 2019---------->

            <!-- tab-pane for actor -->
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">

                <!-- a carousel for sliding here for Actor filter-->
                 <div id="carousel-3" class="carousel slide" >
                       <div class="carousel-inner">
                         <div class="carousel-item active" >
                            
                            <div class="card-deck" style="margin-top: 1%;">

                                  <?php foreach ($year_movies as $movie) { ?>

                                    <div class="card" >
                                        <img src="<?php echo($movie->get_image_path()); ?>" class="card-img-top mx-auto">
                                        <a href='<?php echo($movie->get_movie_page_path()); ?>'>
                                            <div class="card-overlay card-overlay--blur">
                                                <h6 class="card-title"><?php echo($movie->get_title()); ?></h6>
                                                <p class="card-text" ><?php echo($movie->get_release_date()); ?></p>
                                            </div>
                                        </a>
                                    </div>

                                <?php } ?>

                            </div>

                          </div>

                        <div class="carousel-item" >
                        
                            <div class="card-deck" style="margin-top: 1%;">
                                 <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">US</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                               </div>
                          </div>

                          <div class="carousel-item">
                        
                            <div class="card-deck" style="margin-top: 1%;">
                                  <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">ALADDIN</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                 </div>

                                 <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                 <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                                  <div class="card" >
                                    <img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
                                    <a href='https://www.google.com/'>
                                        <div class="card-overlay card-overlay--blur">
                                            <h6 class="card-title">MOVIE TITLE</h6>
                                            <p class="card-text" >Release date</p>
                                        </div>
                                    </a>
                                  </div>

                            </div>

                          </div>
                        <!--
                        <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                          <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                          <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        -->

                    </div>

                 </div>

            </div>

        </div>

    </div>

</div>

