<div id="couple-banner" class="row-full banner">
	<div class="large-8 large-centered columns banner-container">
		<div class="banner-name row">
			<div class="large-12 columns">
				<h1 id="couple-name" class="large-cursive"><?php echo $_POST["couple-name"] ?></h1>
				<div class="banner-edit">
					<a href="" data-reveal-id="banner-couple-name">Edit Title</a>
					
					<div id="banner-couple-name" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<form action="includes/form-title-name.php" method="post">
							<p>Write the Title</p>
							<input name="couple-name" type="text" placeholder="Hahn Solo & Leia" />
							<input type="submit" placeholder="Save">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-details row" data-equalizer>
			<div class="large-2 columns banner-edit" data-equalizer-watch>
				<a href="">Add Photo</a>
			</div>
			<div class="large-6 columns banner-edit left" data-equalizer-watch>
				<h6 class="banner-date">10.17.2017</h6>
				<a href="">Write a message for your guests</a>
			</div>			
		</div>
	</div>
</div>