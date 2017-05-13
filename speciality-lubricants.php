<?php
require '/php/conn.php';
require '/php/functions.php';

$category = "Speciality";

$j = null;
$l = null;

$sql = "select * from tblProducts where ProductCategory = '$category' order by ProductName";

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
    <title>Speciality</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <meta name="url-identifier" content="http://kingdomlubricants.com/speciality-lubricants.php">


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
var json = <?php echo json_encode($j); ?>
</script>
<!--<input type="hidden" id="productData" value='<?php //echo json_encode($j); ?>'>-->

<div class="modal fade" tabindex="-1" role="dialog" id="productModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group pull-right">
                    <a class="btn btn-default" id="productModalTDS">
                        <span class="glyphicon glyphicon-download-alt"></span> TDS</a>
                    <a class="btn btn-default" id="productModalMSDS">
                        <span class="glyphicon glyphicon-download-alt"></span> MSDS</a>
                    <a class="btn btn-danger" id="productModalEnquiry" title="Add this product to enquiry">
                        <span class="glyphicon glyphicon-plus"></span> Add to Enquiry
                    </a>
                </div>
                <h4 class="modal-title" id="productModalTitle">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="modalImageWrapper">
                            <img src="" alt="Speciality" id="productModalImage">
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
                            <input type="hidden" name="p" value="speciality-lubricants.php">
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
<!-- portfolio -->
<div class="portfolio">
    <div class="container">
        <h2 class="w3ls_head">Speciality</h2>
        <p class="w3layouts_para">Fusce quis leo in augue ultricies tincidunt a quis mi. Donec at massa nec sem eleifend fermentum.</p>
        <div class="portfolio-agile">

            <ul class="nav nav-tabs nav-justified" role="tablist" id="products-tabs">
                <li role="presentation" class="active"><a href="#Car Care" aria-controls="home" role="tab" data-toggle="tab">Car Care</a></li>
                <li role="presentation"><a href="#marine" aria-controls="marine" role="tab" data-toggle="tab">Marine</a></li>
                <li role="presentation"><a href="#turbine" aria-controls="turbine" role="tab" data-toggle="tab">Turbine</a></li>

            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Car Care">

                    <div class="main">
                        <?php
                        for($i = 0; $i < count($l); $i++){
                            if($l[$i]['ProductSubCategory'] == "Car Care"){
                                echo '<div class="col-sm-3 col-xs-12 text-center">';
                                echo '<div class="view view-seventh">';
                                echo '<a data-name="'. $l[$i]['ProductName'] .'" data-subcategory="'. $l[$i]['ProductSubCategory'] .'" href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">';
                                echo '<img src="' . $l[$i]['ProductImage'] . '" />';
                                echo '<div class="mask">';
                                echo '<h2>' . $category . '</h2>';
                                echo '<p>' . $l[$i]['ProductDescriptionShort'] . '</p>';
                                echo '</div>';
                                echo '</a>
						</div>';
                                echo '<p class="text-center">' . $l[$i]['ProductName'] . '</p>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                    <div class="clearfix"></div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="marine">

                    <div class="main">
                        <?php
                        for($i = 0; $i < count($l); $i++){
                            if($l[$i]['ProductSubCategory'] == "Marine"){
                                echo '<div class="col-sm-3">';
                                echo '<div class="view view-seventh">';
                                echo '<a data-name="'. $l[$i]['ProductName'] .'" data-subcategory="'. $l[$i]['ProductSubCategory'] .'" href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">';
                                echo '<img src="' . $l[$i]['ProductImage'] . '" />';
                                echo '<div class="mask">';
                                echo '<h2>' . $category . '</h2>';
                                echo '<p>' . $l[$i]['ProductDescriptionShort'] . '</p>';
                                echo '</div>';
                                echo '</a>
						</div>';
                                echo '<p class="text-center">' . $l[$i]['ProductName'] . '</p>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                    <div class="clearfix"></div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="turbine">

                    <div class="main">
                        <?php
                        for($i = 0; $i < count($l); $i++){
                            if($l[$i]['ProductSubCategory'] == "Turbine"){
                                echo '<div class="col-sm-3">';
                                echo '<div class="view view-seventh">';
                                echo '<a data-name="'. $l[$i]['ProductName'] .'" data-subcategory="'. $l[$i]['ProductSubCategory'] .'" href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">';
                                echo '<img src="' . $l[$i]['ProductImage'] . '" />';
                                echo '<div class="mask">';
                                echo '<h2>' . $category . '</h2>';
                                echo '<p>' . $l[$i]['ProductDescriptionShort'] . '</p>';
                                echo '</div>';
                                echo '</a>
						</div>';
                                echo '<p class="text-center">' . $l[$i]['ProductName'] . '</p>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                    <div class="clearfix"></div>

                </div>

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

        //var json = JSON.parse($('#productData').val());

        json.data.forEach(function(el) {
            if(el.ProductName == name && el.ProductSubCategory == subcategory){
                $("#productModalTDS").attr('href', el.ProductTDSLink);
                $("#productModalMSDS").attr('href', el.ProductMSDSLink);

                var link = "enquiry-cart.php?product="+el.ProductName+"&q=0&p=0&c=Speciality&sc="+subcategory;

                $("#productModalEnquiry").attr('href', link);

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
<script src="js/global.js"></script>
</body>

</html>