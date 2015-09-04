<?php
	$bodyid="login";
	include("includes/header.php");
	include 'includes/menu-home.php';
?>
	<!-- ENTERSITE -->
	<div id="entersite" class="row-full page-sec">
		<div id="credentials" class="container-width">
			<h4 class="medium-sans">Log in</h4>
			<div class="cred-forms row" data-equalizer>
				<div id="cred-login"class="cred-col large-6 medium-6 columns" data-equalizer-watch>
					<div id="cred-soc-mob">
						<div class="fb-btn">
							<h4>Signup before you build your registry!</h4>
							<a href=""><img src="img/facebook.png"></a>
							<p>or</p>

						</div>
					</div>					
					<form>
						<div class="row">
							<div class="large-12 columns">
								<input type="text" placeholder="Email Address">
							</div>
							<div class="large-12 columns">
								<input type="text" placeholder="Password">
							</div>	
							<div id="forget-pass" class="large-12 columns">
								<a href="">Forgot Password?</a>
							</div>	
							<div id="cred-submit" class="large-12 columns">
								<a href="#" class="button">Login</a>
							</div>													
						</div>
					</form>
				</div>
				<div id="login-divider" class="large-1 medium-1 columns" data-equalizer-watch>
					<p>or</p>
				</div>				
				<div id="cred-social"class="cred-col large-5 medium-5 columns" data-equalizer-watch>
					<div class="fb-btn">
						<a href=""><img src="img/facebook.png"></a>
					</div>					
				</div>
			</div>
		</div>

	</div>	<!-- END OF ENTERSITE -->

	<div id="firstpresent" class="row-full page-sec">
		<img src="img/first-present.png">
		<div class="firstpresent-text">
			<h4 class="small-cursive">
				your first present
			</h4>
			<h5 class="medium-sans"> Is from us </h5>
			<p class="bodyfont">
				Complete your registry and get a hand-embroidered robe from us.
			<p>
		</div>

	</div>

	


<?php 
	include ("includes/menu-mobile-guest.php");
	include ("includes/footer.php");
;?>