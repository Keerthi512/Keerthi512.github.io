<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Donations | Goshala</title>
		<link href="../images/ico/favicon.ico" rel="shortcut icon" /> 
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="../css/styles.css" rel="stylesheet" type="text/css" />
		<link href="../css/grid.css" rel="stylesheet" type="text/css" />
		<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../css/animate.min.css" rel="stylesheet" type="text/css" />
		<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../css/owl.transitions.css" rel="stylesheet" type="text/css" />
		<link href="../css/prettyPhoto.css" rel="stylesheet" type="text/css" />  
		<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css" />  
		<link href="../css/gallery-1.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css" rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->  

		<style type="text/css">
			body{background: #3d4348;}
			#payment-confirm-div {
				width: 40%;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background: #fff;
			}
			.card {
				border: 1px solid #c8ced3;
				-moz-box-shadow: 0px 3px 3px #000;
				-webkit-box-shadow: 0px 3px 3px #000;
				box-shadow: 0px 3px 3px #000;
			}
			.card-header {
				background-color: #f0f3f5;
				border-bottom: 1px solid #c8ced3;
			}
			.card-body p {
				font-size: 18px;
			}
			.card-header,.card-body {padding: 20px ;}
			.card-footer {padding: 0 0 20px 0;}
		</style>
		
	</head>
	
	<body id="home">
	
		<?php
			include '../config.php';
			$enableSandbox = true;
			
			$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
			$paypalId='inagakeerthi@gmail.com';
			
			$prd_name = '';
			$price = '';
			$currency = '';
			$new_price = '';
			$id = $_GET['id'];
			//echo $id;
			if(isset($_GET['id']) && $_GET['id'] == $id){
				
				$prd_name = '';
				$price = '';
				
				$fetchData = "SELECT donation_for,cost FROM cow_donation_tb where id=$id";
				$result = mysqli_query($link, $fetchData);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$prd_name = $row['donation_for'];
						$price = $row['cost'];
					}
				}
				$b = str_replace( ',', '', $price );
				if( is_numeric( $b ) ) {
					$new_price = $b;
				}
				//$new_price = $new_price * 0.014;
				
				
				
			}
			$currency = $_POST['currency'];
	
			if ($currency == 'INR') {
				$new_price = $new_price;
				$cc = '&#8377;';
			}
			else {
				$new_price = $new_price * 0.014;
				$cc = '&#36;';
			}
		?>
		
		<div id="wrapper">
			<div id="content-wrap">
				<section id="payment-confirm-div">	
					
					<div id="payment-content-div">
						<!-- PRICE ITEM -->
						<form action="<?php echo $paypalUrl; ?>" method="POST" name="frmPayPal1">
							<div class="card text-center">
								<input type="hidden" name="business" value="<?php echo $paypalId; ?>">
								<input type="hidden" name="cmd" value="_xclick">
								<input type="hidden" name="item_name" value="<?php echo $prd_name; ?>">
								<input type="hidden" name="item_number" value="2">
								<input type="hidden" name="amount" value="<?php echo $new_price; ?>">
								<input type="hidden" name="no_shipping" value="1">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="cancel_return" value="http://7d1bbee7.ngrok.io/goshala_new/index.php">
								<input type="hidden" name="return" value="http://7d1bbee7.ngrok.io/goshala_new/paypal/success.php"> 
								<input type="hidden" name="notify_url" value="http://7d1bbee7.ngrok.io/goshala_new/ipn.php" />
								<div class="card-header">
									<img src="../images/warning_icon.png" alt="" width="100" />
								</div>
								<div class="card-body">
									<p>Please confirm the details to proceed</p>
									
									<p>Donating for: <strong><?php echo $prd_name; ?></strong></p>
									<p>Amount: <strong><?php echo $cc.' '.$new_price; ?></strong></p>
								</div>
								<div class="card-footer text-center">
									<button type="submit" name="submit" class="btn btn-warning" href="#">Proceed</button>
								</div>
							</div>
							
						</form>
						<!-- /PRICE ITEM -->
					</div>
					
				</section>
			</div>
			
			
		</div>
	
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<!-- <script src="js/mousescroll.js"></script>
		<script src="../js/smoothscroll.js"></script> -->
		<script src="../js/jquery.prettyPhoto.js"></script> 
		<script src="../js/jquery.inview.min.js"></script>
		<script src="../js/wow.min.js"></script>
		<!-- <script src="contact/jqBootstrapValidation.js"></script>
		<script src="contact/contact_me.js"></script> -->
	 
		<script type="text/javascript" src="../js/jquery.isotope.min.js"></script><!-- Gallery Filter -->
		<script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script><!-- Gallery Popup -->
		 
		<!-- <script src="js/custom-scripts.js"></script> -->
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				
				$(".amount_radio_btn input[type=radio]").change(function(){
					if($(this).attr("rel") == "attach")
					{
						$(this).val($("#other-amount").val());
					}
				});

				$("#other-amount").change(function(){
					$(".amount_radio_btn input[type=radio]:eq(7)").val($(this).val() + '.00');
				});  
				
			});
		</script>

	</body>
</html>