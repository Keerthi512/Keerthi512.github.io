<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_a9b76279a812d4f28e5feaa166b', 'test_673e4d3c66a72b46b0e1f3e09f1','https://test.instamojo.com/api/1.1/');

echo $price;

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://a3bd3a00.ngrok.io/goshala_new/instamojo/thankyou.php",
        "webhook" => "http://a3bd3a00.ngrok.io/goshala_new/instamojo/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>