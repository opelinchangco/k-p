<?php
	$bodyid="home";
	include("includes/header.php");
	include("includes/menu-home.php");
?>

	<!-- HOME HEAD -->
	<div id="home-head" class="row-full home-sec">

		<div id="home-head-container">

			<img id="home-head-main-img" class="home-head-container-asset" src="img/home-head-main.png" alt="How to build your wedding registry">

			<a id="home-head-play" class="home-head-container-asset" data-reveal-id="home-head-video"><img src="img/play.png"></a>
			
			<div id="home-head-links" class="home-head-container-asset">
				<a class="link-button left">Engaged Couple</a>
				<span></span>
				<a class="link-button right">Generous Guest</a>
			</div> 
			
			<a id="home-head-down" class="home-head-container-asset" >
				<img src="img/home-arrow-down.png">
			</a>
		</div>
		
		<div id="home-head-bg">
			<div id="home-head-bg-left" class="home-head-bg"></div>
			<div id="home-head-bg-right" class="home-head-bg"></div>
		</div>

		<div id="home-head-video" class="reveal-modal large" data-reveal aria-labelledby="home-head-vid-container" aria-hidden="true" role="dialog">
			Video Container
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		</div>
	</div>	<!-- END OF HOME-HEAD -->

	<!-- HOME SLIDER -->
	<div id="home-slider" class="row-full home-sec">

		<ul class="home-slider-content" data-orbit data-options="pause_on_hover:true;animation_speed:500;">
		  <li class="home-slider-single" data-orbit-slide="slide-1" style="background: url(img/bg-home-sec-slider.png)">
		    <div class="slider-content large-8 large-centered columns">
		      <h3 class="large-cursive slider-text">Lorem</h3>
		      <h4 class="large-sans slider-text">Room</h4>
		    </div>
		  </li>
		  <li class="home-slider-single" data-orbit-slide="slide-2" style="background: url(img/bg-single-cat-1.png)">
		    <div class="slider-content large-8 large-centered columns">
		      <h3 class="large-cursive slider-text">Kitchen</h3>
		      <h4 class="large-sans slider-text">Collection</h4>
		    </div>
		  </li>
		  <li class="home-slider-single" data-orbit-slide="slide-3" style="background: url(img/bg-single-cat-2.png)">
		    <div class="slider-content large-8 large-centered columns">
		      <h3 class="large-cursive slider-text">Dolores</h3>
		      <h4 class="large-sans slider-text">Umbridge</h4>
		    </div>
		  </li>
		</ul>		

	</div> <!-- END OF HOME SLIDER -->

	<!-- HOME GRID -->
	<?php include("includes/home-grid.php");?>

	<!-- REGISTRIES WE <3 -->

	<div id="home-registries" class="row-full home-sec">
		<div id="home-reg-container" class="container-width">
			<h4 class="medium-sans text-center">Registries We Love</h4>

			<div id="home-reg-col-container" class="row">
				<div class="home-reg-single home-reg-left large-6 medium-7 medium-centered columns">
					<div class="home-reg-img" style="background: url(img/home-couple.png)"></div>
					<div class="home-reg-text">
						<a href="#">
							<div class="couple-name">
								<div class="home-reg-hubby">
									<h4 class="smaller-cursive">Ron</h4>
								</div>
								<div class="lean-right">
									<div class="home-reg-connector">
										<h4 class="smaller-cursive">&</h4>
									</div>
									<div class="home-reg-wife">
										<h4 class="smaller-cursive">Hermione</h4>
									</div>
								</div>
								<div class="home-reg-date">
									<p>04.07.2017</p>
								</div>
							</div>
						</a>
						<div class="home-reg-bg"></div>
					</div>
				</div>	
				<div class="home-reg-single home-reg-right large-6 medium-7 medium-centered columns">
					<div class="home-reg-img" style="background: url(img/home-couple.png)"></div>
					<div class="home-reg-text">
						<a href="#">
							<div class="couple-name">
								<div class="home-reg-hubby">
									<h4 class="smaller-cursive">Han Solo</h4>
								</div>
								<div class="lean-right">
									<div class="home-reg-connector">
										<h4 class="smaller-cursive">&</h4>
									</div>
									<div class="home-reg-wife">
										<h4 class="smaller-cursive">Leia</h4>
									</div>
								</div>
								<div class="home-reg-date">
									<p>04.07.2017</p>
								</div>								
							</div>
						</a>
						<div class="home-reg-bg"></div>
					</div>				
				</div>

			</div>

		</div>		
	</div>



<?php 
	include ("includes/menu-mobile-guest.php");
	include ("includes/footer.php");
;?>