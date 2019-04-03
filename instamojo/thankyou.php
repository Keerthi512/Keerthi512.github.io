<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Thank You, Mojo</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
        <p class="lead">A test payment integration for instamojo paypemnt gateway. Written in PHP</p>
      </div>

      <h3 style="color:#6da552">Thank You, Payment succus!!</h3>
  

 <?php

include '../config.php';
include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_a9b76279a812d4f28e5feaa166b', 'test_673e4d3c66a72b46b0e1f3e09f1','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


	$payment_id = $response['payments'][0]['payment_id'];
	$buyer_name = $response['payments'][0]['buyer_name'];
	$buyer_email = $response['payments'][0]['buyer_email'];
	$buyer_phone = $response['payments'][0]['buyer_phone'];
	$purpose = $response['purpose'];
	$amount = $response['payments'][0]['amount'];
	$currency = $response['payments'][0]['currency'];
	
    //echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    //echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    //echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
	//echo "<h4>Purpose: " . $response['purpose'] . "</h4>" ;
	//echo "<h4>Amount: " . $response['payments'][0]['amount'] . "</h4>" ;
	//echo "<h4>Currency: " . $response['payments'][0]['currency'] . "</h4>" ;
	
	echo "<h4>Payment ID: " . $payment_id . "</h4>" ;
    echo "<h4>Payment Name: " . $buyer_name . "</h4>" ;
    echo "<h4>Payment Email: " . $buyer_email . "</h4>" ;
	echo "<h4>Payment Phone: " . $buyer_phone . "</h4>" ;
	echo "<h4>Purpose: " . $purpose . "</h4>" ;
	echo "<h4>Amount: " . $amount . "</h4>" ;
	echo "<h4>Currency: " . $currency . "</h4>" ;
	
	
	$insertDB = "insert into donor_info_new(payment_id,buyer_name,buyer_phone,buyer_email,purpose,amount,currency) values('$payment_id','$buyer_name','$buyer_phone','$buyer_email','$purpose','$amount','$currency')";
	$result = mysqli_query($link,$insertDB);
	echo $result;
	
	if($result) {
		echo 'Records added into database';
	}
	else {
		echo 'Error in inserting data '.mysqli_error($link);
	}
	
	

//  echo "<pre>";
//   print_r($response);
//echo "</pre>";
    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>


      
    </div> <!-- /container -->


  </body>
</html>