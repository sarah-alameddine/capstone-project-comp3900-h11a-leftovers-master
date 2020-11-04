
<!-- css for the cards -->
<style>

    .card img{
    	height: 200px;
    }
</style>




<!-- filter section -->
<div class="container" style="position: relative;">
	
	<div class="row">

    	<!-- Nav tabs -->
       	<ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%;">
       		
       		<li class="nav-item" role="presentation">
            	<a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">What's Popular</a>
            </li>
            <li class="nav-item" role="presentation">
    	        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Movie</a>
            </li>
            <li class="nav-item" role="presentation">
      	    	<a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Director</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Actor</a>
            </li>

        </ul>

    </div>

    <div class="row">

    	<!-- Tab panes for each filter-->
        <div class="tab-content" style="width: 100%;">

        	<!-- tab-pane for Movie -->
            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            	<!-- a carousel for sliding here for Movie filter-->
              	<div id="carousel-1" class="carousel" data-interval="false">
                	
                	<div class="carousel-inner">

	                  	<!-- each carousel-item will hold a deck of cards -->
	                  	<!-- the first carousel-item must be active -->
	                  	<div class="carousel-item active">	
	  
	                    	<!-- a deck of cards here, each card is a movie  CAN FIT 7 MOVIES INTO 	1 slide (one carousel-item)-->
	                    	<div class="card-deck" style="margin-top: 1%;">
			                    <!-- the card, where the movie/director/actor will be put in -->
			                    <!-- for each result in movie, put movie into the card; top when reach 7 moivies -->
			                    counter 1 =0
			                    counter 2 =0
			                    search-resul[]
			                    while(counter 1 < 7) ---> to populate 7 cards into 1 card-deck
		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="images/joker.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='LINK-TO-MOVIE'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
		                      	</div><!-- this one for the card -->
	            
	                    	</div><!-- this one for card-deck -->

	                  	</div><!-- this one for carousel-item -->

		                counter2=counter1=7
		                while(counter2<21){	----> to create a carousel-item and put a card-deck inside everytime a card-deck is full
		                <div class="carousel-item">
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      	while(counter1 < counter2+7){  -->populate cards into card-deck
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                          		<img src="images/joker.jpg" class="card-img-top" alt="...">
	                         		 <div class="card-body" style="padding: 0;">
	                            		<a href='LINK-TO-MOVIE'><h6 class="card-title">MOVIE TITLE</h6></a>
	                            		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                            
	                         		</div>
	                        	</div>
	                      		}  <!-- end of second while loop -->
	                       		counter2=counter1   
	                    	</div><!-- card deck -->
	                  	</div><!-- carousel-item -->
	                  	}<!-- end of first while loop -->

                	</div><!-- this one for carousel-inner -->

	                <!-- button for carousel-1 -->
	                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
	                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
	                  <span class="sr-only">Previous</span>
	                </a>
	                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
	                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
	                  <span class="sr-only">Next</span>
	                </a>

             	</div><!-- this one is carousel -->
            
            </div><!-- this one is tab-pane -->

            <!-- tab-pane for director -->
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

            	<!-- a carousel for sliding here for Director filter-->
              	<div id="carousel-2" class="carousel" data-interval="false">
                	<div class="carousel-inner">

                  		<!-- each carousel-item will hold a deck of cards -->
                 		<div class="carousel-item active">
  
                    		<!-- a deck of cards here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide (one carousel-item)-->
                    		<div class="card-deck" style="margin-top: 1%;">
		                    	<!-- the card, where the movie/director/actor will be put in -->
		                      	<!-- for each result in movie, put movie into the card; top when reach 7 moivies -->
			                    counter 1 =0
			                    counter 2 =0
			                    search-resul[]
			                    while(counter 1 < 7)
                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="DIRECTOR-NAME" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='LINK-TO-DIRECTOR-PAGE'><h6 class="card-title">DIRECTOR NAME</h6></a>
                          
                        			</div>
                      			</div><!-- this one for the card -->
            
                    		</div><!-- this one for card-deck -->

                  		</div><!-- this one for carousel-item -->

                  		counter2=counter1=7 (counter1 is now 7)
                  		while(counter2<21){
                  		<div class="carousel-item">
                    		<div class="card-deck" style="margin-top: 1%;">
                      		while(counter1 < counter2+7){
                      			<div class="card" style="width:10rem; height: 16rem;">
                          			<img src="DIRECTOR-IMAGE" class="card-img-top" alt="...">
                          			<div class="card-body" style="padding: 0;">
                            			<a href='LINK-TO-DIRECTOR-PAGE'><h6 class="card-title">DIRECTOR NAME</h6></a>

                          			</div>
                        		</div>
                      		}  <!-- end of second while loop -->
                       		counter2=counter1   
                    		</div><!-- card deck -->
                  		</div><!-- carousel-item -->
                  		}<!-- end of first while loop -->

                	</div><!-- this one for carousel-inner -->

                	<a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                	<a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>
              	</div>

            </div>

            <!-- tab-pane for actor -->
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">

              	<!-- a carousel for sliding here for Actor filter-->
              	<div id="carousel-3" class="carousel" >
                
                	<div class="carousel-inner">

                  		<!-- each carousel-item will hold a deck of cards -->
                  		<div class="carousel-item active">
  
		                    <!-- a deck of cards here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide (one carousel-item)-->
		                    <div class="card-deck" style="margin-top: 1%;">
		                    <!-- the card, where the movie/director/actor will be put in -->
		                    <!-- for each result in movie, put movie into the card; top when reach 7 moivies -->
		                    counter 1 =0
		                    counter 2 =0
		                    search-resul[]
		                    while(counter 1 < 7)
                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="ACTOR-IMAGE" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='LINK-TO-ACTOR-PAGE'><h6 class="card-title">ACTOR NAME</h6></a>
                          
                        			</div>
                      			</div><!-- this one for the card -->
            
                    		</div><!-- this one for card-deck -->

                  		</div><!-- this one for carousel-item -->
                  		counter2=counter1=7
                  		while(counter2<21){
                  		<div class="carousel-item">
                    		<div class="card-deck" style="margin-top: 1%;">
                      		while(counter1 < counter2+7){
                      			<div class="card" style="width:10rem; height: 16rem;">
                          			<img src="ACTOR-IMAGE" class="card-img-top" alt="...">
                          			<div class="card-body" style="padding: 0;">
                            			<a href='LINK-TO-ACTOR-PAGE'><h6 class="card-title">ACTOR NAME</h6></a>
                            
                          			</div>
                        		</div>
                      		}  <!-- end of second while loop -->
                       		counter2=counter1   
                    		</div><!-- card deck -->
                  		</div><!-- carousel-item -->
                  		}<!-- end of first while loop -->

                	</div><!-- this one for carousel-inner -->

                	<a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                	<a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                  <span class="sr-only">Next</span>
                </a>

              	</div>

            </div>

        </div>

    </div> 

</div>

