<?php
	$bodyid="registry-butler";
	include("includes/header.php");
	include("includes/menu-couple.php");
?>

<h2 class="medium-sans title-head"> Registry Butler </h4>

<div id="registry-butler-container">
	<?php include 'includes/registry-butler/category-list.php';?>	

	<?php 
		if(isset($_GET['page']) && $_GET['page'] == "bed-and-bath"){
			include('includes/registry-butler/content-bed-bath.php');	
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "kitchen-tools"){
				include('includes/registry-butler/content-kitchen-tools.php');
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "home-appliances"){
				include('includes/registry-butler/content-home-appliances.php');
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "living-room"){
				include('includes/registry-butler/content-living-room.php');
			}
			elseif(isset($_GET['page']) && $_GET['page'] == "lifestyle"){
				include('includes/registry-butler/content-lifestyle.php');
		}else{
			include('includes/registry-butler/content-bed-bath.php');	
		};
	?>	

</div>


<?php include 'includes/footer.php';?>