<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// Include FB config file && User class
include('userLogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="google-signin-client_id" content="219859760657-gjncl9e3ul0j4spcu989fn4gmu8bgbte.apps.googleusercontent.com.apps.googleusercontent.com">
<title>EasyGames Shop SI3803 | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<script src="jquery.min.js"></script>
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
  .profile{
    border: 3px solid #B7B7B7;
    padding: 10px;
    margin-top: 10px;
    width: 350px;
    background-color: #F7F7F7;
    height: 160px;
}
.profile p{margin: 0px 0px 10px 0px;}
.head{margin-bottom: 10px;}
.head a{float: right;}
.profile img{width: 100px;float: left;margin: 0px 10px 10px 0px;}
.proDetails{float: left;}
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
					<a  href="index.php"><img src="images/logo.png" style="width:170px;height:60px"/> </a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="index.php">Home</a></li>
						<li class="hover-effect"><a href="about.php">About</a></li>
						<li class="hover-effect"><a href="games.php">Games</a></li>
						<li class="hover-effect"><a href="news.php">News</a></li>
						<li class="hover-effect"><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#login-pop">  <?php print $x; ?></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- //Navbar -->

		<!-- pop up new games -->
				<div class="pop-up">
					<div id="login-pop" class="mfp-hide book-form">
						<div class="pop-up-content-agileits-w3layouts">
							<div class="col-md-12 w3ls-right">
								<h4>Login</h4>
                   <?php echo $output; ?><br>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!-- //new games-->

		<!-- pop up new games -->

		<!-- //new games-->

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
						<a><h4><?php print $content['top_sellers']['items'][0]['name'] ?></h4>
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
	</div>
</div>
<!-- //trend -->


<!-- services-->
<div class="services-agileits-w3layouts">
	<div class="container">

		<?php
						error_reporting(0);
						$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
						date_default_timezone_set($get['timezone']);

						$city = $_GET['q'];
						if (isset($city)){

						}else{
							$city = 'Bandung';
						}

						 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=72f74e9012ef870f4d380e9866384c63";
						 $data = json_decode(file_get_contents($string),true);

						 $temp = $data['main']['temp'];

						 $icon = $data['weather'][0]['icon'];
						 $visibility = $data['visibility'];
						 $visibilitykm = $visibility / 1000;
						 $country =  "<center><h3>".$data['name'].",".$data['sys']['country']."</h3></center>";
						 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'"."style='width:50px;height:50px'></center>";
						 $desc = "<h4 class='post-meta'>".$data['weather'][0]['description']."</h4>";

						 $temperature =  "<center><p class='post-meta'>".$temp."°C<br>";
						 $clouds = $data['clouds']['all']."%<br>";
						 $humidity = $data['main']['humidity']."%<br>";
						 $windspeed = $data['wind']['speed']."m/s<br>";
						 $pressure = $data['main']['pressure']."hpa<br>";
						 $visibility = $visibilitykm."Km<br>";
						 $sunrise = date('h:i A', $data['sys']['sunrise'])."<br>";
						 $sunset = date('h:i A', $data['sys']['sunset'])."</p></center>";


						?>
<div class="col-md-6 service-grid-agileits service-grid-agileits-top">
              <?php
                  echo $country;
                  echo $logo;
                  echo "<center><h2>".$desc."</h1></center>";
              ?>
						</div>
							<div class="col-md-6 service-grid-agileits service-grid-agileits-top">
							<h3>Weather</h3>
								<h4>Update Cuaca Terkini</h4>
					            <form class="form-group" method="GET" action="index.php">
					                <div class="form-group">
					                  <input type="text" class="form-control" id="place" name="q" placeholder="Masukkan Kota dan Negara">
					                </div>
					                <center>
					                  <button type="submit" class="btn btn-primary" name="submit">Search</button>
					                </center>
					              </form>
							</div>
				</div>
				<hr>
		<div class="container">
			<div class="col-md-2 service-grid-agileits service-grid-agileits-top">
				<h4>Temperature</h4>
				<h5> <?php echo $temperature; ?></h5>
			</div>
			<div class="col-md-2 service-grid-agileits">
				<h4>Clouds</h4>
				<h5><?php echo $clouds; ?></h5>
			</div>
			<div class="col-md-2 service-grid-agileits service-grid-agileits-bottom">
				<h4>Windspeed</h4>
				<h5><?php echo $windspeed; ?></h5>
			</div>
			<div class="col-md-2 service-grid-agileits service-grid-agileits-bottom">
				<h4>Pressure</h4>
				<h5><?php echo $pressure; ?></h5>
			</div>
			<div class="col-md-2 service-grid-agileits service-grid-agileits-bottom">
				<h4>Sunrise</h4>
				<h5>  <?php echo $sunrise; ?></h5>
			</div>
			<div class="col-md-2 service-grid-agileits service-grid-agileits-bottom">
				<h4>Sunset</h4>
				<h5>  <?php echo $sunset; ?></h5>
			</div>
		</div>

	</div>
</div>
<!-- //services-->

<!-- new games -->
<div class="new-w3-agile">
	<div class="container">
		<h3>New Release</h3>
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
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][2]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog3"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src=<?php print $content['new_releases']['items'][3]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog4"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][4]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog5"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][5]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog6"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][6]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog7"><h4>Click here</h4></a>
			</div>
		</div>
		<div class="col-md-3 new-grid-agile view view-eighth">
			<img src=<?php print $content['new_releases']['items'][7]['large_capsule_image'] ?> alt=" " />
			<div class="mask">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog8"><h4>Click here</h4></a>
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
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][0]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][0]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][0]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog2" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][1]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][1]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][1]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][1]['id']]['data']['short_description'] ?></p>
						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][1]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog3" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][2]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][2]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][2]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][2]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][2]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog4" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][3]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][3]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][3]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][3]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][3]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog5" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][4]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][4]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][4]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][4]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][4]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog6" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][5]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][5]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][5]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][5]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][5]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog7" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][6]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][6]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][6]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][6]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][6]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="pop-up">
			<div id="small-dialog8" class="mfp-hide book-form">
				<div class="pop-up-content-agileits-w3layouts">
					<div class="col-md-6 w3ls-left">
						<img src=<?php print $content['new_releases']['items'][7]['large_capsule_image'] ?> alt=" " class="img-responsive zoom-img" />
					</div>
					<div class="col-md-6 w3ls-right">
						<h4><?php print $content['new_releases']['items'][7]['name'] ?></h4>
						<?php
						$url = 'http://store.steampowered.com/api/appdetails?appids='.$content['new_releases']['items'][7]['id'];
					    $datas = file_get_contents($url);
					    $contents = json_decode($datas, true);
						?>
						<p><?php print $contents[$content['new_releases']['items'][7]['id']]['data']['short_description'] ?></p>

						<div class="span span1">
							<p class="left">Category</p>
							<p class="right">: <?php print $contents[$content['new_releases']['items'][7]['id']]['data']['type'] ?></p>
							<div class="clearfix"></div>
						</div>
						<a href="#" >See More Description and Buy</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!-- //pop up new games -->
<!-- //new games-->



<div class="services-bottom-w3-agileits">
	<?php

    $url = 'https://newsapi.org/v2/top-headlines?sources=ign&apiKey=997cb584096947b88a99ef3c399fbd20';
    $data = file_get_contents($url);
    $content = json_decode($data, true);

	?>
		<div class="container">
			<div class="wthree_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_info_grid">
									<h3><?php print $content['articles'][0]['title'] ?></h3>
									<p><?php print $content['articles'][0]['description'] ?></p>
									<a href=<?php print $content['articles'][0]['url'] ?> class="learn">Learn More</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3><?php print $content['articles'][1]['title'] ?></h3>
									<p><?php print $content['articles'][1]['description'] ?></p>
									<a href=<?php print $content['articles'][1]['url'] ?> class="learn">Learn More</a>
								</div>
							</li>
							<li>
								<div class="wthree_info_grid">
									<h3><?php print $content['articles'][2]['title'] ?></h3>
									<p><?php print $content['articles'][2]['description'] ?></p>
									<a href=<?php print $content['articles'][2]['url'] ?> class="learn">Learn More</a>
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
				<li><a href="mailto:contact@easygames.com"><h6>contact@easygames.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+6282279552</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>Telkom University,Bandung</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(022)6544 5453 644</h6></li>
			</ul>
		</div>
		<div class="col-md-5 footer-middle-w3">
			<h4>Latest Games</h4>
			<div class="col-md-3 img-w3-agile">
				<a href=""><img src="images/ng1.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href=""><img src="images/ng2.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href=""><img src="images/ng3.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href=""><img src="images/ng4.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href=""><img src="images/ng5.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href=""><img src="images/ng6.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href=""><img src="images/ng7.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href=""><img src="images/ng8.jpg" alt=" " /></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 footer-right-w3">
			<a  href="index.php"><img src="images/logowarna1.png" style="width:170px;height:60px"/> </a>
			<p>EasyGames Shop adalah salah satu layanan jual-beli content digital. EasyGames Shop menyediakan semua kebutuhan akses content digital anda</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>&copy; 2017 Easy Games. All Rights Reserved | Design by EasyGames Team </a></p>
		</div>
	</div>
</div>
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
<!-- //footer -->
<!-- //footer -->
</body>
</html>
