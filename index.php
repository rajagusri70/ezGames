<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Games Zone A Games Category Flat Bootstrap responsive Website Template | Index :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<style>
	img#avatar {
		border-radius: 50%;
		display: block;
	  	max-width:120px;
	  	max-height:30px;
	  	width: auto;
	  	height: auto;
	  	float:left;
		margin-right: 10px;

	}
</style>
</head>
<body> 
<?php

    $url = 'http://store.steampowered.com/api/featuredcategories/';
    $data = file_get_contents($url);
    $content = json_decode($data, true);

    ?>
<!-- Header -->
	<div class="header">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  href="index.html"><h1>Games <img src="images/c1.png" alt=" " /> Zone</h1></a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="index.html">Home</a></li>
						<li class="hover-effect"><a href="about.html">About</a></li>
						<li class="hover-effect"><a href="games.html">Games</a></li>
						<li class="hover-effect"><a href="news.html">News</a></li>
						<li class="hover-effect"><a href="contact.html">Contact</a></li>
						<li class="hover-effect"><a href="news.html"><img src="images/avatar-1-1.png" id="avatar" alt="avatar" style=" " />Raja Gusri</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<li>
					<img src="images/banner3.jpg" alt="" />
				</li>
				<li>
					<img src="images/banner2.jpg" alt="" />
				</li>
				<li>
					<img src="images/banner1.jpg" alt="" />
				</li>
			</ul>
		</div>
		<!-- //Slider -->

	</div>
	<!-- Banner-Slider-JavaScript -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 800,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Banner-Slider-JavaScript -->
	<!-- //Header -->

<!-- trend -->
<div class="trend-w3layouts">
	<div class="container">
		<h2>Trending Games</h2>
		<ul id="flexiselDemo1">			
				<li>
					<div class="trend-grid">
						<a "><h4><?php print $content['top_sellers']['items'][0]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][0]['large_capsule_image'] ?> alt=" " class="img-responsive" /></a>
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4><?php print $content['top_sellers']['items'][1]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][1]['large_capsule_image'] ?> alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4><?php print $content['top_sellers']['items'][2]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][2]['large_capsule_image'] ?> alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4><?php print $content['top_sellers']['items'][3]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][3]['large_capsule_image'] ?> alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4><?php print $content['top_sellers']['items'][4]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][4]['large_capsule_image'] ?> alt=" " class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4><?php print $content['top_sellers']['items'][5]['name'] ?></h4>
						<img src=<?php print $content['top_sellers']['items'][5]['large_capsule_image'] ?> alt=" " class="img-responsive" />
					</div>
				</li>
			</ul>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
		<script>
								$(document).ready(function() {
								$('.popup-with-zoom-anim').magnificPopup({
									type: 'inline',
									fixedContentPos: false,
									fixedBgPos: true,
									overflowY: 'auto',
									closeBtnInside: true,
									preloader: false,
									midClick: true,
									removalDelay: 300,
									mainClass: 'my-mfp-zoom-in'
								});
																								
								});
		</script>
		
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 4
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //trend -->


<!-- services-->
<div class="services-agileits-w3layouts">
	<div class="container">
		<h3>Services</h3>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-top">
			<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
			<h4>Quis tortor</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="single.html">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits">
			<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
			<h4>Eget arcu</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="single.html">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
			<h4>Risus porta</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="single.html">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
			<h4>Proin sapien</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="single.html">Read More</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //services-->

<!-- new games -->
<div class="new-w3-agile">
	<div class="container">
		<h3>New Games</h3>
		<!-- <?php
		// for ($i=0; $i < 9; $i++) { 
		// 	print '<div class="col-md-3 new-grid-w3l view view-eighth">'
		// 	// print '<img src='.print $content['new_releases']['items'][i]['large_capsule_image'].' alt=" " />'
		// 	print '<div class="mask">'
		// 	print '<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><h4>Click here</h4></a>'
		// 	print '</div>'
		// 	print '</div>'
		//{
		?> -->
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][0]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][1]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][2]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][3]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][4]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][5]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][6]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][7]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a href="single.html"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- pop up new games -->
		<div class="pop-up"> 
			<div id="small-dialog" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][0]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][0]['name'] ?></h4>
						<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
						<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
						<div class="span span1">
							<p class="left">NAME</p>
							<p class="right">: Sed Perst</p>
							<div class="clearfix"></div>
						</div>
						<div class="span span2">
							<p class="left">DEVELOPER</p>
							<p class="right">: Martina</p>
							<div class="clearfix"></div>
						</div>
						<div class="span span3">
							<p class="left">REQUIRES</p>
							<p class="right">: 2GB Hard Disk Space</p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!-- //new games-->



<div class="services-bottom-w3-agileits">
		<div class="container">
			<div class="wthree_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_info_grid">
									<h3>Duis aute dolor reprehenderit</h3>
									<p>Excepteur sint occaecat cupidatat non proident, sunt officia.</p>
									<a href="single.html" class="learn">Learn More</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3>Aliquip commodo consequat</h3>
									<p>Curabitur lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="single.html" class="learn">Learn More</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3>Quis autem vel eum iure ea</h3>
									<p>Phasellus ornare consectetur erat, eu vehicula orci finibus at.</p>
									<a href="single.html" class="learn">Learn More</a>
								</div>
							</li>
						</ul>
					</div>
				</section>
						<!-- flexSlider -->
							
							<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
						<!-- //flexSlider -->
			</div>
		</div>
	</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left-w3">
			<h4>Contact</h4>
			<ul>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
				<li><a href="mailto:example@mail.com"><h6>ex@mail.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+18045678834</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>4th Avenue,London</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(0033)6544 5453 644</h6></li>
			</ul>
		</div>
		<div class="col-md-5 footer-middle-w3">
			<h4>Latest Games</h4>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="images/ng1.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="images/ng2.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="images/ng3.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.html"><img src="images/ng4.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="images/ng5.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="images/ng6.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="images/ng7.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.html"><img src="images/ng8.jpg" alt=" " /></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 footer-right-w3">
			<a href="index.html"><h4>Games <img src="images/f1.png" alt=" " /> Zone</h4></a>
			<p>Donec lobortis diam eu auctor porta. Phasellus in elementum tortor, sit amet imperdiet urna pellentesque non risus porta.</p>
			<p class="agileinfo">Suspendisse convallis malesuada libero, non rutrum arcu pellentesque lacinia.</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>&copy; 2017 Games Zone. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
		</div>
	</div>
</div>

<!-- //footer -->
</body>
</html>