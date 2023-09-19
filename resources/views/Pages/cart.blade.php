@extends('Layout.master')
@section('title', 'Cart')
@section('content')

	<!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Cart</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->
	
	<!-------------------------------------------- Cart Section -------------------------------------------->

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list" style="overflow-x: hidden;">
						<table class="table col-lg-8">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
									
									<td class="image-prod"><div class="img" style="background-image:url(images/black\ coffee.jpg);"></div></td>
									
									<td class="product-name">
										<h3>TURKISH COFFEE</h3>
									</td>
									
									<td class="price">1 JOD</td>
									
									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
										</div>
									</td>
									
									<td class="total">2 JOD</td>
								</tr><!-- END TR-->

								<tr class="text-center">
									<td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
									
									<td class="image-prod"><div class="img" style="background-image:url(images/espresso\ coffee.jpg);"></div></td>
									
									<td class="product-name">
										<h3>ESPRESSO COFFEE</h3>
									</td>
									
									<td class="price">2 JOD</td>
									
									<td class="quantity">
										<div class="input-group mb-3">
										<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
									</div>
								</td>
									
									<td class="total">2 JOD</td>
								</tr><!-- END TR-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<!-- Cart Totals Details -->
			<div class="row justify-content-end">
				
				<div class="row col-lg-6 mt-5 ">
					<div class="col-lg-8 input-group mb-3">
						<input type="text" name="coupon" class="coupon form-control input-number" min="0" max="100">
					</div>
					<div>
						<p class="col-lg-4 text-center"><a href="#" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
					</div>
				</div>
				
				<div class="col col-lg-6 col-md-12 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span>4 JOD</span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span>1.5 JOD</span>
						</p>
						<p class="d-flex">
							<span>Discount</span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span>0.5 JOD</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span>5 JOD</span>
						</p>
					</div>
					<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
				</div>
			</div>
		</div>
	</section>

	<!--////////////////////////////////////// END Of Cart Section ///////////////////////////////////////-->
    
	<hr style="border-top: 1px solid gray;">

@endsection