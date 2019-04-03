<?php

include('config.php');

$id = '';
$first_name = "";
$last_name = "";
$organization = "";
$address = "";
$city = "";
$country = "";
$state = "";
$phone = "";
$email = "";
$comment = "";
$anonymous = "";
$donation_type = "";
$donation_amount = "";
$currency = "";
$payment_mode = "";

if(isset($_POST) && !empty($_POST)) {
// Escape user inputs for security
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$anonymous = $_POST['anonymous'];
$donation_type = $_POST['donation-type'];
$donation_amount = $_POST['donation-amount'];
$currency = $_POST['currency'];
$payment_mode = $_POST['payment-method'];
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);

//$other_amount = '';
//$other_amount = $_POST['other-amount'];
//echo $other_amount;
// Attempt insert query execution
$sql = "INSERT INTO 
		donor_info(firstname,lastname,organization,address,city,country,state,phone,email,comments,anonymous_guest,donation_type,amount,currency,payment_mode) 
		values('$first_name', '$last_name', '$organization', '$address', '$city', '$country', '$state', '$phone', '$email', '$comment', '$anonymous', '$donation_type', '$donation_amount', '$currency', '$payment_mode')";

		//echo $sql;
if(mysqli_query($link, $sql)) {
    //echo "Records added successfully.";
	//echo 'Amount:' .$amount;
	//header('Location: view.php');
	
	if(isset($_POST['payment-method']) && ($_POST['payment-method'] == 'Paypal')) {
		echo $id = $_GET['id'];
		header('Location: paypal/payments1.php?id='.$id);
		//header('Location: paypal/payments2.php');
	}
    
	elseif(isset($_POST['payment-method']) && ($_POST['payment-method']) == "Instamojo"){
		echo $id = $_GET['id'];
		header("Location: instamojo/order.php?id=".$id); 
		//header('Location: instamojo/order.php');
	}
    
	else {
		header("Location: donations.php"); 
	}
	
} 
else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

?>