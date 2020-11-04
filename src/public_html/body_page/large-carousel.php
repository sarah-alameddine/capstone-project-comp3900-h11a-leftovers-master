

<style>
	label{
    	font-weight:bold; color: black; font-family:georgia,garamond,serif;font-size:16px;font-style:italic;
      }

      .carousel-item img{
        height: 300px;
      }

      .carousel-caption{
        left: 0; bottom:10%; width: 100%; 
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
        left: 50px;
        right: 50px;
        top:40%;
        font-weight: bold;
        color: white;
        font-size: 12px;
        text-align: left;
      {    
</style>   


<!-- carousel section -->
<div class="container" style="height: 350px; position: relative">

    <!-- content of carousel -->
    <div class="row">

    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="position: absolute; width: 100%;">
            <div>
                <div class="col"><span style="font-weight: bold; font-size: 25px;">New & Upcomming</span></div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                
                <div class="carousel-item active">
                  	<div class="carousel-caption">
                    	<span class="carousel-head">X-MEN: Apocalypse</span>
                    	<a href="LINK TO THE MOVIE DETAIL PAGE"><span class="carousel-content"><p>During the prologue scene in ancient Egypt, a group of Apocalypse's royal guards betray him and attempt to destroy him by sabotaging the ritual in which the mutant overlord transfers his essence into a new body...</p></span></a>
                  	</div>
                  	<img src="assets/images/x-men.jpg" class="d-block w-100" alt="image1">
                </div>

                <div class="carousel-item">
                  	<div class="carousel-caption">
                    	<span class="carousel-head">Movie Title</span>
                    	<a href="LINK TO THE MOVIE DETAIL PAGE"><span class="carousel-content">Movie Summary...and more</span></a>
                  	</div>
                  	<img src="assets/images/dunkirk.jpeg" class="d-block w-100" alt="image2">
                </div>

                <div class="carousel-item">
                  	<div class="carousel-caption">
                    	<span class="carousel-head">Movie Title</span>
                    	<a href="LINK TO THE MOVIE DETAIL PAGE"><span class="carousel-content">Movie Summary...and more</span></a>
                  	</div>
                  	<img src="assets/images/secret-garden.jpg" class="d-block w-100" alt="image3">
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

</div>





