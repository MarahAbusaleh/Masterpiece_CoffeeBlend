@extends('Layout.master')
@section('title', 'Shop')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Order Online</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!--////////////////////////////////////////// END Of Header //////////////////////////////////////////-->

	<!--------------------------------------------- Categories ---------------------------------------------->

    <section class="ftco-menu mb-5 pb-5">
		<div class="container">
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12  align-items-center">
							<div class="tab-content ftco-animate" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
									<div class="row" style="flex-wrap: nowrap; margin-right: 100px;">
										<div class="col-md-4" style="border: 1px solid gray; margin: 20px; padding: 10px;" >
											<div class="menu-entry">
												<div class="text text-center pt-4">
													<div class="contimg">
														<div class="containerimg">
															<img src="./images/coffeebeans1.png" alt="Image 1" class="shopimg">
															<img src="./images/coffeebeans2.png" alt="Image 2" class="shopimg" >
															<img src="./images/coffeebeans3.png" alt="Image 3" class="shopimg">
														</div>
													</div>
													<p style="margin-top: 120px;"><a href="subcategories.html" class="btn btn-primary" style="height: fit-content; width: fit-content; font-size: 15px;">COFFEE BEANS</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4" style="border: 1px solid gray; margin: 20px; padding: 10px;" >
											<div class="menu-entry">
												<div class="text text-center pt-4">
													<div class="contimg">
														<div class="containerimg">
															<img src="./images/machiens1.png" alt="Image 1" class="shopimg">
															<img src="./images/machiens2.png" alt="Image 2" class="shopimg" >
															<img src="./images/machiens3.png" alt="Image 3" class="shopimg">
														</div>
													</div>
													<p style="margin-top: 120px;"><a href="subcategories.html" class="btn btn-primary" style="height: fit-content; width: fit-content; font-size: 15px;">MACHINES</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4" style="border: 1px solid gray; margin: 20px; padding: 10px;" >
											<div class="menu-entry">
												<div class="text text-center pt-4">
													<div class="contimg">
														<div class="containerimg">
															<img src="./images/cup1.png" alt="Image 1" class="shopimg">
															<img src="./images/cup2.png" alt="Image 2" class="shopimg" >
															<img src="./images/cup3.png" alt="Image 3" class="shopimg">
														</div>
													</div>
													<p style="margin-top: 120px;"><a href="subcategories.html" class="btn btn-primary" style="height: fit-content; width: fit-content; font-size: 15px;">CUPS & MUGS</a></p>
												</div>
											</div>
										</div>
									</div>

									<div class="row" style="flex-wrap: nowrap; margin-right: 100px;">
										<div class="col-md-4" style="border: 1px solid gray; margin: 20px; padding: 10px;">
											<div class="menu-entry">
												<div class="text text-center pt-4">
													<div class="contimg">
														<div class="containerimg">
															<img src="./images/eq1.png" alt="Image 1" class="shopimg">
															<img src="./images/eq2.png" alt="Image 2" class="shopimg" >
															<img src="./images/eq3.png" alt="Image 3" class="shopimg">
														</div>
													</div>
													<p style="margin-top: 120px;"><a href="subcategories.html" class="btn btn-primary" style="height: fit-content; width: fit-content; font-size: 15px;">EQUIPMENT</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4" style="border: 1px solid gray; margin: 20px; padding: 10px;" >
											<div class="menu-entry">
												<div class="text text-center pt-4">
													<div class="contimg">
														<div class="containerimg">
															<img src="./images/cande2.png" alt="Image 1" class="shopimg">
															<img src="./images/per1.PNG" alt="Image 2" class="shopimg" >
															<img src="./images/per2.PNG" alt="Image 3" class="shopimg">
														</div>
													</div>
													<p style="margin-top: 120px;"><a href="subcategories.html" class="btn btn-primary" style="height: fit-content; width: fit-content; font-size: 15px;">PERSONAL ACCESSORIES</a></p>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
	<!--//////////////////////////////////////// END Of Categories ////////////////////////////////////////-->
    
	<hr style="border-top: 1px solid gray;">

@endsection