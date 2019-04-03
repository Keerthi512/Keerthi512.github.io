<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Home | Goshala</title>
		<link href="images/ico/favicon.ico" rel="shortcut icon" /> 
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="css/animate.min.css" rel="stylesheet" type="text/css" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
		<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />  
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />  
		<link href="css/gallery-1.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css" rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->   
	</head>
	
	<body id="home">
		<?php
			include('config.php');
		?>
		<div id="wrapper">
			<?php include 'header.php' ?>
			
			<div id="content-wrap">
				<section id="main-content">
					<div id="main-content-pattern">
						<div class="container">
							<h2>Welcome To Sri Tulasi Goshala</h2>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="images/sp-mandala.png" alt="" class="img-responsive" />
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<p>
										<strong>
											<em>"Our Goal is to serve Shri Shri Krishna Balaram Ji with the milk of life time protected cows in Vrindavan Dham"</em>
										</strong>
									</p>
									
									<h4>
										<span>In 1976, Srila Prabhupada began the Bhaktivedanta Swami Goshala at the Krishna Blalaram Mandir in Vrindavan. Ramana Reti, the land of soft pleasing sands, is famous as the place where Krishna and Balarama wandered along the banks of the Yamuna river with Their Cows.</span>
									</h4>
									
									<h4>
										<span>In this Goshala, we are trying to serve the noble cause of cow protection in a humble way; Cows, Bulls and Calves are looked after with great care and love. These animals are never sold to slaughter houses or abandoned even when they become old. They are maintained till the end of their lives very happily. The Goshala has provided pure Cows milk to Their Lordships and the devotees since 1976. Beginning with only 10 milking Cows, the herd has grown to more than 300 Cows, Bulls and calves. The Goshala provides loving shelter to all of the animals, and cares for them throughout their lives.</span>
									</h4>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="slider">
					<div class="container">
						<h3>Goshala Highlight</h3>
						<ul class="bxslider">
							<li>
								<img src="images/slider/1.jpg" title="Salt is Provided for 24 Hours" />
							</li>
							<li>
								<img src="images/slider/2.jpg" title="Feed Nutritious Laddu" />
							</li>
							<li>
								<img src="images/slider/3.jpg" title="Auto Filling water System for Cows" />
							</li>
							<li>
								<img src="images/slider/4.jpg" title="Running Area is double size of eating area" />
							</li>
							<li>
								<img src="images/slider/5.jpg" title="Extra shaded and plantation have been provided" />
							</li>
							<li>
								<img src="images/slider/6.jpg" title="Cows, Calf and Bull are healthy and peaceful" />
							</li>
						</ul>
					</div>
				</section>
				
				<section id="recent-activity">
					<div class="container">
						<div class="recent-activity-div">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<h2>Recent Video of Goshala</h2>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://youtu.be/e9xh-PUkGi4" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-md-3 col-sm-12 col-xs-12">
									<h2>Latest Donor</h2>
									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
												<?php
													$fetchsql="SELECT buyer_name,amount,currency FROM donor_info_new LIMIT 3";
													$result = mysqli_query($link, $fetchsql);
													if (mysqli_num_rows($result) > 0) {
														while ($row = mysqli_fetch_assoc($result)) {
															echo '<tr><td>'.$row['buyer_name'].'</td><td class="text-right">'.$row['currency'].' '.$row['amount'].'</td></tr>';
														}
													}
												?>
											</tbody>
										</table>
									</div>
									<div class="help-div">
										<h2>Help &amp; Guides</h2>
										<p>Bring sick cow or lame cow you find on the road to our goshala for treatment..</p>
										<button type="btn" class="btn btn-warning contact-btn">Contact Us</button>
									</div>
								</div>
								<div class="col-md-3 col-sm-12 col-xs-12">
									<div class="latest-update-div">
										<h2>Latest Update</h2>
										<ul>
											<li><a href="#">New Donated Tree by Anirudh Vyas Prabhu</a></li>
											<li><a href="#">Donor list (Cow Sevak)</a></li>
											<li><a href="#">TULASI Goshala</a></li>
										</ul>
										<button type="btn" class="btn btn-warning readmore-btn">Read More</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			
			<?php include 'footer.php' ?>
			
		</div>
	
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!-- <script src="js/mousescroll.js"></script>
		<script src="js/smoothscroll.js"></script> -->
		<script src="js/jquery.prettyPhoto.js"></script> 
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/wow.min.js"></script>
		<!-- <script src="contact/jqBootstrapValidation.js"></script>
		<script src="contact/contact_me.js"></script> -->
	 
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- Gallery Filter -->
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- Gallery Popup -->
		 
		<script src="js/custom-scripts.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				$('.bxslider').bxSlider({
					auto: false,
					minSlides: 1,
					pause: 3000,
					moveSlides: 1,
					maxSlides: 4,
					slideWidth: 290,
					slideMargin: 10,
					touchEnabled: true,
					pager: false,
					captions: true,
					controls: true,
					autoHover: true
				});
	
				$(".bxslider li").mouseenter(function () {
					$(this).find(".bx-caption").fadeIn();
				})
	
				$(".bxslider li").mouseleave(function () {
					$(this).find(".bx-caption").fadeOut();
				});
				
				$('.contact-btn').click(function () {
					window.location.href = "contact.php";
				});
			});
		</script>
	</body>
	
</html>