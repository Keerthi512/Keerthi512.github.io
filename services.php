<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Services | Goshala</title>
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
			include('queries.php');
		?>
		<div id="wrapper">
			<?php include 'header.php' ?>
			
			<div id="content-wrap">
				<section id="services-div">	
					<div class="container">
						<div id="services-content-div">
							<div class="row">
								<?php
									$id = '';
									$fetchsql="SELECT id,image_name,donation_for,cost FROM cow_donation_tb";
									$result = mysqli_query($link, $fetchsql);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<div class="col-md-3 col-sm-3 col-xs-12 text-center">';
											echo '<img src="images/'.$row['image_name'].'" alt="'.$row['donation_for'].'" class="img-responsive" />';
											echo '<p>'.$row['donation_for'].'</p>';
											echo '<p>&#8377; '.$row['cost'].'</p>';
											echo '<a href="donations1.php?id='.$row['id'].'" class="btn btn-warning">Donate Now</a>';
											echo '</div>';
										}
									}
								?>
							</div>
						</div>
					</div>
				</section>
				
				<section id="cow-adoption-div">
					<div class="container" id="container">
						<div id="cow-adopt-content-div">
							<h3>Cow available for Adoption</h3>
							
							<div class="view-controls-list" id="viewcontrols">
								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-12">
										<div class="list-grid-view" style="margin: 7px 0;">
											<a class="gridview active"><i class="fa fa-th-large"></i> Grid</a>
											<a class="listview"><i class="fa fa-list"></i> List</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="form-group">
											<select class="form-control" id="categorySelect">
												<option>Filter by category</option>
												<option>View All</option>
												<option>Cows</option>
											</select>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="form-group">
											<select class="form-control" id="tagSelect">
												<option>Filter by tag</option>
												<option>View All</option>
											</select>
										</div>
									</div>
									<div class="col-md-2 col-sm-3 col-xs-12">
										<button type="button" class="btn btn-info"><i class="fa fa-remove"></i> Clear Filters</button>
									</div>
								</div>
							</div>
							
							<ul class="grid">
								<?php
									$id = '';
									$fetchsql="SELECT id,name,image_name FROM cow_adopt_tb";
									$result = mysqli_query($link, $fetchsql);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<li>';
											echo '<img src="images/portfolio/'.$row['image_name'].'" alt="'.$row['name'].'" width="250" />';
											echo '<section class="list-left"><span class="title">Cow Name: '.$row['name'].'</span></section>';
											echo '<section class="list-right">
												<span class="detail"><a href="donations2.php?id='.$row['id'].'" class="button btn btn-warning">Adopt Cow</a></span>
												</section>';
											echo '</li>';
										}
									}
								?>
							</ul>
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
		 
		<!-- <script src="js/custom-scripts.js"></script> -->
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
				
				//List Grid View
				var elem=$('#container ul');      
				$('#viewcontrols a').on('click',function(e) {
					if ($(this).hasClass('gridview')) {
						elem.fadeOut(1000, function () {
							$('#container ul').removeClass('list').addClass('grid');
							$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
							$('#viewcontrols .gridview').addClass('active');
							$('#viewcontrols .listview').removeClass('active');
							elem.fadeIn(1000);
						});						
					}
					else if($(this).hasClass('listview')) {
						elem.fadeOut(1000, function () {
							$('#container ul').removeClass('grid').addClass('list');
							$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
							$('#viewcontrols .gridview').removeClass('active');
							$('#viewcontrols .listview').addClass('active');
							elem.fadeIn(1000);
						});									
					}
				});
				
			});
		</script>
	</body>
	
</html>