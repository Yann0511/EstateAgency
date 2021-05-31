@extends('layouts.default')

@section('content')

		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Sale</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$4,000.00</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Rent</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$2000/mos</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Sale</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$4,000.00</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>

		<div id="fh5co-search-map">
			<div class="search-property">
				<div class="s-holder">
					<h2>Search Properties</h2>
					<div class="row">
						<div class="col-xxs-12 col-xs-12">
							<div class="input-field">
								<label for="from">Keyword:</label>
								<input type="text" class="form-control" id="from-place" placeholder="Any"/>
							</div>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Property Status:</label>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>Any</option>
									<option value="1">Rent</option>
									<option value="2">Sale</option>
								</select>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Property Type:</label>
								<select class="cs-select cs-skin-border input-half">
									<option value="" disabled selected>Any</option>
									<option value="1">Building</option>
									<option value="2">Office</option>
								</select>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<div class="input-field">
								<label for="from">Location:</label>
								<input type="text" class="form-control" id="from-place" placeholder="Any"/>
							</div>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Price:</label>
								<div class="wide">
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
								</div>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Bedrooms:</label>
								<div class="wide">
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
								</div>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Bathrooms:</label>
								<div class="wide">
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
								</div>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Area:</label>
								<div class="wide">
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
								</div>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12">
							<section>
								<label for="class">Parking spots:</label>
								<div class="wide">
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
									<select class="cs-select cs-select-half cs-skin-border input-half">
										<option value="" disabled selected>Any</option>
										<option value="1">Building</option>
										<option value="2">Office</option>
									</select>
								</div>
							</section>
						</div>
						<div class="col-xxs-12 col-xs-12 text-center">
							<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="map" style="background-image: url(images/cover_bg_1.jpg);">
			</div>
		</div>

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-map"></i>
							</span>
							<div class="feature-copy">
								<h3>Move House</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
							<div class="feature-copy">
								<h3>Mortgage</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Make Money</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-piechart"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Home</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Marketing</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-properties" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Newest Properties</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-1.jpg);">
								<span class="status">Sale</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>Properties Near in Beach</h3>
								<span class="price">$3,000</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-2.jpg);">
								<span class="status">Rent</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>Modern House at NZ</h3>
								<span class="price">$200/mos</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-3.jpg);">
								<span class="status">Sale</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>Bonggalo House</h3>
								<span class="price">$3,000</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>						
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-4.jpg);">
								<span class="status">Sale</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>Properties at Alaska</h3>
								<span class="price">$3,000</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-5.jpg);">
								<span class="status">Rent</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>Modern Properties</h3>
								<span class="price">$200/mos</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="fh5co-property" style="background-image: url(images/property-6.jpg);">
								<span class="status">Sale</span>
								<ul class="list-details">
									<li>2000 ft sq<li>
									<li>5 Bedroom:</li>
									<li>4 Bathroom:</li>
									<li>3 Garage:</li>
								</ul>
							</a>
							<div class="property-details">
								<h3>House at the Top of Mountain</h3>
								<span class="price">$3,000</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores.</p>
								<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="fh5co-about" class="fh5co-agent">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Agents</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="images/user-1.jpg" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Jean Smith</h3>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
					<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="images/user-2.jpg" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Hush Raven</h3>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
					<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="images/user-3.jpg" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Alex King</h3>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
					<div class="col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="images/user-4.jpg" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Hush Raven</h3>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/property-4.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Properties for sale</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/property-2.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Modern Home</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/property-3.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">15% Deal Discount For House</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->
		
@stop