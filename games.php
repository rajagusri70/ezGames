<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>EasyGames Shop SI3803 | Games</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/grid-view.css" rel="stylesheet" type="text/css" media="all" />
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

<!-- gallery -->

<!-- Script for list product-->
		    <script type="text/javascript">
		    	$(document).ready(function() {
	    			$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
	    			$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
				});
		    </script>

		    <?php 
			$url = 'http://store.steampowered.com/api/featuredcategories/&cc=ID';
			$data = file_get_contents($url);
			$content = json_decode($data, true);
			?>

<div class="gallery-w3layouts" id="gallery">
	<div class="container">
		<h2>Top Seller Games</h2>
		<div class="container">
		    <div class="well well-sm">
		        <strong>Display</strong>
		        <div class="btn-group">
		            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
		            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
		                class="glyphicon glyphicon-th"></span>Grid</a>
		        </div>
		    </div>
		    <div id="products" class="row list-group">
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][0]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 style="font-size: 1vw" class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][0]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][0]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][0]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][1]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][1]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][1]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][1]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][2]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][2]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][2]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][2]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		  		<div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][3]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][3]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][3]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][3]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][4]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][4]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][4]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][4]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][5]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][5]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][5]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][5]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][6]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][6]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][6]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][6]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][7]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][7]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][7]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][7]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][8]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][8]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][8]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][8]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['top_sellers']['items'][9]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['top_sellers']['items'][9]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['top_sellers']['items'][9]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['top_sellers']['items'][9]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		</br></br></br>
		<h2>Coming Soon Games and DLC's</h2>
		<div class="container">
		    <div class="well well-sm">
		        <strong>Display</strong>
		        <div class="btn-group">
		            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
		            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
		                class="glyphicon glyphicon-th"></span>Grid</a>
		        </div>
		    </div>

		    
		    <div id="products" class="row list-group">
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][0]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 style="font-size: 1vw" class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][0]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][0]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][0]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][1]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][1]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][1]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][1]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][2]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][2]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][2]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][2]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		  		<div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][3]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][3]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][3]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][3]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][4]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][4]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][4]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][4]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][5]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][5]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][5]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][5]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][6]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][6]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][6]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][6]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][7]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][7]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][7]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][7]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="item  col-xs-4 col-lg-4">
		            <div class="thumbnail">
		                <img class="group list-group-image" src=<?php print $content['coming_soon']['items'][8]['header_image'] ?> alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        <?php print $content['coming_soon']['items'][8]['name'] ?></h4>
		                    <p class="group inner list-group-item-text">
		                        </p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                               Rp. <?php echo substr ($content['coming_soon']['items'][8]['final_price'],0,-2); ?></p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <?php print "<a class='btn btn-success' href='item-details.php?appid=".$content['coming_soon']['items'][8]['id']."'' ?> More Info and Buy</a>"
		                            ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

			<!-- <div class="gallery-grids">
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">
						<img src="images/g1.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2">
						<img src="images/g2.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog3">
						<img src="images/g3.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog4">
						<img src="images/g5.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog5">
						<img src="images/g6.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog6">
						<img src="images/g7.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog7">
						<img src="images/g4.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog8">
						<img src="images/g8.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="clearfix"> </div>
			</div> -->
	</div>
	</div>
	<!--//gallery -->
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
<div class="pop-up">
	<div id="small-dialog" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g1.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-1</h4>
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
<div class="pop-up">
	<div id="small-dialog2" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g2big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-2</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vivamus</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Quentin</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="pop-up">
	<div id="small-dialog3" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g3big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-3</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Venenatis</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Stanley</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 1GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="pop-up">
	<div id="small-dialog4" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g5.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-4</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Interdum</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Spielberg</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="pop-up">
	<div id="small-dialog5" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g6.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-5</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Faucibus</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Cameron</p>
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
<div class="pop-up">
	<div id="small-dialog6" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g7big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-6</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Tincidunt</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Jackson</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 4GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="pop-up">
	<div id="small-dialog7" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g4big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-7</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vestibulum</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Daniel</p>
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
<div class="pop-up">
	<div id="small-dialog8" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g8.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-8</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vehicula ligula</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Cyrill</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
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
				<li><h6>Telkom University,Bndung</h6></li>
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
			<p>EasyGames Shop adalah salah satu layanan jual-beli content digital. EasyGames Shop menyediakan semua kebutuhan akses content digital anda</p>
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