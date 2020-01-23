<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url('assets/images/Dubai3.jpg') ?>);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<!-- <h2>2 Days Tour</h2> -->
								<h1>Deira Creek Dhow Cruise Dinner with Transfer</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(<?php echo base_url('assets/images/img3.jpg') ?>);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<!-- <h2>10 Days Cruises</h2> -->
								<h1>Desert Safari Dubai</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(<?php echo base_url('assets/images/glowgarden1.jpg') ?>);">
				<div class="overlay"></div>
				<div class="container-fluids">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<!-- <h2>Explore our most tavel agency</h2> -->
								<h1>Glow Garden</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(<?php echo base_url('assets/images/MUM_085_original.jpg') ?>);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Experience</h2>
								<h1>The Lounge-Tea in the clouds</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div id="colorlib-reservation">
	<!-- <div class="container"> -->
	<div class="row">
		<div class="search-wrap">
			<div class="container">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#activity"><i class="flaticon-plane"></i> Activity</a></li>
					<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="activity" class="tab-pane fade in active">
					<form method="post" action="<?php echo base_url()?>Travel/LinkactivityPost" class="colorlib-form">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="date">Where:</label>
									<div class="form-field">
										<!-- <i class="icon icon-arrow-down3"></i> -->
										<select name="location" id="location" class="form-control">
											<?php if (!empty($place)) {
												for ($i = 0; $i < count($place); $i++) {
											?>
													<option value="">
														<?php echo $place[$i]['name'] ?>
													</option>
											<?php }
											}
											?>
										</select>
										<!-- <input type="text" id="location" class="form-control" placeholder="Search Location"> -->
									</div>
								</div>

							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="date">Activity:</label>
									<div class="form-field">
										<!-- <i class="icon icon-arrow-down3"></i> -->
										<select name="tour_id" id="activityid" class="form-control">
											<?php if (!empty($tour)) {
												for ($i = 0; $i < count($tour); $i++) {
											?>
													<option class="" value="<?php echo $tour[$i]['name'] ?>">
														<?php echo $tour[$i]['name'] ?>
													</option>
											<?php }
											}
											?>
										</select>

										<!-- <i class="icon icon-calendar2"></i>
										<input type="text" id="date" class="form-control date" placeholder="Check-in date"> -->
									</div>
								</div>
							</div>
							<!-- <div class="col-md-2">
								<div class="form-group">
									<label for="date">Date:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="guests">Guest</label>
									<div class="form-field">
										<i class="icon icon-arrow-down3"></i>
										<select name="people" id="people" class="form-control">
											<option value="#">1</option>
											<option value="#">2</option>
											<option value="#">3</option>
											<option value="#">4</option>
											<option value="#">5+</option>
										</select>
									</div>
								</div>
							</div> -->
							<div class="col-md-2">
								<input type="button" id="submit" value="Find Activity" class="btn btn-primary btn-block">
							</div>
						</div>
					</form>
				</div>
				<div id="hotel" class="tab-pane fade">
					<form method="post" class="colorlib-form">
						<div class="row">
							<div class="col-md-2">
								<div class="booknow">
									<h2>Book Now</h2>
									<span>Best Price Online</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="date">Check-in:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" class="form-control date" placeholder="Check-in date">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="date">Check-out:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" class="form-control date" placeholder="Check-out date">
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="guests">Guest</label>
									<div class="form-field">
										<i class="icon icon-arrow-down3"></i>
										<select name="people" id="people" class="form-control">
											<option value="#">1</option>
											<option value="#">2</option>
											<option value="#">3</option>
											<option value="#">4</option>
											<option value="#">5+</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- <div id="colorlib-services">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-3 animate-box text-center aside-stretch">
				<div class="services">
					<span class="icon">
						<i class="flaticon-around"></i>
					</span>
					<h3>Amazing Travel</h3>
					<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-boat"></i>
					</span>
					<h3>Our Cruises</h3>
					<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-car"></i>
					</span>
					<h3>Book Your Trip</h3>
					<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
				</div>
			</div>
			<div class="col-md-3 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="flaticon-postcard"></i>
					</span>
					<h3>Nice Support</h3>
					<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="colorlib-tour colorlib-light-grey">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<h2>Popular Destination</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
	</div>
	<div class="tour-wrap">
		<?php if(!empty($activity)){
			for ($i=0; $i < count($activity) ; $i++) { 
			?>
		
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php echo base_url('assets/images/activity.jpg') ?>)">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
				<h2><?php echo $activity[$i]['name'] ?></h2>
				<span class="city"><?php echo $activity[$i]['place'] ?></span>
				<span class="price">AED450</span>
			</span>
		</a>
		<?php }}
			?>
	</div>
</div>
<!-- <div id="colorlib-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<h2>Recent Blog</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="blog-flex">
			<div class="f-entry-img" style="background-image: url(<?php echo base_url('assets/images/blog-3.jpg'); ?>)">
			</div>
			<div class="blog-entry aside-stretch-right">
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(<?php echo base_url('assets/images/blog-1.jpg'); ?>)"></span>
							<div class="desc">
								<span class="date">Feb 22, 2018</span>
								<h3>A Definitive Guide to the Best Dining</h3>
								<span class="cat">Activities</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(<?php echo base_url('assets/images/blog-2.jpg') ?>);"></span>
							<div class="desc">
								<span class="date">Feb 22, 2018</span>
								<h3>How These 5 People Found The Path to Their Dream Trip</h3>
								<span class="cat">Activities</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(<?php echo base_url('assets/images/blog-4.jpg') ?>);"></span>
							<div class="desc">
								<span class="date">Feb 22, 2018</span>
								<h3>Our Secret Island Boat Tour Is just for You</h3>
								<span class="cat">Activities</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- <div id="colorlib-intro" class="intro-img" style="background-image: url(<?php echo base_url('assets/images/cover-img-1.jpg') ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<div class="intro-desc">
					<div class="text-salebox">
						<div class="text-lefts">
							<div class="sale-box">
								<div class="sale-box-top">
									<h2 class="number">45</h2>
									<span class="sup-1">%</span>
									<span class="sup-2">Off</span>
								</div>
								<h2 class="text-sale">Sale</h2>
							</div>
						</div>
						<div class="text-rights">
							<h3 class="title">Just hurry up limited offer!</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<div class="video-wrap">
					<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
						<div class="video-overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div id="colorlib-hotel">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<h2>Recommended Hotels</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<div class="owl-carousel">
					
					<div class="item">
						<div class="hotel-entry">
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php echo base_url('assets/images/hotel-2.jpg') ?>);">
								<p class="price"><span>AED120</span><small> /night</small></p>
							</a>
							<div class="desc">
								<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
								<h3><a href="#">Lorem Ipsum </a></h3>
								<span class="place">Dubai</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="hotel-entry">
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php echo base_url('assets/images/hotel-3.jpg') ?>);">
								<p class="price"><span>AED120</span><small> /night</small></p>
							</a>
							<div class="desc">
								<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
								<h3><a href="#">Lorem Ipsum</a></h3>
								<span class="place">Lorem Ipsum</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="hotel-entry">
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php echo base_url('assets/images/hotel-4.jpg') ?>);">
								<p class="price"><span>AED120</span><small> /night</small></p>
							</a>
							<div class="desc">
								<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
								<h3><a href="#">Lorem Ipsum</a></h3>
								<span class="place">Lorem Ipsum</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-testimony" class="colorlib-light-grey">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
				<h2>Our Satisfied Guests says</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="owl-carousel2">
					<?php if (!empty($testimonial)) {
						for ($i = 0; $i < count($testimonial); $i++) {
					?>

							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(<?php echo base_url('assets/images/').$testimonial[$i]['image']; ?>);"></span>
									<span class="user"><?php echo $testimonial[$i]['name'] ?></span>
									<small><?php echo $testimonial[$i]['address'] ?></small>
									<blockquote>
										<p><?php echo $testimonial[$i]['description']?></p>
									</blockquote>
								</div>
							</div>
					<?php }
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$('#submit').click(()=>{
	let activity = $('#activityid').val().trim()
	if(activity != ""){
		window.location = "<?php echo base_url('Travel/package#')?>"+activity
	}else{
		alert('Please select any Activity')
	}
	
})
</script>