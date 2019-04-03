<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Contact Us | Goshala</title>
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
			
			if (isset($_POST['send'])) {
				$to = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['msg'];
				//echo $to; echo $subject; echo $message;
				$headers  = 'From: inagakeerthi@gmail' . "\r\n" .
							'MIME-Version: 1.0' . "\r\n" .
							'Content-type: text/html; charset=utf-8';
							
				mail($to,$subject,$message,$headers);
			}
			
		?>
		<div id="wrapper">
			<?php include 'header.php' ?>
			
			<div id="content-wrap">
				<section id="contact-div">	
					<div class="container">
						<div id="contact-content-div">
							<h3>Contact Us</h3>
							<form action="" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name...">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email...">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject...">
								</div>
								<div class="form-group">
									<textarea size="5" class="form-control" id="msg" name="msg" placeholder="Enter Message..."></textarea>
								</div>
								<button type="submit" class="btn btn-warning" name="send">Send Message</button>
							</form>
							
							<div id="address-div">
								<h3>Address:</h3>
								<p>Sri Tulasi Goshala, Guntur District, Andhra pradesh, India</p>
								<p>Contact Person: Bharat Kumar</p>
								<p>Mobile: +91-9100843703</p>
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
		 
		<!-- <script src="js/custom-scripts.js"></script> -->
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				
				
			});
		</script>
	</body>
	
</html>