<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Item Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/button.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body> 
<!-- banner -->
<div class="sub-banner">
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
					<a  href="index.php"><img src="images/logo.png" style="width:170px;height:60px"/> </a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="index.php">Home</a></li>
						<li class="hover-effect"><a href="about.html">About</a></li>
						<li class="hover-effect active"><a href="games.php">Games</a></li>
						<li class="hover-effect"><a href="news.php">News</a></li>
					</ul>
				</div>

			</div>
		</nav>
</div>
<!-- banner -->
<!-- breadcrumbs --> 
	<?php
	$steamAppID = $_GET['appid'];
	$url = 'http://store.steampowered.com/api/appdetails?appids='.$_GET['appid'];
    $data = file_get_contents($url);
    $content = json_decode($data, true);

	?>
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
			</div>
			<div class="agileits_breadcrumbs_right">
				<h3>Game Details and Buy</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="blog">
		<div class="container">
			<div class="col-md-7 wthree_blog_left">
				<div class="wthree_blog_left_grid">
					<div class="wthree_blog_left_grid_slider">
						<img src=<?php print $content[$steamAppID]['data']['header_image'] ?> alt=" " class="img-responsive" />
					</div>
					
					<h3><?php print $content[$steamAppID]['data']['name'] ?></h3>
					<ul>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#"><?php print $content[$steamAppID]['data']['developers'][0] ?></a><i>|</i></li>
						<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><a href="#"><?php print $content[$steamAppID]['data']['recommendations']['total'] ?></a><i>|</i></li>
						<li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5</a><i>|</i></li>
						<li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Voluptatibus</li>
					</ul>
					<p style="line-height: 20px"><?php print $content[$steamAppID]['data']['detailed_description'] ?>
					</p>
				</div>
			</br></br>
				<div class="agileits_share">
					<ul>
						<li><a class="linkedin" href="#"></a></li>
						<li><a class="google" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="facebook" href="#"></a></li>
					</ul>
				</div>
				
			</div>
			<div class="col-md-5 wthree_blog_right">
				<div class="w3ls_search" >
					<b><h2 style="padding-bottom: 10px;float: left">Rp. <?php echo substr ($content[$steamAppID]['data']['price_overview']['final'],0,-2); ?></h2></b>
					<a href="#" class="myButton" style="width: 100%; height: 100%; padding-top: 15px; padding-bottom : 15px; border-radius: 10px"><h3>Buy this Game</h3></a>
				</div>
				</br></br></br>
				<div class="w3agile_flickr_posts">
					<h3>In-game Screenshot</h3>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][0]['path_full'] ?> /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][1]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][2]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][3]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][4]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$steamAppID]['data']['screenshots'][5]['path_full'] ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->	

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left-w3">
			<h4>Contact</h4>
			<ul>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
				<li><a href="mailto:contact@easygames.com"><h6>contact@easygames.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+6282279552</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>Telkom University, Bandung</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(022)6544 5453 644</h6></li>
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
			<a  href="index.php"><img src="images/logowarna1.png" style="width:170px;height:60px"/> </a>
			<p>EasyGames Shop adalah salah satu layanan jual-beli content digital. EasyGame hop menyediakan semua kebutuhan akses content digital anda</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>&copy; 2017 Easy Games. All Rights Reserved | Design by EasyGames Team </a></p>
		</div>
	</div>
</div>
<!-- //footer -->
</body>
</html>