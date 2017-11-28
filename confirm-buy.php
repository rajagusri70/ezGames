<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Games Zone A Games Category Flat Bootstrap responsive Website Template | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<?php
	$url = 'http://store.steampowered.com/api/featuredcategories/&cc=ID';
	$data = file_get_contents($url);
	$content = json_decode($data, true);
?>
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
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
			</div>
			<div class="agileits_breadcrumbs_right">
				<h3>[Game Name]</h3>
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
						<img src="images/s1.jpg" alt=" " class="img-responsive" />
					</div>
					<h3>You will pay : Rp. 100.000,-</h3>
					<h4>Fill these form to continue :</h4></br>
				</div>
				<div class="agileits_share">
					
				</div>
				
				<div class="agileits_reply">
					
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="NIM" required="">
						<select>
							<option>Sistem Informasi</option>
							<option>Teknik Industri</option>
							<option>Teknik Informatika</option>
							<option>Teknik Elektro</option>
							<option>Teknik Telekomunikasi</option>
						</select>
						
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			<div class="col-md-5 wthree_blog_right">
				
				<div class="w3l_categories">
					
				</div>
				
				<div class="w3l_archives">
					
				</div>
				<div class="w3agile_flickr_posts">
					<h3>In-gameScreeshots</h3>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng1.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng4.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng5.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/ng6.jpg" alt=" " class="img-responsive" /></a>
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