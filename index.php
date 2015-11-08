<?php
	$test=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oranienbaum">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quicksand">
	<link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<script>
		new WOW().init();
	</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {  	
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(22.305924, 73.152825),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
	<style type="text/css">
		#carousalmain{
			padding: 3%;
			-webkit-animation: fadein 3s;
			animation: fadein 3s;
			background-color: #000000;
		}
		#mainc {
			padding: 30px;
			background-color: #000000;
		}
		h2 {
			font-family: "Josefin Sans";
			font-size: 45px;
			color: gray;
			font-style: bold;
		}
		p {
			font-family:"Oranienbaum";
			text-height: 50%;
			text-indent: 10%;
			font-size: 30px;
		}
		p::first-letter {
			font-size: 70px;
			color: Red;
		}
		img #main{
			height: 400px;
		}
		
		#contact {
			-webkit-animation: fadein 10s;
			animation: fadein 10s;
			background-color: #333300;
			color: #CCFFDD;
			padding: 2%;
			font-family: 'Quicksand';
			font-size: 20px;
		}
		h4 {
			font-weight: bold;
			font-family: "Oranienbaum";
			color: 25px;
			text-height= 40%;
			border: 0.5px;
		}
		#dev-by {
			height: 2%;
			color: #FFFFFF;
			background-color: #000000;
		}
		#map {
			-webkit-animation: fadein 10s;
			animation: fadein 10s;
			background-color: #FFFFDD;
			width: 500px;
			padding: 3%;
			height: 400px;
			float: right;
		}
		#google {
			font-family: Josefin Sans;
			font-size: 35px;
			padding-right:10%;
			color: gray;
			font-style: bold;
			text-align: right;
		}
		h6 {
			color: white;
		}
		div #map:hover {
			border: 2% solid red;
		}
		#home {
			padding: 3%;
		}
		#social {
			font-family: Josefin Sans;
			font-size: 40px;
			color: gray;
			font-style: bold;
			background-color: #FFCCFF;
		}
		#rss {
			float: left;
			padding: 5%;
		}
		</style>
		<title>Home | Balaji Physiotherapy</title>
</head>
<body>
	<div class="nav navbar-inverse" id="navbar">	
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="http://i752.photobucket.com/albums/xx163/mobile2/2432/religious/balaji/balaji07.jpg" width=50px height=50px>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"> Home</span> </a></li>
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"> About Us</span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-education"> Areas of Expertise</span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-phone"> Contact us</span></a></li>
				</ul>
			</div>
		</div>	
	</div>
	<div id="mainc">
		<div class="container-fluid" id="carousalmain">
			<div id="carousal" class="carousel slide carousel-fade" data-ride="carousel" interval="2000">
				<ol class="carousel-indicators">
					<li data-target="#carousal" data-slide-to="0" class="active"></li>
					<li data-target="#carousal" data-slide-to="1"></li>
					<li data-target="#carousal" data-slide-to="2"></li>
					<li data-target="#carousal" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<center><img src="images/pc3.jpg" class="img-thumbnail img-responsive" id="main" width=400px height=300px/>
						<div class="carousel-caption">
							<h3><i class="fa fa-check"></i>Always ready to serve.</h3>
							<h5>Counted among the best physiotherapists<br> in the city!</h5>
						</div></center>
					</div>
					<div class="item">
						<center><img src="images/pc4.jpg" class="img-thumbnail img-responsive" id="main" width=400px height=300px/>
						<div class="carousel-caption">
							<h3>I am your friend! <i class="fa fa-smile-o"></i></h3>
							<h5>Don't think of me as a professional, I am your friend, <br>trying to help you!</h5>
						</div></center>
					</div>
					<div class="item">
						<center><img src="images/pc5.jpg" class="img-thumbnail img-responsive" id="main" width=400px height=300px/>
						<div class="carousel-caption">
							<h3><i class="fa fa-check"></i>Our motto is to make you happy.</h3>
							<h5>With advanced equipments, <br>Physiotherapy just made better! <i class="fa fa-hand-peace-o"></i></h5>
						</div></center>
					</div>
					<div class="item">
						<center><img src="images/pc6.jpg" class="img-thumbnail img-responsive" id="main" width=400px height=300px/>
						<div class="carousel-caption">
							<h3><i class="fa fa-check"></i>State-of-the-art machinery.</h3>
							<h5>With advanced equipments, we provide you a whole<br> new level of Physiotherapy!</h5>
						</div></center>
					</div>
				</div>
				<a class="left carousel-control" href="#carousal" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousal" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>	
	</div>
	<div id="home" class="container-fluid">
		<div class="col-lg-12">
			<center><h2><a href="#"><img src="images/glyphicons_020_home@2x.png"></a></h2></center>
		</div>
		<div class="col-lg-7">
			<div class="wow bounceInLeft" data-wow-delay=1.0s>
				<p>Balaji Physiotherapy clinic started it journey in 2000, and since then, it has been counted amongst the top physiotherapy clinics in the city.<br><br><u> Dr. Maya Iyer,(<b> B. Physio from MSU, Vadodara</b>)</u> is a highly reputed physiotherapist in the city. With state-of-the-art technology and diagnostic equipments, we are more than happy to serve you. Want to bring yourself back to your original motion? Come visit us today!</p>
			</div>
		</div>	
		<div class="col-lg-5">
			<div class="wow bounceInRight" data-wow-delay=2s>
				<blockquote>
					<i><font face="Quicksand" color=red><i class="fa fa-quote-left"></i> Professional and humane combination, a rare find in the profession <i class="fa fa-quote-right"></i> - <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></font></i>
					<footer>Reji Matthews</footer>
				</blockquote>
				<br><br>
				<blockquote>
					<i><font face="Quicksand" color=red> <i class="fa fa-quote-left"></i> Excellent service,really friendly! Nice experience <i class="fa fa-quote-right"></i> - <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></font></i>
					<footer>Anonymous</footer>
				</blockquote>
				<br><br>
				<blockquote>
					<i><font face="Quicksand" color=red><i class="fa fa-quote-left"></i> Reasonable fee, quality service. Highly recommended. <i class="fa fa-quote-right"></i>- <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></font></i>
					<footer>Shreyas Iyer</footer>
				</blockquote>
			</div>
		</div>
	</div>
	<br><br><br>
	<div id="contact" class="container-fluid">
		<div class="wow fadeIn" data-wow-delay=2.5s>
			<center><h2>Any Queries <a href="#"><i class="fa fa-question"></i></a></h2></center>
			<div class="col-lg-5" id="contact">
				<h2>Contact Us <span class="glyphicon glyphicon-earphone"></span></h2>	
				<br>
					<i class="fa fa-building"></i> <u><b>Address:</b></u> GF-7 Samarth Complex,<br> Near Pratham Apartments, <br>Vasna Road, Gadapura,<br> Vadodara - 390007.<br><br>
					<span class="glyphicon glyphicon-phone"></span> <u><b>Phone (M):</b></u> (+91) 942 637 4434<br><br>
					<span class="glyphicon glyphicon-envelope"></span> <u><b>E-mail:</b></u> <a href="mailto:dr.mayaiyer@gmail.com">dr.mayaiyer@gmail.com</a><br><br>
			</div>
			<br>
			<div id="google"><h3>Find us on Google Maps <i class="fa fa-map"> </i></h3></div>
			<div id="map" class="col-lg-7">
			</div>
		</div>
	</div>
	<div class="wow bounceInLeft" data-wow-delay=3s>
		<div class="container-fluid" id="social">
			<center><h3>Stay Connected! Follow us on Facebook! <a href="#"><i class="fa fa-facebook-official"></i></a></h3></center>
		</div>
	</div>
	<div id="dev-by">
		<center><h5><font face="Josefin Sans"><i class="fa fa-copyright"></i> Balaji Physiotherapy Clinic 2015 | Designed by Shreyas Iyer</font></h5></center>
	</div>
</body>
</html>