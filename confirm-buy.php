<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include('userLogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy Game</title>
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
	$buyAppID = $_GET['steamAppID'];
	$url = 'http://store.steampowered.com/api/appdetails?cc=ID&appids='.$buyAppID;
	$data = file_get_contents($url);
	$content = json_decode($data, true);

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gameonline";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM users WHERE oauth_uid=".$_SESSION['userLogin']."";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	//output data of each row
     	while($row = mysqli_fetch_assoc($result)) {
         	//Do whatever you want here
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
						<li class="hover-effect"><a href="about.php">About</a></li>
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
				<h3><?php print $content[$buyAppID]['data']['name'] ?></h3>
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
						<img src=<?php print $content[$buyAppID]['data']['header_image'] ?>  alt=" " class="img-responsive" />
					</div>
					<h3>You will pay : Rp. <?php echo substr ($content[$buyAppID]['data']['price_overview']['final'],0,-2); ?></h3>
					<h4>Fill these form to continue :</h4></br>
				</div>
				<div class="agileits_share">

				</div>

				<div class="agileits_reply">

					<form action='buy-process.php?appID=<?php echo $buyAppID ?>&userID=<?php print $row["id"] ?>' method="post">
						<input type="text" name="name" placeholder="Name" required="" value='<?php print $row["first_name"]?> <?php print $row["last_name"]?>' readonly>
						<input type="email" name="email" placeholder="Email" required="" value=<?php print $row["email"] ?> readonly >
						<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="nim" placeholder="NIM" required="">
						<select name="jurusan" >
							<option>Sistem Informasi</option>
							<option>Teknik Industri</option>
							<option>Teknik Informatika</option>
							<option>Teknik Elektro</option>
							<option>Teknik Telekomunikasi</option>
						</select>

						<input type="submit" value="Submit">
						<?php
							}
	}else {

	}
						?>
					</form>
				</div>
			</div>
			<div class="col-md-5 wthree_blog_right">

				<div class="w3l_categories">

				</div>

				<div class="w3l_archives">

				</div>
				<div class="w3agile_flickr_posts">
					<h3>In-game Screeshots</h3>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][0]['path_full'] ?> /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][1]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][2]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][3]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][4]['path_full'] ?> alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href=""><img src=<?php print $content[$buyAppID]['data']['screenshots'][5]['path_full'] ?>
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
