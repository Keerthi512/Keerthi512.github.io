<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="webthemez">
		<title>Donations | Goshala</title>
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
			//include('queries.php');
			
			$id = $_GET['id'];
			if(isset($_GET['id']) && $_GET['id'] == $id){
		
				$cow_name = '';
				$image = '';
				
				$fetchData = "SELECT name,image_name FROM cow_adopt_tb where id=$id";
				$result = mysqli_query($link, $fetchData);
				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$cow_name = $row['name'];
						$image = $row['image_name'];
					}
				}
			}
			
			$amount = '';
			$new_price = '';
			$prd_name = '';
			$currency = '';
			
			if (isset($_POST)) {
				if(isset($_POST['payment-method']) && ($_POST['payment-method'] == 'Paypal')) {
					$amount = $_POST['donation-amount'];
					echo $amount;
					$prd_name = $_POST['comment'];
					echo $prd_name;
					$currency = $_POST['currency'];
					echo $currency;
					header('Location: paypal/payments2.php?name='.$prd_name.'&amount='.$amount.'&currency='.$currency);
				}
				
				else if (isset($_POST['payment-method']) && ($_POST['payment-method'] == 'Instamojo')) {
					//echo 'Instamojo';
					$amount = $_POST['donation-amount'];
					echo $amount;
					$prd_name = $_POST['comment'];
					echo $prd_name;
					header('Location: instamojo/order1.php?name='.$prd_name.'&amount='.$amount);
				}
				
			}
			
		?>
		<div id="wrapper">
			<?php include 'header.php' ?>
			
			<div id="content-wrap">
				<section id="donations-div">	
					<div class="container">
						<div id="donations-content-div">
						
							<h3>Online Donation</h3>
							
							<div class="cow-details">
								<?php
									echo '<p>Cow Name: '.$cow_name. '</p>';
									echo '<img src="images/portfolio/'.$image.'" alt="'.$cow_name.'" class="img-thumbnail" width="250" />';
								?>
							</div>
							
							<div class="row">
								<div class="col-md-7 col-sm-12 col-xs-12">
									<h3>Donor Information</h3>
									<form class="form-horizontal" method="POST" action="">
										<div class="form-group">
											<label class="control-label col-sm-2" for="fname">Firstname:</label>
											<div class="col-sm-10">
											  <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="lname">Lastname:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="organization">Organization:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="organization" id="organization" placeholder="Enter Organization">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="address">Address:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
											</div>
										</div>  
										<div class="form-group">
											<label class="control-label col-sm-2" for="city">City:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="country">Country</label>
											<div class="col-sm-10"> 
												<select class="form-control" id="country" name="country">
													<option>Select Country</option>
													<option>India</option>
													<option>US</option>
													<option>UK</option>
												</select>
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="state">State:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="phone">Phone:</label>
											<div class="col-sm-10"> 
											  <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="email">Email:</label>
											<div class="col-sm-10"> 
											  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="comment">Comment:</label>
											<div class="col-sm-10"> 
											  <textarea size="5" class="form-control" name="comment" id="comment" placeholder="Enter Your Comment"></textarea>
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="anonymous">Anonymous Donation:</label>
											<div class="col-sm-10"> 
											  <div class="checkbox">
												<label><input type="checkbox" name="anonymous" value="Anonymous"></label>
											  </div>
											</div>
										  </div>
										  <h3>Donation Information</h3>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="donation-type">Donation Type</label>
											<div class="col-sm-10"> 
												<label class="radio-inline">
												  <input type="radio" name="donation-type" value="Onetime" checked>Onetime
												</label>
												<label class="radio-inline">
												  <input type="radio" name="donation-type" value="Recurring">Recurring
												</label>
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="donation-amount">Amount</label>
											<div class="col-sm-10 amount_radio_btn"> 
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-rupee"></i></span>
													<input type="text" id="donation-amount" name="donation-amount" class="form-control" placeholder="Other Amount" step="1"/>
												</div>
											</div>	
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="currency">Currency</label>
											<div class="col-sm-10"> 
												<select class="form-control" id="sel1" name="currency">
												<option>Select Currency</option>
												<option value="USD">US Dollars</option>
												<option value="INR">Indian Rupee</option>
											  </select>
											</div>
										  </div>
										  
										  <div class="form-group">
											<label class="control-label col-sm-2" for="payment-method">Payment Method</label>
											<div class="col-sm-10"> 
												<div class="radio">
												  <label><input type="radio" name="payment-method" value="Paypal" checked>Paypal</label>
												</div>
												<div class="radio">
												  <label><input type="radio" name="payment-method" value="Instamojo">Instamojo</label>
												</div>
											</div>
										  </div>
										  
										  <div class="form-group"> 
											<div class="col-sm-offset-2 col-sm-10">
											  <button type="submit" name="submit" class="btn btn-warning donation-btn">Process Donation</button>
											</div>
										  </div>
										  
										  
										  
									</form>
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
		 
		<!-- <script src="js/custom-scripts.js"></script> -->
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				
				/*$(".amount_radio_btn input[type=radio]").change(function(){
					if($(this).attr("rel") == "attach")
					{
						$(this).val($("#other-amount").val());
					}
				});

				$("#other-amount").change(function(){
					$(".amount_radio_btn input[type=radio]:eq(0)").val($(this).val() + '.00');
				}); */ 
				
			});
		</script>
	</body>
	
</html>