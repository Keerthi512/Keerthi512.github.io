<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Cow Sevak | Goshala</title>
		<link href="images/ico/favicon.ico" rel="shortcut icon" /> 
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/grid.css" rel="stylesheet" type="text/css" />
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
				<section id="donorlist-div">	
					<div class="container">
						<div id="donorlist-content-div">
							<div class="row">
								<div class="col-md-8 col-sm-3 col-xs-12">
									<h3>Donor list (Cow Sevak)</h3>
									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
												<?php
													$fetchsql="SELECT buyer_name,amount,currency FROM donor_info_new LIMIT 15";
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
								</div>
								<div class="col-md-4 col-sm-3 col-xs-12">
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
			
			<footer id="footer">
				<div id="footer-pattern">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-right">
								<ul class="social-icons">
									<li><a href="http://facebook.com/webplant.in" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
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
		 
		<!-- <script src="js/custom-scripts.js"></script> -->
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				
				
			});
		</script>
	</body>
	
</html>