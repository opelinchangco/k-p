<?php
	$bodyid="category";
	include("includes/header.php");
	include("includes/menu-couple.php");
?>

	<div id="category-banner" class="row-full banner" style="background: url(img/bg-home-sec-slider.png)">
		<div class="large-12 large-centered columns banner-container">
		    <div class="slider-content large-8 large-centered columns">
		      	<h3 class="medium-cursive slider-text">kitchen</h3>
		      	<h4 class="medium-sans slider-text">Items</h4>
		    </div>		
		</div>
	</div>


	<div id="category-container" class="row-full">
		<h4 class="medium-sans text-center">Categories</h4>

		<div class="large-8 large-centered medium-8 medium-centered columns">
			<div class="row-full">
				<div id="cat-sb" class="large-3 columns filter">
					<div class="filter-dropdown filter-options">
						<p>Sort by</p>

						<a href="" class="dropdown-btn" data-dropdown="filter-dropdown-options" aria-expanded="false">
							<span>Select Order</span> <i class="fi-play"></i>
						</a>
						<ul id="filter-dropdown-options" aria-controls="link-lifestyle" aria-autoclose="true" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
							<li><a href="#">Highest Price</a></li>
							<li><a href="#">Lowest Price</a></li>
							<li><a href="#">Group Buying</a></li>
						</ul>				
					</div>					
				</div>

				<div id="registry-grid" class="large-9 columns grid">
					<ul class="small-block-grid-3">
						<li class="grid-single" style="background: url(img/product-1.png)">
							<div class="grid-hover">
								<a href="" class="grid-link-wrap" data-reveal-id="grid-single-1"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
									<div class="grid-link-text">
										<img src="img/edit-registry.png">

										<div class="grid-link-edit">
											<h5 class="small-sans">add to</h5>
											<h4 class="small-cursive">registry</h4>
										</div>

										<div class="grid-link-details">
											<div class="grid-value">
												<span class="item-name">Wood Angled Chair</span>
												<span class="item-value">P5000.00</span>
											</div>
											<div class="grid-colors">
												
												<ul class="inline-list color-selection">
													<li style="background-color: yellow;"></li>
													<li style="background-color: green;"></li>
													<li style="background-color: blue;"></li>
												</ul>
											</div>
										</div>
									
									</div>
								</a>
							</div>
							<div id="grid-single-1" class="reveal-modal item-modal" data-reveal aria-labelledby="grid-single-2" aria-hidden="true" role="dialog">
							  	<div class="item-slider columns">
							  			<div class="slider-thumb">
											<a data-orbit-link="slide-1" class="small button" style="background: url(img/bg-home-sec-slider.png)"></a>
											<a data-orbit-link="slide-2" class="small button" style="background: url(img/home-grid-big-2.png)"></a>
											<a data-orbit-link="slide-3" class="small button" style="background: url(img/home-grid-big-1.png)"></a>
							  			</div>
										<ul class="modal-slider-content" data-orbit>
											<li class="modal-slider-single" data-orbit-slide="slide-1" style="background: url(img/bg-home-sec-slider.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-2" style="background: url(img/home-grid-big-2.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-3" style="background: url(img/home-grid-big-1.png)">
											</li>																	
										</ul>			  		
							  	</div>
							  	<div class="item-info columns">
							  		<div class="item-name">
							  			<h4 class="small-cursive">awesome</h4>
							  			<h5 class="medium-sans">wooden chair</h5>
							  		</div>
							  		<form method="post" action="">
								  		<div class="item-desc">
								  			This is a life-changing chair. Like really life-changing.
								  		</div>
								  		<div class="item-qty">
								  			<p class="item-value">P5000.00</p>
								  			<label> 
								  				<span>Quantity</span>
								  				<input type="number" name="order-qty" id="order-qty" value="1">
								  			</label>
								  		</div>
										<div class="grid-colors">
											<span class="modal-sec-name">Color Option</span>
											<div class="color-selection">
												<label style="background-color: orange">
													<input type="radio" name="item-color" id="color1">
												</label>
												<label style="background-color: yellow">
													<input type="radio" name="item-color" id="color2">
												</label>
											</div>
										</div>	
										<div class="item-details">
											<h6>Details</h6>
											<p>More item details will go here</p>
										</div>
										<div class="item-dimensions">
											<h6>Dimensions</h6>
											<p>More item dimensions will go here</p>
										</div>	
										<div class="item-add">
											<input type="submit" value="Add to Registry">
										</div>				  		
							  		</form>
									<div class="item-msg">
								  		<div class="item-msg-img" style="background:url(img/fr-couple-1.png);"></div>
								  		<div class="item-msg-text"  data-equalizer>
								  			<div class="bubble-arrow">
								  				<span></span>
								  			</div>
								  			<div class="msg-content">
								  				<p>"Message from the couple can be seen here"</p>
								  			</div>

								  		</div>
								  	</div>					  		
							  	</div>	
							  			  	
							  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
							</div>

						</li>
						<li class="grid-single" style="background: url(img/product-1.png)">
							<div class="grid-hover">
								<a href="" class="grid-link-wrap" data-reveal-id="grid-single-2"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
									<div class="grid-link-text">
										<img src="img/edit-registry.png">

										<div class="grid-link-edit">
											<h5 class="small-sans">add to</h5>
											<h4 class="small-cursive">registry</h4>
										</div>

										<div class="grid-link-details">
											<div class="grid-value">
												<span class="item-name">Wood Angled Chair</span>
												<span class="item-value">P5000.00</span>
											</div>
											<div class="grid-colors">
												
												<ul class="inline-list color-selection">
													<li style="background-color: yellow;"></li>
													<li style="background-color: green;"></li>
													<li style="background-color: blue;"></li>
												</ul>
											</div>
										</div>
									
									</div>
								</a>
							</div>
							<div id="grid-single-2" class="reveal-modal item-modal group-item" data-reveal aria-labelledby="grid-single-2" aria-hidden="true" role="dialog">
							  	<div class="item-slider columns">
							  			<div class="slider-thumb">
											<a data-orbit-link="slide-1" class="small button" style="background: url(img/bg-home-sec-slider.png)"></a>
											<a data-orbit-link="slide-2" class="small button" style="background: url(img/home-grid-big-2.png)"></a>
											<a data-orbit-link="slide-3" class="small button" style="background: url(img/home-grid-big-1.png)"></a>
							  			</div>
										<ul class="modal-slider-content" data-orbit>
											<li class="modal-slider-single" data-orbit-slide="slide-1" style="background: url(img/bg-home-sec-slider.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-2" style="background: url(img/home-grid-big-2.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-3" style="background: url(img/home-grid-big-1.png)">
											</li>																	
										</ul>			  		
							  	</div>
							  	<div class="item-info columns">
							  		<div class="item-name">
							  			<h4 class="small-cursive">awesome</h4>
							  			<h5 class="medium-sans">wooden chair</h5>
							  		</div>
							  		<form method="post" action="">
								  		<div class="item-desc">
								  			This is a life-changing chair. Like really life-changing.
								  		</div>
								  		<div class="item-qty">
								  			<p class="item-value">P5000.00</p>
								  		</div>
										<div class="group-slider">
											<div class="range-slider round" data-slider data-options="display_selector: #sliderOutput3">
												<span class="range-slider-handle" role="slider" tabindex="0"></span>
												<span class="range-slider-active-segment"></span>
												<input type="hidden">
												<div class="remaining">Still needs <span>8,000</span></div>
											</div>
											<div class="group-percent">
												<span id="sliderOutput3" aria-label="%"></span>%
											</div>
										</div>	
										<div class="item-contribute">
											<div class="contri-container">
												<input type="number" name="group-item-add" id="group-item" class="contri-item" value="1">
												<input type="submit" class="contri-item" value="Contribute">
											</div>
											<div class="contri-min">
												Minimum:<span>5000</span>
											</div>
										</div>				  		
							  		</form>
									<div class="item-msg">
								  		<div class="item-msg-img" style="background:url(img/fr-couple-1.png);"></div>
								  		<div class="item-msg-text"  data-equalizer>
								  			<div class="bubble-arrow">
								  				<span></span>
								  			</div>
								  			<div class="msg-content">
								  				<p>"Message from the couple can be seen here"</p>
								  			</div>

								  		</div>
								  	</div>					  		
							  	</div>	
							  			  	
							  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
							</div>

						</li>
						<li class="grid-single" style="background: url(img/product-1.png)">
							<div class="grid-hover">
								<a href="" class="grid-link-wrap" data-reveal-id="grid-single-3"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
									<div class="grid-link-text">
										<img src="img/edit-registry.png">

										<div class="grid-link-edit">
											<h5 class="small-sans">add to</h5>
											<h4 class="small-cursive">registry</h4>
										</div>

										<div class="grid-link-details">
											<div class="grid-value">
												<span class="item-name">Wood Angled Chair</span>
												<span class="item-value">P5000.00</span>
											</div>
											<div class="grid-colors">
												
												<ul class="inline-list color-selection">
													<li style="background-color: yellow;"></li>
													<li style="background-color: green;"></li>
													<li style="background-color: blue;"></li>
												</ul>
											</div>
										</div>
									
									</div>
								</a>
							</div>
							<div id="grid-single-3" class="reveal-modal item-modal buy-item" data-reveal aria-labelledby="grid-single-2" aria-hidden="true" role="dialog">
							  	<div class="item-slider columns">
							  			<div class="slider-thumb">
											<a data-orbit-link="slide-1" class="small button" style="background: url(img/bg-home-sec-slider.png)"></a>
											<a data-orbit-link="slide-2" class="small button" style="background: url(img/home-grid-big-2.png)"></a>
											<a data-orbit-link="slide-3" class="small button" style="background: url(img/home-grid-big-1.png)"></a>
							  			</div>
										<ul class="modal-slider-content" data-orbit>
											<li class="modal-slider-single" data-orbit-slide="slide-1" style="background: url(img/bg-home-sec-slider.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-2" style="background: url(img/home-grid-big-2.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-3" style="background: url(img/home-grid-big-1.png)">
											</li>																	
										</ul>			  		
							  	</div>
							  	<div class="item-info columns">
							  		<div class="item-name">
							  			<h4 class="small-cursive">awesome</h4>
							  			<h5 class="medium-sans">wooden chair</h5>
							  		</div>
							  		<form method="post" action="">
								  		<div class="item-desc">
								  			This is a life-changing chair. Like really life-changing.
								  		</div>
								  		<div class="item-qty">
								  			<p class="item-value">P5000.00</p>
								  			<label> 
								  				<span>Quantity</span>
								  				<input type="number" name="order-qty" id="order-qty" value="1">
								  			</label>
								  		</div>
										<div class="grid-colors">
											<span class="modal-sec-name">Color Option</span>
											<div class="color-selection">
												<label style="background-color: orange">
													<input type="radio" name="item-color" id="color1">
												</label>
												<label style="background-color: yellow">
													<input type="radio" name="item-color" id="color2">
												</label>
											</div>
										</div>	
										<div class="item-add">
											<input type="submit" value="Buy Item">
										</div>				  		
							  		</form>
									<div class="item-msg">
								  		<div class="item-msg-img" style="background:url(img/fr-couple-1.png);"></div>
								  		<div class="item-msg-text"  data-equalizer>
								  			<div class="bubble-arrow">
								  				<span></span>
								  			</div>
								  			<div class="msg-content">
								  				<p>"Message from the couple can be seen here"</p>
								  			</div>

								  		</div>
								  	</div>					  		
							  	</div>	
							  			  	
							  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
							</div>

						</li>
						<li class="grid-single" style="background: url(img/product-1.png)">
							<div class="grid-hover">
								<a href="" class="grid-link-wrap" data-reveal-id="grid-single-4"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
									<div class="grid-link-text">
										<img src="img/edit-registry.png">

										<div class="grid-link-edit">
											<h5 class="small-sans">add to</h5>
											<h4 class="small-cursive">registry</h4>
										</div>

										<div class="grid-link-details">
											<div class="grid-value">
												<span class="item-name">Wood Angled Chair</span>
												<span class="item-value">P5000.00</span>
											</div>
											<div class="grid-colors">
												
												<ul class="inline-list color-selection">
													<li style="background-color: yellow;"></li>
													<li style="background-color: green;"></li>
													<li style="background-color: blue;"></li>
												</ul>
											</div>
										</div>
									
									</div>
								</a>
							</div>
							<div id="grid-single-4" class="reveal-modal item-modal" data-reveal aria-labelledby="grid-single-2" aria-hidden="true" role="dialog">
							  	<div class="item-slider columns">
							  			<div class="slider-thumb">
											<a data-orbit-link="slide-1" class="small button" style="background: url(img/bg-home-sec-slider.png)"></a>
											<a data-orbit-link="slide-2" class="small button" style="background: url(img/home-grid-big-2.png)"></a>
											<a data-orbit-link="slide-3" class="small button" style="background: url(img/home-grid-big-1.png)"></a>
							  			</div>
										<ul class="modal-slider-content" data-orbit>
											<li class="modal-slider-single" data-orbit-slide="slide-1" style="background: url(img/bg-home-sec-slider.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-2" style="background: url(img/home-grid-big-2.png)">
											</li>
											<li class="modal-slider-single" data-orbit-slide="slide-3" style="background: url(img/home-grid-big-1.png)">
											</li>																	
										</ul>			  		
							  	</div>
							  	<div class="item-info columns">
							  		<div class="item-name">
							  			<h4 class="small-cursive">awesome</h4>
							  			<h5 class="medium-sans">wooden chair</h5>
							  		</div>
							  		<form method="post" action="">
								  		<div class="item-desc">
								  			This is a life-changing chair. Like really life-changing.
								  		</div>
								  		<div class="item-qty">
								  			<p class="item-value">P5000.00</p>
								  			<label> 
								  				<span>Quantity</span>
								  				<input type="number" name="order-qty" id="order-qty" value="1">
								  			</label>
								  		</div>
										<div class="grid-colors">
											<span class="modal-sec-name">Color Option</span>
											<div class="color-selection">
												<label style="background-color: orange">
													<input type="radio" name="item-color" id="color1">
												</label>
												<label style="background-color: yellow">
													<input type="radio" name="item-color" id="color2">
												</label>
											</div>
										</div>	
										<div class="item-details">
											<h6>Details</h6>
											<p>More item details will go here</p>
										</div>
										<div class="item-dimensions">
											<h6>Dimensions</h6>
											<p>More item dimensions will go here</p>
										</div>	
										<div class="item-add">
											<input type="submit" value="Add to Registry">
										</div>				  		
							  		</form>
									<div class="item-msg">
								  		<div class="item-msg-img" style="background:url(img/fr-couple-1.png);"></div>
								  		<div class="item-msg-text"  data-equalizer>
								  			<div class="bubble-arrow">
								  				<span></span>
								  			</div>
								  			<div class="msg-content">
								  				<p>"Message from the couple can be seen here"</p>
								  			</div>

								  		</div>
								  	</div>					  		
							  	</div>	
							  			  	
							  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
							</div>

						</li>
												
					</ul>
					<div id="home-grid-link" class="home-grid-row row">
						<a href="#" class="link-button">GO TO SHOP</a>
					</div>						
				</div>				
			</div>
		</div>
	</div>
	


<?php include 'includes/footer.php';?>