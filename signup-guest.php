<?php
	$bodyid="signup";
	include("includes/header.php");
	include 'includes/menu-home.php';
?>
	<!-- ENTER SITE -->
	<div id="entersite" class="row-full page-sec">
		<div id="credentials" class="container-width">
			<h4 class="medium-sans">Sign up</h4>
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
							<div id="cred-agree" class="large-12 columns" data-equalizer>
								<input id="agreebox" type="checkbox" data-equalizer-watch>
								<label for="agreebox" data-equalizer-watch>
									I agree to the <a href="">terms and conditions</a> of Knots and Pans
								</label>
							</div>
							<div id="cred-submit" class="large-12 columns">
								<a href="#" class="button">Submit</a>
							</div>
							<div id="forget-pass" class="large-12 columns">
								<a href="">Already a member? Login.</a>
							</div>																					
						</div>
					</form>
				</div>
				<div id="login-divider" class="cred-col large-1  medium-1 columns" data-equalizer-watch>
					<p>or</p>
				</div>				
				<div id="cred-social"class="cred-col large-5  medium-5  columns" data-equalizer-watch>
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