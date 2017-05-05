<?php
require '/php/conn.php';
require '/php/functions.php';

$tmpObj = null;

if(isset($_GET['c']) && isset($_GET['sc']) && isset($_GET['product']) && isset($_GET['p']) && isset($_GET['q'])){
	$tmpObj['mainCategory'] = $_GET['c'];
	$tmpObj['subCategory'] = $_GET['sc'];
	$tmpObj['product'] = $_GET['product'];
	$tmpObj['packing'] = $_GET['p'];
	$tmpObj['quantity'] = $_GET['q'];
}

$sql = "select distinct ProductCategory from tblProducts";
$r = mysqli_query($conn, $sql);

$l = null;

while($row = mysqli_fetch_assoc($r)){
	$l[] = $row;
}
utf8_encode_deep($l);


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Executive a Corporate Business Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Executive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //font-awesome icons -->
	<link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>
	<script>
		var json = <?php echo json_encode($tmpObj); ?>;
	</script>
	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="agile-header">
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+080 264 995</li>
					</ul>
				</div>
				<div class="w3_agileits_social_media">
					<ul>
						<li class="agileinfo_share">Share On</li>
						<li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Kingdom</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">About</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Products<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="automotive-lubricants.php">Automotive Lubricants</a></li>
									<li><a href="industrial-lubricants.php">Industrial Lubricants</a></li>
									<li><a href="Grease-lubricants.php">Grease</a></li>
									<li><a href="base-oil.php">Base Oil</a></li>
									<li><a href="speciality-lubricants.php">Speciality</a></li>
									<li><a href="bitumen-lubricants.php">Bitumen</a></li>
								</ul>
							</li>
							<li class="menu__item"><a href="#" class="menu__link">Enquiry Cart</a></li>

							<li class="menu__item"><a href="contact.html" class="menu__link">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<!-- //banner -->
	<!-- About -->
	<div class="courses">
		<div class="container">
			<h2 class="w3ls_head">Enquiry Cart</h2>
			<p class="w3layouts_para">Fusce quis leo in augue ultricies tincidunt a quis mi. Donec at massa nec sem eleifend fermentum.</p>
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-12 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<div class="table-responsive">
							<table class="table table-hover table-bordered table-condensed text-center">
								<colgroup>
									<col width="50%">
									<col width="12.5%">
									<col width="12.5%">
									<col width="12.5%">
									<col width="12.5%">
								</colgroup>
								<thead>
									<tr>
										<th>Items</th>
										<th>Packing</th>
										<th>Quantity</th>
										<th>Update Item</th>
										<th>Delete Item</th>
									</tr>
								</thead>
								<tbody id="enquiryList">
									
								</tbody>
							</table>
							</div>
						</div>

						<div class="w3ls_courses_left_grid">
							<div class="table-responsive">
							<table class="table">
								<thead>
									<th>Select main category</th>
									<th>Select sub category</th>
									<th>Select product</th>
									<th>Packing</th>
									<th>Quantity</th>
									<th></th>
								</thead>
								<tbody>
									<tr>
										<td>
											<select class="form-control" id="mainCategory">
												<option value="" disabled selected>Select Main Category</option>
												<?php
												for($i = 0; $i < count($l); $i++){
													echo '<option value="' . $l[$i]['ProductCategory'] . '">' . $l[$i]['ProductCategory'] . '</option>';
												}
												?>
											</select>
											<p class="text-center c-loader"><span class="glyphicon glyphicon-refresh loader"></span></p>
										</td>
										<td>
											<select class="form-control" id="subCategory">
												
											</select>
											<p class="text-center sc-loader"><span class="glyphicon glyphicon-refresh loader"></span></p>											
										</td>
										<td>
											<select class="form-control" id="products">
												
											</select>
										</td>
										<td>
											<input type="number" class="form-control" value="0" min="0" id="packing">
										</td>
										<td>
											<input type="number" class="form-control" value="0" min="0" id="quantity">
										</td>
										<td><button class="btn btn-primary" id="addToCart"><span class="glyphicon glyphicon-plus"></span> Add to cart</button></td>
									</tr>
								</tbody>
							</table>
							</div>
						</div>
						
						<div class="w3ls_courses_left_grid">
							<form>
								<div class="row">
									
										<div class="col-sm-6">
											<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> *</span>
											<input id="name" type="text" class="form-control" name="name" placeholder="Full Name/Company Name">
										</div>
										</div>
									
										<div class="col-sm-6">
											<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
											<input id="country" type="text" class="form-control" name="country" placeholder="Country">
										</div>
										</div>
									
										<div class="col-sm-6">
											<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> *</span>
											<input id="email" type="email" class="form-control" name="email" placeholder="Email">
										</div>
										</div>

										<div class="col-sm-6">
											<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i> *</span>
											<input id="phone" type="text" class="form-control" name="phone" placeholder="Phone">
										</div>
										</div>
									
										<div class="col-sm-12">
											<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
											<textarea id="detail" placeholder="Enquiry Details" class="form-control"></textarea>
										</div>
										</div>

										<div class="col-sm-12 text-center">
											<button type="button" class="btn btn-warning" id="enquirySubmit">Submit</button>
										</div>
									
								</div>
							</form>
						</div>


					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- /About -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-w3layouts">
				<div class="col-md-3 footer-agileits">
					<h3>Specialized</h3>
					<ul>
						<li>the printing</li>
						<li>typesetting industry.</li>
						<li>Lorem Ipsum</li>
						<li>unknown printer</li>
					</ul>
				</div>
				<div class="col-md-3 footer-wthree">
					<h3>Partners</h3>
					<ul>
						<li>unknown printer</li>
						<li>Lorem Ipsum</li>
						<li>the printing</li>
						<li>typesetting industry.</li>
					</ul>
				</div>
				<div class="col-md-3 footer-w3-agileits">
					<h3>Consultation</h3>
					<ul>
						<li>typesetting industry.</li>
						<li>the printing</li>
						<li>unknown printer</li>
						<li>Lorem Ipsum</li>
					</ul>
				</div>
				<div class="col-md-3 footer-agileits-w3layouts">
					<h3>Our Links</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-w3-agile">
				<div class="col-md-6 w3l-footer-top">
					<h3>Newsletter</h3>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit" value="">
					</form>
					<div class="footer-agile">
						<div class="col-md-6 footer-w3-1">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p> 7th Street 2nd Line, </p>
							<p> Melbourne City, Australia.</p>
						</div>
						<div class="col-md-6 footer-w3l-1">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							<p> +080 264345 995.</p>
							<p> +080 264345 996.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 w3ls-social-icons">
					<h3>Follow Us</h3>
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="copy-right-agile">
				<p>© 2017 Kingdom Lubricants. All rights reserved | Design by <a href="http://w3layouts.com/">.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- here stars scrolling icon -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/global.js"></script>
	<script src="js/enquiry.js"></script>
</body>

</html>