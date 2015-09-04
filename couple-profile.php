<?php
	$bodyid="couple-profile";
	include("includes/header.php");
	include("includes/menu-couple.php");
?>

<?php include 'includes/couple-profile/banner-edit.php';?>

	<div id="couple-profile-menu" class="row-full">
		<div class="large-5	large-centered columns">
				
				<?php 
					$page1 = "";
					$page2 = "";
					$page3 = "";

					if(isset($_GET['page']) && $_GET['page'] == "my-registry"){
						$page1 = "class='active'";
					}elseif(isset($_GET['page']) && $_GET['page'] == "share-registry"){
						$page2="class='active'";
					}elseif(isset($_GET['page']) && $_GET['page'] == "settings"){
						$page3="class='active'";
					}else{
						$page1 = "class='active'";
					}
				?>
							
				<ul>
					<li <?php echo $page1; ?>><a class="tab-title" href="couple-profile.php?page=my-registry">My Registry<span></span></a></li>
					<li <?php echo $page2; ?>><a class="tab-title" href="couple-profile.php?page=share-registry">Share Registry<span></span></a></li>
					<li <?php echo $page3; ?>><a class="tab-title" href="couple-profile.php?page=settings">Settings<span></span></a></li>
				</ul>

		</div>
	</div>
	
	<!-- CONTENT -->
	<?php 
		if(isset($_GET['page']) && $_GET['page'] == "my-registry"){
			include('includes/couple-profile/my-registry.php');	
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "share-registry"){
				include('includes/couple-profile/share-registry.php');
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "settings"){
				include('includes/couple-profile/settings.php');
		}else{
			include('includes/couple-profile/my-registry.php');	
		};
	?>			
	

		
	
<?php 
	include ("includes/menu-mobile-guest.php");
	include ("includes/footer.php");
;?>