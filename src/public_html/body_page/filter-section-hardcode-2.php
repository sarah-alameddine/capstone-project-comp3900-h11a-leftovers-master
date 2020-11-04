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
	                <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">What's Popular</a>
	            </li>
	            <li class="nav-item" role="presentation">
	                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Movie</a>
	            </li>
	            <li class="nav-item" role="presentation">
	                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">New Releases</a>
	            </li>
	            <li class="nav-item" role="presentation">
	                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">2019</a>
	            </li>
            </ul>	

    </div>

    
    <div class="row justify-content-center">

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
	                      		
	                      		<div class="card">
	                        		<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>		

	                      		<div class="card" >
	                        		<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

                      			<div class="card" >
                        			<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                        			<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
                      			</div>

                      			<div class="card" >
                        			<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                        			<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
                      			</div>

	                      		<div class="card" >
                        			<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                        			<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
                      			</div>

                      			<div class="card" >
                        			<img src="/assets/images/joker.jpg" class="card-img-top mx-auto" alt="...">
                        			<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
                      			</div>

                    		</div>

                  		</div>

                  		<div class="carousel-item">

	                    	<div class="card-deck" style="margin-top: 1%;">
		                    	
		                    	<div class="card" >
		                        	<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                    	</div>

	                        	<div class="card" >
	                        		<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

                      			<div class="card" >
	                        		<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
	                        		<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
	                        		<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
	                        		<img src="/assets/images/dora.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

                    		</div>

                  		</div>

                 		<div class="carousel-item">

                    		<div class="card-deck" style="margin-top: 1%;">
	                        
	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

	                        	<div class="card" >
		                        	<img src="/assets/images/black-panther.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                        	</div>

                    		</div>

                  		</div>

                	</div>

	                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
	                <span class="fa fa-chevron-circle-left" aria-hidden="true" ></span>
	              	<span class="sr-only">Previous</span>
	               	</a>
	               	<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
	               	<span class="fa fa-chevron-circle-right" aria-hidden="true" ></span>
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
	                      		
	                      		<div class="card" >
	                        		<img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">James Cameron</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

		                        <div class="card" >
			                        <img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
			                        <div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
			                        <img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
			                        <div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
			                        <img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
									<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/tenet.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                    </div>  

	                  	</div>

	                  	<div class="carousel-item">
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" >
	                        		<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">Joe Russo</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                     		</div>

		                      	<div class="card" >
		                        	<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/secret-garden.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

		                    </div> 

		                </div>

	                  	<div class="carousel-item">
	                    	
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" >
	                        		<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">ENOLA HOLMES</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

		                      	<div class="card" >
		                        	<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/enola.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>


	                    	</div> 

	                    </div>

	                </div>

	                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
	               	<span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	                </a>
	                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
	                <span class="fa fa-chevron-circle-right" aria-hidden="true" ></span>
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
	                      		<div class="card" >
	                        		<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">PARASITE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                     		</div>

		                        <div class="card" >
		                        	<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                        </div>

		                        <div class="card" >
		                        	<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

		                     	<div class="card" >
		                        	<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

		                      	<div class="card" >
		                        	<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
									<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

		                        <div class="card" >
		                        	<img src="/assets/images/parasite.jpg" class="card-img-top mx-auto" alt="...">
									<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

	                    	</div>   

	                  	</div>

	                	<div class="carousel-item" >
	                    
	                    	<div class="card-deck" style="margin-top: 1%;">
	                     		<div class="card" >
	                        		<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">US</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

		                     	 <div class="card" >
		                        	<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                     	 </div>

		                      	<div class="card" >
		                        	<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

		                      	<div class="card" >
		                        	<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
		                        	<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
		                      	</div>

	                      		<div class="card" >
	                        		<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
									<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                      		<div class="card" >
	                        		<img src="/assets/images/us.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                   		</div>  

	                  	</div>

	                  	<div class="carousel-item">
	                    
	                    	<div class="card-deck" style="margin-top: 1%;">
	                      		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">ALADDIN</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                     		</div>

	                     		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                     		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                      		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                      		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                      		<div class="card" >
	                        		<img src="/assets/images/aladdin.jpg" class="card-img-top mx-auto" alt="...">
	                        		<div class="card-overlay card-overlay--blur">
										<a href='#'><h6 class="card-title">MOVIE TITLE</h6></a>
										<p class="card-text" >Release date</p>
									</div>
	                      		</div>

	                    	</div>  

	                  	</div>

	                	<a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
	                  	<span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
	                  	<span class="sr-only">Previous</span>
	                	</a>
	                	<a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
	                  	<span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
	                  	<span class="sr-only">Next</span>
	                	</a>


	        		</div>

	         	</div>

	    	</div> 

	    </div>	

    </div>

</div>

