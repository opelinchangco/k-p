<div id="regbut-item-category" class="row-full">
	<div class="large-9 large-centered small-12 small-centered columns">
		<?php 
			if(isset($_GET['page']) && $_GET['page'] == "bed-and-bath"){
				$catBedBath = "active";
				$catBedBathOp = "semitrans";
			}elseif(isset($_GET['page']) && $_GET['page'] == "kitchen-tools"){
				$catKitchenTools= "active";
				$catBedBathOp = "semitrans";
				$catKitchenToolsOp= "semitrans";
			}elseif(isset($_GET['page']) && $_GET['page'] == "home-appliances"){
				$catHomeApp= "active";
				$catBedBathOp = "semitrans";
				$catKitchenToolsOp= "semitrans";
				$catHomeAppOp= "semitrans";
			}elseif(isset($_GET['page']) && $_GET['page'] == "living-room"){
				$catLivingRoom= "active";
				$catBedBathOp = "semitrans";
				$catKitchenToolsOp= "semitrans";
				$catHomeAppOp= "semitrans";
				$catLivingRoomOp= "semitrans";
			}elseif(isset($_GET['page']) && $_GET['page'] == "lifestyle"){
				$catLifestyle="active";
				$catBedBathOp = "semitrans";
				$catKitchenToolsOp= "semitrans";
				$catHomeAppOp= "semitrans";
				$catLivingRoomOp= "semitrans";
				$catLifestyleOp="semitrans";
			}else{
				$catBedBath = "active";
				$catBedBathOp = "semitrans";
			}
		?>
					
		<ul class="grid-container">
			<li id="rb-grid-bedbath" class="small-grid-row grid-single <?php echo $catBedBath; ?> <?php echo $catBedBathOp; ?>">
				<div class="small-grid-label">
					<div class="small-grid-link">
						<a href="registry-butler.php?page=bed-and-bath">
							<img src="img/grid-label-bed&bath.png">
						</a>
					</div>
				</div>
				<div class="bottom-arrow"><span></span></div>						
			</li>

			<li id="rb-grid-kitchentools" class="small-grid-row grid-single <?php echo $catKitchenTools; ?> <?php echo $catKitchenToolsOp; ?>">
				<div class="small-grid-label">
					<div class="small-grid-link">
						<a href="registry-butler.php?page=kitchen-tools">
							<img src="img/grid-label-kitchentools.png">
						</a>
					</div>
				</div>	
				<div class="bottom-arrow"><span></span></div>					
			</li>	

			<li id="rb-grid-homeapp" class="small-grid-row grid-single <?php echo $catHomeApp; ?> <?php echo $catHomeAppOp; ?>">
				<div class="small-grid-label">
					<div class="small-grid-link">
						<a href="registry-butler.php?page=home-appliances">
							<img src="img/grid-label-homeapp.png">
						</a>
					</div>
				</div>	
				<div class="bottom-arrow"><span></span></div>					
			</li>	

			<li id="rb-grid-livingroom" class="small-grid-row grid-single <?php echo $catLivingRoom; ?> <?php echo $catLivingRoomOp; ?>">
				<div class="small-grid-label">
					<div class="small-grid-link">
						<a href="registry-butler.php?page=living-room">
							<img src="img/grid-label-livingroom.png">
						</a>
					</div>
				</div>	
				<div class="bottom-arrow"><span></span></div>					
			</li>	

			<li id="rb-grid-lifestyle" class="small-grid-row grid-single <?php echo $catLifestyle; ?> <?php echo $catLifestyleOp; ?>">
				<div class="small-grid-label">
					<div class="small-grid-link">
						<a href="registry-butler.php?page=lifestyle">
							<img src="img/grid-label-lifestyle.png">
						</a>
					</div>
				</div>	
				<div class="bottom-arrow"><span></span></div>					
			</li>						
		</ul>
	</div>							
</div>