<?php
include_once 'access_token.php';
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';


if (isset($_POST['checkoutRequestID']) && !empty($_POST['checkoutRequestID'])) {
	$checkoutRequestID = $_POST['checkoutRequestID'];
	$BusinessShortCode = '174379';
  	$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
  	$Timestamp = date('YmdHis');
  	$Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  	$stkheader = array('Content-Type:application/json','Authorization:Bearer '.$access_token);

	# initiating the transaction
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header

	$curl_post_data = array(
	//Fill in the request parameters with valid values
	'BusinessShortCode' => $BusinessShortCode,
	'Password' => $Password,
	'Timestamp' => $Timestamp,
	'CheckoutRequestID' => $checkoutRequestID
	);

	$data_string = json_encode($curl_post_data);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	$curl_response = curl_exec($curl);
	print_r($curl_response);
}


?>