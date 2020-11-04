
<!-- css for the cards -->
<style>

    .card img{
		height: 200px;
	}
	
	.nav-link {
		color: #65ccb8;
	}

	.nav-link:hover {
		color: #3b945e;
	}

	.nav-link:active {
		color: #3b945e;
	}

	#home-tab {
		color: white;
	}
</style>


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
                  		<div class="carousel-item active">
  
                    		<!-- a deck of card here, each card is a movie  CAN FIT 7 MOVIES INTO 1 slide-->
                    		<div class="card-deck" style="margin-top: 1%;">
	                      		
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
	                        		<div class="card-overlay">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" style="padding: 0; margin: 0;">Release date</p>
									</div>
	                      		</div>		

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                      		</div>

                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          				<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        			</div>
                      			</div>

                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          				<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        			</div>
                      			</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          				<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        			</div>
                      			</div>

                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          				<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        			</div>
                      			</div>

                      			<div class="card" style="width:10rem; height: 16rem;">
                        			<img src="/assets/images/joker.jpg" class="card-img-top" alt="...">
                        			<div class="card-body" style="padding: 0;">
                          				<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
                          				<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
                          
                        			</div>
                      			</div>

                    		</div>

                  		</div>

                  		<div class="carousel-item">

	                    	<div class="card-deck" style="margin-top: 1%;">
		                    	
		                    	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
		                    	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

                      			<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/dora.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
	                          			<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
	                          
	                        		</div>
	                        	</div>

                    		</div>

                  		</div>

                 		<div class="carousel-item">

                    		<div class="card-deck" style="margin-top: 1%;">
	                        
	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                       		</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

	                        	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
		                          		<p class="card-text" style="padding: 0; margin: 0;">Released date</p>
		                          
		                        	</div>
	                        	</div>

                    		</div>

                  		</div>

                	</div>

	                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
	              	<span class="sr-only">Previous</span>
	               	</a>
	               	<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
	               	<span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
	               	<span class="sr-only">Next</span>
	               	</a>
           		</div>
        
        	</div>

        	<!-- tab-pane for director -->
	        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

	            <!-- a carousel for sliding here for Director filter-->
	           	<div id="carousel-2" class="carousel" data-interval="false">
	                <div class="carousel-inner">
	                  	<div class="carousel-item active">
	                    	
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">James Cameron</h6></a>
	                          
	                        		</div>
	                      		</div>

		                        <div class="card" style="width:10rem; height: 16rem;">
			                        <img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
			                        <div class="card-body" style="padding: 0;">
			                       		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
			                          
			                      	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
			                        <img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
			                        <div class="card-body" style="padding: 0;">
			                          	<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
			                          
			                        </div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
			                        <img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
			                        <div class="card-body" style="padding: 0;">
			                          	<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
			                          
			                        </div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/James-Cameron.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                    </div>  

	                  	</div>

	                  	<div class="carousel-item">
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">Joe Russo</h6></a>
	                          
	                        		</div>
	                     		</div>

		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          	<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                       		</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                        		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Joe-Russo.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                    </div> 

		                </div>

	                  	<div class="carousel-item">
	                    	
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">Steven Spielberg</h6></a>
	                          
	                        		</div>
	                      		</div>

		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Steven-Spielberg.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">DIRECTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

	                    	</div> 

	                    </div>

	                </div>

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
	                 	<div class="carousel-item active" >
	                    	
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                         			 <a href='#'><h6 class="card-title">Leonardo DiCaprio</h6></a>
	                          
	                        		</div>
	                     		</div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                        </div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                        		<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        		</div>
		                      	</div>

		                     	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                       		 <div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                        <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                         	<div class="card-body" style="padding: 0;">
		                         		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                       	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Leonardo-DiCaprio.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

	                    	</div>   

	                  	</div>

	                	<div class="carousel-item" >
	                    
	                    	<div class="card-deck" style="margin-top: 1%;">
	                     		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">Scarlett-Johansson</h6></a>
	                          
	                        		</div>
	                      		</div>

		                     	 <div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                     	 </div>

		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

		                      	<div class="card" style="width:10rem; height: 16rem;">
		                        	<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
		                        	<div class="card-body" style="padding: 0;">
		                          		<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
		                          
		                        	</div>
		                      	</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
	                       			<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Scarlett-Johansson.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                       			</div>
	                      		</div>

	                   		</div>  

	                  	</div>

	                  	<div class="carousel-item">
	                    
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">Kate Winslet</h6></a>
	                          
	                        		</div>
	                     		</div>

	                     		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                     		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                      		<div class="card" style="width:10rem; height: 16rem;">
	                        		<img src="/assets/images/Kate-Winslet.jpg" class="card-img-top" alt="...">
	                        		<div class="card-body" style="padding: 0;">
	                          			<a href='#'><h6 class="card-title">ACTOR NAME</h6></a>
	                          
	                        		</div>
	                      		</div>

	                    	</div>  

	                  	</div>

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

</div>

