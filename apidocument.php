<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('userLogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>EasyGames Shop SI3803 | API</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/grid-view.css" rel="stylesheet" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<?php

    $url = 'http://localhost/ezGames/API_gameTerlaku.php';
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
						<li class="hover-effect"><a href="about.php">About</a></li>
						<li class="hover-effect"><a href="games.php">Games</a></li>
						<li class="hover-effect"><a href="news.php">News</a></li>
            <li class="hover-effect active"><a href="apidocument.php">API</a></li>
            <li class="hover-effect"><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#login-pop">  <?php echo $x; ?></a></li>
          </ul>
        </div>

    </div>
    </nav>
  </div>
          <!-- banner -->
          <!-- pop up new games -->
  <div class="pop-up">
      <div id="login-pop" class="mfp-hide book-form">
          <div class="pop-up-content-agileits-w3layouts">
          <div class="col-md-12 w3ls-right">
            <h4>Login</h4>
               <?php echo $output; ?>
          </div>
          <div class="clearfix"></div>
          </div>
      </div>
  </div>

<div class="events-w3layouts">
	<h2>Api Documentation</h2>
	<div class="clearfix"></div>
</div>

<div class="events-section2-agileinfo">
<div class="container">
	<div class="blog1-w3ls">
		<div class="col-md-8 blog-text-w3ls">
			<h4>API Documentation</h4>
			<b><p>API untuk mengetahui game terlaku oleh mahasiswa Telkom University</p></b>
      <h5>GET : http ://localhost/ezGames/API_gameTerlaku.php</h5><br>
      <b><p>API untuk mengetahui siapa saja yang membeli game</p></b>
      <h5>GET : http: //localhost/ezGames/API_dataUser.php</h5>
    </div>
  </div>
</div>
</div>
  <div class="events-w3layouts">
  	<h2>Hasil API Game Terlaku</h2>
  </div>
  <div class="events-section2-agileinfo">
  <div class="container">
    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src=<?php print $content['item'][0]['img'] ?> alt="" />
                <div class="caption">
                    <h4 style="font-size: 1vw" class="group inner list-group-item-heading">
                        <?php print $content['item'][0]['name'] ?></h4>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                               Pembeli : <?php print $content['item'][0]['jumlah']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src=<?php print $content['item'][1]['img'] ?> alt="" />
                <div class="caption">
                    <h4 style="font-size: 1vw" class="group inner list-group-item-heading">
                        <?php print $content['item'][1]['name'] ?></h4>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                               Pembeli : <?php print $content['item'][1]['jumlah']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src=<?php print $content['item'][2]['img'] ?> alt="" />
                <div class="caption">
                    <h4 style="font-size: 1vw" class="group inner list-group-item-heading">
                        <?php print $content['item'][2]['name'] ?></h4>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                               Pembeli : <?php print $content['item'][2]['jumlah']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
			<p>EasyGames Shop adalah salah satu layanan jual-beli content digital. EasyGame hop menyediakan semua kebutuhan akses content digital anda</p>
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
