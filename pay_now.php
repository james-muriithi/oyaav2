<?php
session_start();
date_default_timezone_set('Africa/Nairobi');

include 'access_token.php';
include 'db_conn.php';

$phone_no = '';
$amount = 1;
$eventId = 0;
$customerDetails = array();

function generateOrder(){
  $order_ref="";
  $char = array_merge(range(0, 9),range('a', 'z'));
  for($i = 0;$i<= 25;$i++){
    $order_ref .= $char[array_rand($char)]; 
  }
  $order_ref = strtoupper(md5($order_ref));
  return substr($order_ref, 1,10);
}

if (isset($_POST['checkoutPhone']) && isset($_POST['customerDetails']) && !empty($_POST['eventId'])) {
  $phone_no = $_POST['checkoutPhone'];
  $eventId = $_POST['eventId'];
  parse_str($_POST['customerDetails'],$customerDetails);
}else {
  exit();
}
 # define the variales
  # provide the following details, this part is found on your test credentials on the developer account
  $BusinessShortCode = '174379';
  $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  
  
  /*
    This are your info, for
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be 
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
    for developer/test accounts, this money will be reversed automatically by midnight.
  */
  
  $PartyA = $phone_no; // This is your phone number, 
  $AccountReference = $eventId;
  $TransactionDesc = 'testing';
  $Amount = $amount;
 
  # Get the timestamp, format YYYYmmddhms -> 20181004151020
  $Timestamp = date('YmdHis');    
  
  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
  $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  # header for access token
  $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
  $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  # callback url
  $CallBackURL = 'https://theschemaqhigh.co.ke/Oyaa/callback/callback_url.php';  

 

  # header for stk push
  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

  # initiating the transaction
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $initiate_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $Amount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
  );

  $data_string = json_encode($curl_post_data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  $curl_response = curl_exec($curl);
  print_r($curl_response);
  $curl_response = json_decode($curl_response);
  if ($curl_response->ResponseCode == 0) {
  	extract($customerDetails);
  	$CheckoutRequestID = $curl_response->CheckoutRequestID;

  	$sql = "INSERT INTO `tickets`(`event_id`, `username`, `phone`, `email`, `amount`, `payment_status` ,`CheckoutRequestID`) VALUES ('$eventId','$inputName','$inputPhone','$inputEmail','$amount',0,'$CheckoutRequestID')";
  	
  	if (!$conn->query($sql)) {
  		$log = fopen('me.txt', 'a');
  		fwrite($log, $conn->connect_error);
  		fclose($log);
  	}
  	
  }

?>