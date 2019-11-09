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

<!--	Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
	<title>Custom by Kyla</title>
</head>
<body>
<!--Opening (Title) Section-->
<section>
	<div class="container-fluid top-image">
		<div class="p-2 full-section-height d-flex flex-column">
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
<!--			TODO make this so that it switches to the table picture too-->

		</div>
	</div>
</section>

<!--Second section-->
<section>
	<div class="bg-light">
		<div class="p-3">
			<h2 class="text-center text-dark second-font">Our Story</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid"
						  src="https://www.livehoppy.com/wp-content/uploads/2018/05/baby-b-and-the-recycle-bin.jpg" alt="">
				</div>
				<div class="col-md-8">
					<p>I'm a first-time mom and I don't know a lot of other people with young kids. A lot of being a mom is
						just making stuff up as I go along and figuring out how to handle one challenge after another.</p>
					<p>When my son was a little over a year, one of my big challenges was trying to get anything done in the
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
<section id="carousel-images">
	<div class="container">
		<div class="">
			<h2 class="text-center">Amazing and cool!</h2>
			<div class="bd-example">
				<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselCaptions" data-slide-to="1"></li>
						<li data-target="#carouselCaptions" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">

							<img src="https://www.livehoppy.com/wp-content/uploads/2019/04/kids-bunny-table.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Converts into a table!</h5>
								<p>This two-in-one stool saves space and converts into a child-sized table.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="https://www.livehoppy.com/wp-content/uploads/2019/04/B-on-stool.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>The kitchen helper</h5>
								<p>Your child will love to be able to see what is going on.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="https://www.livehoppy.com/wp-content/uploads/2019/04/kids-bunny-stool-2.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Custom made</h5>
								<p>Made by a mom.</p>
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
<!--Email Form-->
<section class="email-form m-5">
	<div class="container bg-light p-3 border">
		<h2 class="text-center">Contact us for more info</h2>
		<form>
			<div class="form-group px-3">
				<label for="emailInput">Email address</label>
				<input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
			</div>
			<div class="form-group px-3">
				<label for="messageInput">Message</label>
				<textarea class="form-control" id="messageInput" rows="4" placeholder="Ask a question or request quote"></textarea>
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