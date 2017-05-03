<?php
require '/php/conn.php';
require '/php/functions.php';

if(isset($_GET['q']) && isset($_GET['p'])){
	$page = $_GET['p'];
	$name = $_GET['q'];
} else {
	header("location: index.html");
}

$j = null;
$l = null;

$sql = "select * from tblProducts where ProductName like '%$name%' order by ProductName";

$r = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($r)){
	$l[] = $row;
}

$j['data'] = $l;

utf8_encode_deep($j);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Executive a Corporate Business Category Flat Bootstrap Responsive Website Template | Portfolio :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Executive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-script -->
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
	<!-- //pop-up-script -->
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
</head>

<body>
	<script>
	var json_str = <?php echo json_encode($j); ?>;
	</script>

<div class="modal fade" tabindex="-1" role="dialog" id="productModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="btn-group pull-right">
  			<a class="btn btn-default" id="productModalTDS">
				  <span class="glyphicon glyphicon-download-alt"></span> TDS</a>
  			<a class="btn btn-default" id="productModalMSDS">
				  <span class="glyphicon glyphicon-download-alt"></span> MSDS</a>
  			<button type="button" class="btn btn-danger" id="productModalEnquiry">
				  <span class="glyphicon glyphicon-plus"></span> Add to Enquiry
			</button>
		</div>
        <h4 class="modal-title" id="productModalTitle">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-sm-12">
				<div class="modalImageWrapper">
					<img src="" alt="Automotive Lubricant" id="productModalImage">
				</div>
			</div>
			<div class="col-sm-12 text-wrapper">
				<p id="productModalText"></p>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
	<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h2 class="w3ls_head">Search for: "<?php echo $name; ?>"</h2>
			<p class="text-center"><a class="btn btn-default" href="<?php echo $page; ?>" title="Go back" target="_self">
			<span class="glyphicon glyphicon-chevron-left"></span> Go back</a></p>
			<div class="portfolio-agile">
				
				<div class="main">
				<?php
				for($i = 0; $i < count($l); $i++){
					
						echo '<div class="col-sm-3">';
						echo '<div class="view view-seventh">';
							echo '<a data-name="'. $l[$i]['ProductName'] .'" data-subcategory="'. $l[$i]['ProductSubCategory'] .'" href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">';
								echo '<img src="' . $l[$i]['ProductImage'] . '" />';
								echo '<div class="mask">';
									echo '<h2>' . $l[$i]['ProductCategory'] . '</h2>';
									echo '<p>' . $l[$i]['ProductDescriptionShort'] . '</p>';
								echo '</div>';
							echo '</a>
						</div>';
						echo '<p class="text-center">' . $l[$i]['ProductCategory'] . " | " . $l[$i]['ProductName'] . '</p>';
					echo '</div>';
				}
					?>

				</div>
				<div class="clearfix"></div>
  			</div>
				

			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- pop-up-script -->
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript" charset="utf-8">
		/*$(function () {
			$('.view-seventh a').Chocolat();
		});*/
	</script>
	<!-- //pop-up-script -->

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

	<script>
	$(".view a").on('click', function(e){
		e.preventDefault();

		var name = $(this).data('name');
		var subcategory = $(this).data('subcategory');
		

		var json = json_str;
		
		json.data.forEach(function(el) {
			if(el.ProductName == name && el.ProductSubCategory == subcategory){
				$("#productModalTDS").attr('href', el.ProductTDSLink);
				$("#productModalMSDS").attr('href', el.ProductMSDSLink);

				$("#productModalTitle").html(el.ProductName);
				$("#productModalImage").attr('src', el.ProductImage);
				$("#productModalText").html(el.ProductDescriptionLong);

				$("#productModal").modal();
				return false;
			}
		}, this);
	})
	</script>

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
</body>

</html>