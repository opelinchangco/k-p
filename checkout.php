<?php
	$bodyid="checkout";
	include("includes/header.php");
	include("includes/menu-nosub.php");
?>	

	<!-- HOME HEAD -->
	<div id="checkout-container" class="row-full page-sec">
		<div class="large-9 large-centered columns">
			<h4 class="medium-sans">Checkout</h4>
			<div class="row-full">
				<div class="large-8 columns">
					<div class="your-cart">
						<h4 class="small-sans">Your Cart</h4>
						<div class="cart-details">
							<table>
							  <tr>
							    <th scope="column" class="item-details">Item</th>
							    <th scope="column" class="unit-price">Unit Price</th>
							    <th scope="column" class="qty">Quantity</th>
							    <th scope="column" class="subtotal">Subtotal</th>
							  </tr>
							  <tr class="single-item">
							    <td class="item-details" data-equalizer>
							    	<div class="item-img" style="background: url(img/home-grid-small-3.png)" data-equalizer-watch></div>
							    	<div class="item-text" data-equalizer-watch>
										<div class="item-name">
											Wooden Chair
										</div>
										<div class="item-desc">
											Quick description of the item goes here.
										</div>
									</div>
							    </td>
							    <td class="unit-price">
							    	P5000.00
							    </td>
							    <td class="qty reg-form">
						  			<label> 
						  				<input type="number" name="order-qty" id="order-qty" value="1" min="0">
						  			</label>
						  			<a href="">Remove</a>
							    </td>
							    <td class="subtotal">
							    	P5000.00
							    </td>							    
							  </tr>
							  <tr class="single-item">
							    <td class="item-details">
							    	<div class="item-img" style="background: url(img/home-grid-small-1.png)"></div>
							    	<div class="item-text">
										<div class="item-name">
											Wooden Chair
										</div>
										<div class="item-desc">
											Quick description of the item goes here.
										</div>
									</div>
							    </td>
							    <td class="unit-price">
							    	P5000.00
							    </td>
							    <td class="qty reg-form">
						  			<label> 
						  				<input type="number" name="order-qty" id="order-qty" value="1" min="0">
						  			</label>
						  			<a href="">Remove</a>
							    </td>
							    <td class="subtotal">
							    	P5000.00
							    </td>							    
							  </tr>							  
							  
							</table>
						</div>
					</div>
					<div class="cart-message reg-form">
						<h4 class="small-sans">Gift Message</h4>

						<form>
							<input type="text" name="from" placeholder="From">
							<textarea placeholder"Your Message"></textarea>
						</form>

					</div>
				</div>
				<div class="large-4 columns">
					<div class="order-summary">
						<h4 class="small-sans">Order Summary</h4>
						<div class="summary-details">
							<table>
								<tr>
									<td class="sum-text">
										Subtotal
									</td>
									<td class="sum-value">
										P10,000.00
									</td>
								</tr>							  
								<tr>
									<td class="sum-text">
										Tax
									</td>
									<td class="sum-value">
										0.00
									</td>
								</tr>
								<tr>
									<td class="sum-text">
										Shipping Fee
									</td>
									<td class="sum-value">
										0.00
									</td>
								</tr>	
								<tr class="sum-total">
									<td class="sum-text">
										Total
									</td>
									<td class="sum-value">
										P10,000.00
									</td>
								</tr>															
							</table>
							<div class="purchase">
								<a href="" class="link-button"> Purchase </a>
							</div>
						</div>
					</div>
					<div class="promo-code reg-form">
						<h4 class="small-sans">Promo Code</h4>
						<form>
							<input type="text" name="from" placeholder="Enter Code">
							<a href="" class="link-button">Apply</a>
						</form>
					</div>
				</div>
			</div>
		</div>




		
	</div>	<!-- END OF HOME-HEAD -->

	


<?php include 'includes/footer.php';?>