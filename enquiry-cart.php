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
	<title>Enquiry Cart : Kingdom Lubricants</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- FB OG -->
<meta property="og:title" content="Enquiry Cart : Kingdom Lubricants" />
<meta property="og:url" content="https://kingdomlubricants.com" />
<meta property="og:site_name" content="Kingdom Lubricants" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Kingdom Lubricants Lubricants Factory LLC , an ISO 9001:2008 Certified Industrial Oils, Lubricants and Greases manufacturer.
Since our establishment in 1990, we have been commited to provide customised lubrication solutions to many industries and
clients.We, at Kingdom Lubricants, GUARANTEE smooth and prompt delivery of our products in every part of the globe because
of our concentration in one activity of Lubricants manufacturing.We manufacture speciality lubricants across several domains
such as aviation, automobile, paper mills, printing press, power plants, cement and construction, tyre manufacturing and
general manufacturing industries. synthetic oils, semi-synthetic oils and greases, high performance industrial lubricants
and graphite based lubricants are our key area of excellence." />
<meta property="og:image" content="https://kingdomlubricants.com/images/fb_og_banner.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Kingdom Lubricants Lubricants Factory LLC , an ISO 9001:2008 Certified Industrial Oils, Lubricants and Greases manufacturer.
Since our establishment in 1990, we have been commited to provide customised lubrication solutions to many industries and
clients.We, at Kingdom Lubricants, GUARANTEE smooth and prompt delivery of our products in every part of the globe because
of our concentration in one activity of Lubricants manufacturing.We manufacture speciality lubricants across several domains
such as aviation, automobile, paper mills, printing press, power plants, cement and construction, tyre manufacturing and
general manufacturing industries. synthetic oils, semi-synthetic oils and greases, high performance industrial lubricants
and graphite based lubricants are our key area of excellence." />
<meta name="twitter:title" content="Enquiry Cart : Kingdom Lubricants" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="Kingdom Lubricants Lubricants Factory LLC , an ISO 9001:2008 Certified Industrial Oils, Lubricants and Greases manufacturer. Since our establishment in 1990, we have been commited to provide customised lubrication solutions to many industries and clients.We, at Kingdom Lubricants, GUARANTEE smooth and prompt delivery of our products in every part of the globe because of our concentration in one activity of Lubricants manufacturing.We manufacture speciality lubricants across several domains such as  aviation, automobile, paper mills, printing press, power plants, cement and construction, tyre manufacturing and general manufacturing industries. synthetic oils, semi-synthetic oils and greases, high performance industrial lubricants and graphite based lubricants are our key area of excellence."/>
	<meta name="keywords" content="Lubricants, UAE, Dubai, Lubricants in UAE, Lubricants in Dubai, Lubricants Manufacturers, Grease, Industrial Oil, Marine Oil, Petroleum Products, Motor Oil, Gear Oil, Brake Fluid, Base Oil, Additives, Marine Lubricants, CNG, Diesel Engine Oil, Hydraulic Oil, Specialty Products, Automatic Transmission Oil, Lubricants Additives, Lubricants, 20W50, 15W40, Engine Oil, Cleaner, Lubrication, Protectant, CLP, Lubricant, fuel and lubricant dispensing products, Drum Equipment, Filtration, Flowmeters, Powered Pumps, silicone lubricants, treadmill oil , plumbers grease, pipe fitting, silicone grease sachets, hydraulic oil, metal cutting fluids, gear oils, motor oils, bradford, Industrial Maintenance Products, Automotive Lubricants, Spill Control, Specialized Lubrication Services, green, natural, bioil, harnett, waringstown, clean, cost effective, low temperatures, no mess, environmentaly friendly, will harnett, mike harnett, jane harnett, waring estate,crops, mould release oil, chainsaw oils, high speed, local, northern ireland, Bioil, pure, alternative, virgin oil, Oils, Industrial Oils, Synthetic Oils, Gearbox, Semi-Synthetic Oils, Heavy duty lubricants">

	<meta name="Competitor" content="Kluber, OKS, Bechem, Rocol, Molypaul, Lubcon, Stanvac, Molygraph, Lubegraph, Tribo, Molykote, Jetlube, Pulsco, Kyodo Yushi, Lubrication Engineers,LE, AGIP, Anderol, AVIA Bentelon, Castrol, Brugarolas, Castrol, Mobil, Shell, Caltex, BP, Exxon, LPS, CRC, Demag, Lubriplate, Omega, Corium, Optimol, Tribol, Selco, Superlube, Zetalube, SKF, FAG, THC, Wurth, Force, Dana, Enoc, Lubrex FZC, Lubrex , Oscar Lubricants, Danagroups, Crystal Lubricants.">

	<meta name="Industry" content="Oil Exploration, Lubricants Supplier, Lubricants Manufacturer, Steel, Cement, Textile, Spinning, Weaving, Finishing, Processing, Auto Assembly, Auto Component, Biscuit and Confectionary, Pharma, Beverages, SPM, Engineering, Forging, Diecasting, Paper Manufacturing, Infrastructure Equipments, Ceramic, Plastic Moulding, Power Plant, Gas Power, Wind Power, Thermal Power Plant, Tyre Industry, Rubber Processing."/>

	<meta name ="Application" content="Raw Mill, Draw Frame, Speed Frame, Merceriser, VDR, VDU, Stenter, Gear Box, Bearings, O - Rings, High Speed Bearings, Heavy Load, Humidity, Control Cable, Yaw Bearing, Moulds, Cleaner.">

	<meta name="Product Chemistry" content="Moly, Silicone, Ester, Diester, Polyol Ester, PAO, SHC, Olefins, Synthetic Hydrocarbon, Polyglycol, Mineral, Teflon, Boron, Graphite, Lithium, Lithium Complex, Calcium, Calcium Complex, Aluminium Complex, Bentone, Polyurea, Lithium Calcium, Calcium Sulfonate Complex, Mixed Soap." />

	<meta name="Certification" content="SAE, ACEA, API, ISO and NLGI, OEM(Volvo)">

	<meta http-equiv="Revisit-After" content="7 days">

	<meta name="Geographical" content="UAE, Dubai, Ajman, India, Kolkata, Canada, Calgary, Toronto, Central America, Asia, South Asia, Central America, el salvador, Curacao, Caribbean, Colombia, South America, Middle East, Nigeria">

	<meta name="Language" content="en-gb">

	<meta name="url-identifier" content="http://kingdomlubricants.com/enquiry-cart.php">

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
<div class="page-load">
	<img src="images/loader.gif" alt="Loading Kingdom Lubricants">
</div>
	<script>
		var json = <?php echo json_encode($tmpObj); ?>;
	</script>
	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="agile-header">
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:sales@kingdomlubricants.com">sales@kingdomlubricants.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+971 50 762 8077</li>
					</ul>
				</div>
				<div class="w3_agileits_social_media">
					<ul>
						<li class="agileinfo_share">
							<form class="form-inline" method="get" action="search.php">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
									<input type="text" name="q" placeholder="Search" class="form-control">

								</div>
								<input type="hidden" name="p" value="enquiry-cart.php">
							</form>
						</li>
						<li class="agileinfo_share">Share On</li>
						<li><a title="Facebook" target="_blank" href="https://www.facebook.com/kingdomlubricantsllc/" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a title="Twitter" target="_blank" href="https://twitter.com/kingdomlubes" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/kingdom-lubricants-2326b2142/" class="wthree_dribbble"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

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
					<h1><a class="navbar-brand" href="index.html">
						<img src="images/logo.png" width="200" alt="Kingdom" class="visible-lg visible-md">
							<h1 class="text-center visible-xs visible-sm">Kingdom</h1>
						</a></h1>
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
							<li class="menu__item"><a href="enquiry-cart.php" class="menu__link">Enquiry Cart</a></li>

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
					<h3>Our Products</h3>
					<ul>
						<li><a href="automotive-lubricants.php">Automotive Lubricants</a></li>
						<li><a href="industrial-lubricants.php">Industrial Lubricants</a></li>
						<li><a href="Grease-lubricants.php">Grease</a></li>
						<li><a href="base-oil.php">Base Oil</a></li>
						<li><a href="speciality-lubricants.php">Speciality</a></li>
						<li><a href="bitumen-lubricants.php">Bitumen</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-wthree">
					<h3>Office Location</h3>
					<ul>
						<li>UAE - Sharjah</li>
						<li>Canada - Calgary,Alberta</li>
						<li>India - Kolkata</li>
						<li>Central America - El Salvador</li>
						<li>South America - Colombia</li>
						<li>Caribbean - Curacao</li>
					</ul>
				</div>
				<div class="col-md-3 footer-agileits-w3layouts">
					<h3>Our Links</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="enquiry-cart.php">Enquiry Cart</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-w3-agileits">
					<h3>Select Language</h3>
					<ul>
						<li>
							<div id="google_translate_element"></div>
							<script>
								function googleTranslateElementInit() {
									new google.translate.TranslateElement({
										pageLanguage: 'en',
										includedLanguages: 'ar,zh-CN,fr,de,ja,ko,pl,ru,es,bn,en'
									}, 'google_translate_element');
								}
							</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-w3-agile">
				<div class="col-md-6 w3l-footer-top">
					<!--<h3>Newsletter</h3>
                    <form action="#" method="post" class="newsletter">
                        <input class="email" type="email" placeholder="Your email..." required="">
                        <input type="submit" class="submit" value="">
                    </form>-->
					<div class="footer-agile margin-top-none">
						<div class="col-md-6 footer-w3-1">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p> Saj'aa Industrial Area,</p>
							<p> P.O.Box: 43977 Sharjah, UAE.</p>
						</div>
						<div class="col-md-6 footer-w3l-1">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							<p> +971 50 762 8077.</p>
							<!--<p> +080 264345 996.</p>-->
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 w3ls-social-icons">
					<!--<h3>Follow Us</h3>-->
					<a target="_blank" title="Facebook" class="facebook" href="https://www.facebook.com/kingdomlubricantsllc/"><i class="fa fa-facebook"></i></a>
					<a target="_blank" title="Twitter" class="twitter" href="https://twitter.com/kingdomlubes"><i class="fa fa-twitter"></i></a>
					<a target="_blank" title="Google+" class="google" href="https://plus.google.com/112710682635027108452"><i class="fa fa-google-plus"></i></a>
					<a target="_blank" title="LinkedIn" class="linkedin" href="https://www.linkedin.com/in/kingdom-lubricants-2326b2142/"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="copy-right-agile">
				<p>&copy; <script>
						document.write(((new Date()).getFullYear()).toString());
					</script> Kingdom Lubricants. All rights reserved | Developed by <a href="http://aztechcorps.com/">AztechCorps</a></p>
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