<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Thank you | Goshala</title>
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
	</head>
	
	<body id="home">
		<?php
		include '../config.php';

		//Get payment information from PayPal
		$item_number = $_GET['item_number']; 
		$txn_id = $_GET['tx'];
		$payment_gross = $_GET['amt'];
		$currency_code = $_GET['cc'];
		$payment_status = $_GET['st'];

		//Get product price from database
		//$productResult = $link->query("SELECT price FROM products WHERE id = ".$item_number);
		//$productRow = $productResult->fetch_assoc();
		//$productPrice = $productRow['price'];

		if(!empty($txn_id)){
			//Check if payment data exists with the same TXN ID.
			$prevPaymentResult = $link->query("SELECT payment_id FROM payments WHERE txn_id = '".$txn_id."'");

			if($prevPaymentResult->num_rows > 0){
				$paymentRow = $prevPaymentResult->fetch_assoc();
				$last_insert_id = $paymentRow['payment_id'];
			}else{
				//Insert tansaction data into the database
				$insert = $link->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
				$last_insert_id = $link->insert_id;
			}
		}
		else {
			echo '<h1>Your payment has failed.</h1>';
		}
		?>
		
		<div id="wrapper">
			<?php include '../header.php' ?>
			
			<div id="content-wrap">
				<section id="contact-div">	
					<div class="container">
						<div id="contact-content-div" class="text-center">
							<img src="../images/ok.png" alt="Transaction Successful" width="200" />
							<h1>Thank you for donating</h1>
							<!--<h1>Your Payment ID - <?php echo $last_insert_id; ?></h1>-->
							
							<!--<div class="table-responsive">
								<table class="table table-striped text-left">
									<thead>
										<tr>
											<th>Transaction ID</th>
											<th>Amount</th>
											<th>Transaction Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$fetchData = 'select * from payments where payment_id='.$last_insert_id;
											$result = mysqli_query($link, $fetchData);
											if (mysqli_num_rows($result) > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
													echo '<tr><td>'.$row['txn_id'].'</td><td>'.$row['payment_gross'].'</td><td>'.$row['payment_status'].'</td></tr>';
												}
											}
										?>
									</tbody>
								</table>
							</div>-->
						</div>
					</div>
				</section>
			</div>
			
			<?php include '../footer.php' ?>
		</div>
	
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<!-- <script src="js/mousescroll.js"></script>
		<script src="js/smoothscroll.js"></script> -->
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
				
				
			});
		</script>
	</body>	
</html>	