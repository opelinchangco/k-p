<div id="profile-filter" class="row-full filter">
	<div class="large-8 large-centered columns">
		<div class="row">
			<div class="large-6 medium-6 columns right filter-category filter-options">
				<ul class="inline-list">
					<li>
						<a href="">
							<img src="img/group-gift.png">
							<p>Group Gift</p>
						</a>
					</li>
					<li>
						<a href="">
							<img src="img/purchased.png">
							<p>Purchased</p>
						</a>
					</li>		
					<li>
						<a href="">
							<img src="img/unpublished.png">
							<p>Unpublished</p>
						</a>
					</li>						
				</ul>

			</div>
			<div class="large-3 medium-3 small-6 columns filter-dropdown filter-options left">
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
	</div>
</div>

<div id="registry-grid" class="row-full grid">
	<div class="container-width">
		<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
			<li class="grid-single">
				<div class="grid-contain" style="background: url(img/product-1.png)">
					<div class="grid-hover">
						<a href="" class="grid-link-wrap" data-reveal-id="grid-single-1"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
							<div class="grid-link-text">
								<img src="img/edit-registry.png">

								<div class="grid-link-edit">
									<h5 class="small-sans">edit</h5>
									<h4 class="small-cursive">registry</h4>
								</div>

								<div class="grid-link-details">
									<div class="grid-value">
										<span class="item-name">Wood Angled Chair</span>
										<span class="item-value">P5000.00</span>
									</div>
									<div class="grid-colors">
										<span class="item-name">Color Option</span>
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
				</div>

				<div class="grid-mobcontent">
					<div class="grid-value">
						<span class="item-name">Wood Angled Chair</span>
						<span class="item-value">P5000.00</span>
					</div>
					<div class="item-add">
						<a href="" class="link-button" data-reveal-id="grid-single-1">+ Add to Card</a>
					</div>
				</div>

				<div id="grid-single-1" class="edit-registry reveal-modal item-modal" data-reveal aria-labelledby="grid-single-1" aria-hidden="true" role="dialog">
					<h4 class="medium-sans modal-title">Edit Item</h4>
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
					  			<div class="item-text">This is a life-changing chair. Like really life-changing.</div>
					  			<p class="item-value">P5000.00</p>
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
							<div class="item-note">
								<label>
									<input type="checkbox" name="item-color" id="color2">
									<span> Group Gift </span>
								</label>
								<textarea placeholder="Note to guests"></textarea>
							</div>
							<div class="item-add">
								<a href="" class="link-button save-reg">Save</a>
								<a href="" class="link-button delete-reg">Delete</a>
							</div>				  		
				  		</form>
											  		
				  	</div>	
				  			  	
				  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

			</li>
			<li class="grid-single">
				<div class="grid-contain" style="background: url(img/product-2.png)">
					<div class="grid-hover">
						<a href="" class="grid-link-wrap" data-reveal-id="grid-single-2"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
							<div class="grid-link-text">
								<img src="img/edit-registry.png">

								<div class="grid-link-edit">
									<h5 class="small-sans">edit</h5>
									<h4 class="small-cursive">registry</h4>
								</div>

								<div class="grid-link-details">
									<div class="grid-value">
										<span class="item-name">Wood Angled Chair</span>
										<span class="item-value">P5000.00</span>
									</div>
									<div class="grid-colors">
										<span class="item-name">Color Option</span>
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
				</div>

				<div class="grid-mobcontent">
					<div class="grid-value">
						<span class="item-name">Wood Angled Chair</span>
						<span class="item-value">P5000.00</span>
					</div>
					<div class="item-add">
						<a href="" class="link-button" data-reveal-id="grid-single-2">+ Add to Card</a>
					</div>
				</div>				

				<div id="grid-single-2" class="edit-registry reveal-modal item-modal" data-reveal aria-labelledby="grid-single-2" aria-hidden="true" role="dialog">
					<h4 class="medium-sans modal-title">Edit Item</h4>
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
					  			<div class="item-text">This is a life-changing chair. Like really life-changing.</div>
					  			<p class="item-value">P5000.00</p>
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
							<div class="item-note">
								<label>
									<input type="checkbox" name="item-color" id="color2">
									<span> Group Gift </span>
								</label>
								<textarea placeholder="Note to guests"></textarea>
							</div>
							<div class="item-add">
								<a href="" class="link-button save-reg">Save</a>
								<a href="" class="link-button delete-reg">Delete</a>
							</div>				  		
				  		</form>
											  		
				  	</div>	
				  			  	
				  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

			</li>
			<li class="grid-single">
				<div class="grid-contain"  style="background: url(img/product-3.png)">
					<div class="grid-hover">
						<a href="" class="grid-link-wrap" data-reveal-id="grid-single-3"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
							<div class="grid-link-text">
								<img src="img/edit-registry.png">

								<div class="grid-link-edit">
									<h5 class="small-sans">edit</h5>
									<h4 class="small-cursive">registry</h4>
								</div>

								<div class="grid-link-details">
									<div class="grid-value">
										<span class="item-name">Wood Angled Chair</span>
										<span class="item-value">P5000.00</span>
									</div>
									<div class="grid-colors">
										<span class="item-name">Color Option</span>
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
				</div>

				<div class="grid-mobcontent">
					<div class="grid-value">
						<span class="item-name">Wood Angled Chair</span>
						<span class="item-value">P5000.00</span>
					</div>
					<div class="item-add">
						<a href="" class="link-button" data-reveal-id="grid-single-3">+ Add to Card</a>
					</div>
				</div>				

				<div id="grid-single-2" class="edit-registry reveal-modal item-modal" data-reveal aria-labelledby="grid-single-3" aria-hidden="true" role="dialog">
					<h4 class="medium-sans modal-title">Edit Item</h4>
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
					  			<div class="item-text">This is a life-changing chair. Like really life-changing.</div>
					  			<p class="item-value">P5000.00</p>
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
							<div class="item-note">
								<label>
									<input type="checkbox" name="item-color" id="color2">
									<span> Group Gift </span>
								</label>
								<textarea placeholder="Note to guests"></textarea>
							</div>
							<div class="item-add">
								<a href="" class="link-button save-reg">Save</a>
								<a href="" class="link-button delete-reg">Delete</a>
							</div>				  		
				  		</form>
											  		
				  	</div>	
				  			  	
				  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

			</li>
			<li class="grid-single">
				<div class="grid-contain"  style="background: url(img/product-4.png)">
					<div class="grid-hover">
						<a href="" class="grid-link-wrap" data-reveal-id="grid-single-4"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
							<div class="grid-link-text">
								<img src="img/edit-registry.png">

								<div class="grid-link-edit">
									<h5 class="small-sans">edit</h5>
									<h4 class="small-cursive">registry</h4>
								</div>

								<div class="grid-link-details">
									<div class="grid-value">
										<span class="item-name">Wood Angled Chair</span>
										<span class="item-value">P5000.00</span>
									</div>
									<div class="grid-colors">
										<span class="item-name">Color Option</span>
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
				</div>

				<div class="grid-mobcontent">
					<div class="grid-value">
						<span class="item-name">Wood Angled Chair</span>
						<span class="item-value">P5000.00</span>
					</div>
					<div class="item-add">
						<a href="" class="link-button" data-reveal-id="grid-single-4">+ Add to Card</a>
					</div>
				</div>				

				<div id="grid-single-4" class="edit-registry reveal-modal item-modal" data-reveal aria-labelledby="grid-single-1" aria-hidden="true" role="dialog">
					<h4 class="medium-sans modal-title">Edit Item</h4>
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
					  			<div class="item-text">This is a life-changing chair. Like really life-changing.</div>
					  			<p class="item-value">P5000.00</p>
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
							<div class="item-note">
								<label>
									<input type="checkbox" name="item-color" id="color2">
									<span> Group Gift </span>
								</label>
								<textarea placeholder="Note to guests"></textarea>
							</div>
							<div class="item-add">
								<a href="" class="link-button save-reg">Save</a>
								<a href="" class="link-button delete-reg">Delete</a>
							</div>				  		
				  		</form>
											  		
				  	</div>	
				  			  	
				  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

			</li>
			<li class="grid-single">
				<div class="grid-contain"  style="background: url(img/product-5.png)">
					<div class="grid-hover">
						<a href="" class="grid-link-wrap" data-reveal-id="grid-single-5"> <!--data-reveal-id value and modal ID must be the same and increme. Incrementing values would do-->
							<div class="grid-link-text">
								<img src="img/edit-registry.png">

								<div class="grid-link-edit">
									<h5 class="small-sans">edit</h5>
									<h4 class="small-cursive">registry</h4>
								</div>

								<div class="grid-link-details">
									<div class="grid-value">
										<span class="item-name">Wood Angled Chair</span>
										<span class="item-value">P5000.00</span>
									</div>
									<div class="grid-colors">
										<span class="item-name">Color Option</span>
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
				</div>

				<div class="grid-mobcontent">
					<div class="grid-value">
						<span class="item-name">Wood Angled Chair</span>
						<span class="item-value" data-reveal-id="grid-single-5">P5000.00</span>
					</div>
					<div class="item-add">
						<a href="" class="link-button">+ Add to Card</a>
					</div>
				</div>

				<div id="grid-single-5" class="edit-registry reveal-modal item-modal" data-reveal aria-labelledby="grid-single-5" aria-hidden="true" role="dialog">
					<h4 class="medium-sans modal-title">Edit Item</h4>
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
					  			<div class="item-text">This is a life-changing chair. Like really life-changing.</div>
					  			<p class="item-value">P5000.00</p>
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
							<div class="item-note">
								<label>
									<input type="checkbox" name="item-color" id="color2">
									<span> Group Gift </span>
								</label>
								<textarea placeholder="Note to guests"></textarea>
							</div>
							<div class="item-add">
								<a href="" class="link-button save-reg">Save</a>
								<a href="" class="link-button delete-reg">Delete</a>
							</div>				  		
				  		</form>
											  		
				  	</div>	
				  			  	
				  	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>

			</li>															

		</ul>
	</div>
</div>

<div id="registry-buttons" class="row-full grid">
	<div class="large-4 large-centered columns">
		<a href="" class="link-button pub-all" data-reveal-id="modal-publish">Publish All</a>
		<a href="" class="link-button use-regbut" data-reveal-id="modal-regbut">Use the Registry Butler</a>
	</div>

	<div id="modal-publish" class="reveal-modal item-modal" data-reveal aria-labelledby="modal-publish" aria-hidden="true" role="dialog">
		modal publish
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="modal-regbut" class="reveal-modal item-modal" data-reveal aria-labelledby="modal-publish" aria-hidden="true" role="dialog">
		<h4 class="medium-sans">Put Intro Here</h4>
		<p>Registry Butler information goes in this section. Lorem ipsum. More dummy text. Additional content. Registry Butler information goes in this section. Lorem ipsum. More dummy text. Additional content.
		
		<div class="modal-btn">
			<a href="registry-butler.php" class="link-button use-regbut">Use the Registry Butler</a>
			<a href="" class="link-button no-thanks">No, thanks.</a>
		</div>
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>	
</div>


