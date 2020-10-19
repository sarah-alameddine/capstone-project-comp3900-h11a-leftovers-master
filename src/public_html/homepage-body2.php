
<style>
      label{
        font-weight:bold; color: black; font-family:georgia,garamond,serif;font-size:16px;font-style:italic;
      }

      .carousel-item img{
        height: 300px;
      }

      .carousel-caption{
        left: 0; bottom:10%; right: 0;
        height: 20%;
        background-color: black;
        opacity: 0.5;
        cursor: pointer;
        z-index: 5;
      }

      .carousel-head{
        position: absolute;
        left: 5%;
        top:0;
        font-weight: bold;
        color: white;
        font-size: 20px;
      }

      .carousel-content{
        position: absolute;
        left: 10%;
        top:40%;
        font-weight: bold;
        color: white;
        font-size: 15px;
      }

    </style>


    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div id="carouselExampleIndicators" class="carousel slide" data-pause="carousel" style="position: absolute; left: 0; right:0;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <span class="carousel-head">Movie Title</span>
                  <a href="LINK TO THE MOVIE DETAIL PAGE">
                    <span class="carousel-content">Movie Summary...and more</span>
                  </a>
                </div>
                <img src="/assets/images/dora.jpg" class="d-block w-100" alt="image1">
              </div>

              <div class="carousel-item">
                <div class="carousel-caption">
                  <span class="carousel-head">Movie Title</span>
                  <a href="LINK TO THE MOVIE DETAIL PAGE">
                    <span class="carousel-content">Movie Summary...and more</span>
                  </a>
                </div>
                <img src="/assets/images/movie1poster.jpg" class="d-block w-100" alt="image2">
              </div>

              <div class="carousel-item">
                <div class="carousel-caption">
                  <span class="carousel-head">Movie Title</span>
                  <a href="LINK TO THE MOVIE DETAIL PAGE">
                    <span class="carousel-content">Movie Summary...and more</span>
                  </a>
                </div>
                <img src="/assets/images/joker.jpg" class="d-block w-100" alt="image3">
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


         
        </div>
        <div class="col-md-3" style="background-color: #db4c4c;"><img src="/assets/images/black-panther.jpg" class="d-block w-100" alt="image3" style="height:300px;">
        </div>
        <div class="col-md-3" style="background-color: #db6f4c;"><img src="/assets/images/joker.jpg" class="d-block w-100" alt="image3" style="height:300px;">
        </div>
      </div>
    </div>

   
    </div>
    <!-- Carousel for Movie recommendations on Home Page-->
<!--
    <div class="top-content" style="margin-bottom:50px;">
        <div class="container-fluid">
        <h1>YOUR RECOMMENDATIONS</h1>
            <div id="homepage-body" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-60 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="/assets/images/black-panther.jpg" class="img-fluid mx-auto d-block" alt="img1">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Black Panther</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/joker.jpg" class="img-fluid mx-auto d-block" alt="img2">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Joker</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/movie1poster.jpg" class="img-fluid mx-auto d-block" alt="img3">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Movie 1</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/black-panther.jpg" class="img-fluid mx-auto d-block" alt="img4">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Dora</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/black-panther.jpg" class="img-fluid mx-auto d-block" alt="img5">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Black Panther</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/joker.jpg" class="img-fluid mx-auto d-block" alt="img6">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Joker</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/movie1poster.jpg" class="img-fluid mx-auto d-block" alt="img7">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Movie 1</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="/assets/images/dora.jpg" class="img-fluid mx-auto d-block" alt="img8">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Dora</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
-->
