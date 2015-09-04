<?php
	$bodyid="find-registry";
	include("includes/header.php");
	include("includes/menu-home.php");
?>	

	<!-- HOME HEAD -->
	<div id="findreg-container" class="row-full page-sec">
		<div class="container-width">
			<h4 class="medium-sans">Find Registry</h4>
			<div class="reg-form row-full">
				<form>
					<div class="large-8 medium-8 columns">
						<label>
							<input type="text" name="couple-name" placeholder="Enter the name of the couple">
						</label>
					</div>
					<div class="large-4 medium-4 small-12 small-centered columns find">
						<a href="" class="link-button edit-url">Find</a>
					</div>
				</form>
			</div>

			<div class="findreg-matches row-full">
				<p>We found 6 matches</p>
			</div>

			<div class="findreg-results row-full grid-single">
				<ul class="findreg-slider" data-orbit data-options="bullets: false; navigation_arrows:true; next_class:customize-next;prev_class:customize-prev;">
					<li>
						<ul data-equalizer>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/fr-couple-1.png)"></div>
									<p>Romeo & Juliet</p>
								</a>
							</li>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/fr-couple-2.png)"></div>
									<p>Pygmalion & Galatea</p>
								</a>
							</li>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/fr-couple-3.png)"></div>
									<p>Bonnie & Clyde</p>
								</a>
							</li>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/fr-couple-4.png)"></div>
									<p>Bugs & Lola</p>
								</a>
							</li>																					
						</ul>
					</li>
					<li>
						<ul data-equalizer>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/fr-couple-1.png)"></div>
									<p>Daniel & Kathrine</p>
								</a>
							</li>
							<li class="single-result" data-equalizer-watch>
								<a class="result-link">
									<div class="findreg-img" style="background: url(img/beyonce-jayz.jpg)"></div>
									<p>Jay Z & Beyonce</p>
								</a>
							</li>
						</ul>
					</li>					

				</ul>
				</div>				
			</div>
		</div>




		
	</div>	<!-- END OF HOME-HEAD -->

	


<?php 
	include ("includes/menu-mobile-guest.php");
	include 'includes/footer.php';
?>