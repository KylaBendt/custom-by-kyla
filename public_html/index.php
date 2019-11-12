<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta tags-->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>


	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--	My CSS-->
	<link rel="stylesheet" href="./styles/styles.css">
	<!--jQuery first, then Popper.js, then Bootsrap-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			  crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!--	Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
	<title>Custom by Kyla</title>
</head>
<body>
<!--Opening (Title) Section-->

<!--TODO: Make it clear what product is early on-->
<!--TODO: Change contact form to request a quote-->
<!--TODO: Make opening text easier to read-->
<!--TODO: Add CTAs-->
<section>
	<div class="container-fluid top-image full-section-height">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#safety">Safety</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">The Story</a>
					</li>
				</ul>

			</div>
		</nav>


		<div class="p-2 d-flex flex-column">
			<div class="mt-auto ml-auto order-3">
				<h1 class="cursive-font text-light h3">Custom by Kyla</h1>
			</div>
			<div class="order-1">
				<p class="second-font h2 text-light">Made for toddlers.</p>
			</div>
			<div class="order-2 mx-auto">
				<p class="second-font h1 text-light text-center">Designed by a mom.</p>
			</div>
			<!--			TODO Add a button for learn more. -->
		</div>
	</div>
</section>


<!-- Built with safety in mind section-->
<section id="safety">
	<div class="bg-light">
		<div class="p-3">
			<h2 class="text-center text-dark second-font">Built with safety in mind</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="card-deck">
					<!--Card-->
						<div class="card mx-3 mb-4">
							<img src="./images/support-bar.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Detachable Safety Bar</h5>
								<p class="card-text">The stool includes a detachable safety bar to keep your little one from
									falling
									off. </p>
								<p class="card-text">It's designed to be easy for them to climb under to get on the stool. </p>
								<p class="card-text">You can screw it on for extra safety or hide it away under the seat if you
									don't need it.</p>
							</div>
					</div>
					<!--End Card-->
					<!--Card-->
						<div class="card mx-3 mb-4">
							<img src="./images/plans.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Meticulously planned</h5>
								<p class="card-text">Built with the motto "Form. Fit. Function." </p>
								<p class="card-text">These stools were carefully planned out with attention to every detail.</p>
								<p class="card-text">Then tested by a two-year old and reworked to be even better.</p>
							</div>
						</div>
					<!--End Card-->
				</div>
			</div>
			<div class="row">
				<div class="card-deck">
					<!--Card -->
						<div class="card mx-3 mb-4">
							<img src="./images/toddler.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Toddler approved</h5>
								<p class="card-text">Young kids love being able to climb up and see what is going on. </p>
								<p class="card-text">Plus they learn more when they are able to be actively involved.</p>
							</div>
						</div>
					<!--End Card-->
					<!--Card -->
						<div class="card mx-4 mb-4">
							<img src="./images/felt-feet.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Felt feet</h5>
								<p class="card-text">Felt feet protect your floor and make it easy for your little person to
									push the stool around to where they need to go. </p>
							</div>
						</div>
					<!--End Card-->
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About us section-->
<section id="about">
	<div class="bg-light">
		<div class="py-3">
			<h2 class="text-center text-dark second-font">My Story</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div>
						<img class="img-fluid rounded-circle"
							  src="./images/kyla.jpg" alt="">
					</div>
				</div>
				<div class="col-md-8">
					<p>When my son was a little over a year old, one of my big challenges was trying to get anything done in the
						kitchen. He would toddle around by my legs trying to get my attention. </p>
					<p>He'd be happy if I picked him up so he could see, but there were some things I just didn't feel
						comfortable doing while holding him. </p>
					<p>I decided he needed to be on my level, but I also wanted him to be safe. He was still perfecting
						balancing and walking and I didn't want him to stand on a chair he could fall off of. </p>
					<p>I had also just started a membership at Quelab, a makerspace in Albuquerque. So I decided to make
						something to solve my problem. </p>
					<p>One thing about being a parent is that we all share some common problems and I wanted to share the
						solution I had with other parents. God knows I need them to share their solutions with me!</p>
				</div>
			</div>
		</div>
	</div>
</section>


<!--Third section-->
<section id="behindTheScenes">
	<div class="container">
		<div>
			<div class="py-3">
				<h2 class="text-center">Behind the scenes!</h2>
			</div>
			<div class="bd-example">
				<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselCaptions" data-slide-to="1"></li>
						<li data-target="#carouselCaptions" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./images/quelab.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Quelab</h5>
								<p>This is the local makerspace. It's amazing!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./images/shop.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Crafted with care</h5>
								<p>I love the feeling of making something that I can really feel proud of.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./images/bunny-cutout.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Love the bunnies!</h5>
								<p>But you can customize it and pick your own design for the cutouts.</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!--Quote Form-->
<section class="email-form m-5">
	<div class="container bg-light p-3 border">
		<h2 class="text-center">Request a quote</h2>
		<form id="quote-form" name="quote-form" action="../php/" method="post">
			<div class="form-group px-3">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="name">
			</div>
			<div class="form-group px-3">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
			</div>
			<div class="form-group px-3">
				<label for="cutout">Select your cutout shape</label>
				<select id="cutout" name="cutout" class="custom-select">
					<option selected value="bunny">Bunny</option>
					<option value="train">Train</option>
					<option value="dinosaur">Dinosaur</option>
					<option value="custom">Custom (Specify below)</option>
				</select>
			</div>
			<div class="form-group px-3">
				<label for="style">Select style</label>
				<select id="style" name="style" class="custom-select">
					<option selected value="combo">2-in-1 step-stool and table</option>
					<option value="train">Step-stool only</option>
				</select>
			</div>
			<div class="form-group px-3">
				<label for="message">Message</label>
				<textarea class="form-control" id="message" name="message" rows="4"
							 placeholder="Specify the color scheme you'd like and any other customizations you want."></textarea>
			</div>
			<!-- reCAPTCHA -->
			<div class=" px-3 pb-3">
			<div class="g-recaptcha" data-sitekey="6LeoKsIUAAAAAGagfIOzZ1G_yOgLSO8ZGeVb9AG7"></div>
			</div>
			<!--Submit Button-->
			<div class="form-group px-3">
			<input type="submit" value="Get quote!">
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="p-3" id="output-area"></div>
				</div>
			</div>
		</form>



	</div>
</section>


<!--Footer-->
<section>
	<div class="container-fluid">
		<div class="bg-dark text-light">
			<p class="text-center">By Kyla Bendt</p>
		</div>
	</div>
</section>
</body>
</html>