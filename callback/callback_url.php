<?php
include '../db_conn.php';
$stkCallbackResponse = file_get_contents('php://input');
$logFile = "stkPushResponse.json";
$log = fopen($logFile, "a");
fwrite($log, PHP_EOL.$stkCallbackResponse);
fclose($log);
$response = json_decode($stkCallbackResponse);

if ($response->Body->stkCallback->ResultCode == 0) {
	$MerchantRequestID = $response->Body->stkCallback->MerchantRequestID;
	$ResultCode = $response->Body->stkCallback->ResultCode;
	$CheckoutRequestID = $response->Body->stkCallback->CheckoutRequestID;
	$ResultDesc = $response->Body->stkCallback->ResultDesc;
	$CallbackMetadata = $response->Body->stkCallback->CallbackMetadata;

	$item = $CallbackMetadata->Item;

	$amount = $item[0]->Value;
	$receiptNo = $item[1]->Value;
	$transactionDate = $item[3]->Value;
	$phoneNo = $item[4]->Value;

	$sql = "INSERT INTO `transactions`(`MerchantRequestID`, `CheckoutRequestID`, `ResultCode`, `ResultDesc`, `Amount`, `MpesaReceiptNumber`, `TransactionDate`, `PhoneNumber`) VALUES ('$MerchantRequestID','$CheckoutRequestID','$ResultCode','$ResultDesc','$amount','$receiptNo','$transactionDate','$phoneNo')";
	if ($conn->query($sql) == TRUE) {
		if (!$conn->query("UPDATE tickets SET payment_status = '1'where CheckoutRequestID= '$CheckoutRequestID'")) {
			$log = fopen('mee.txt', 'a');
	  		fwrite($log, $conn->connect_error);
	  		fclose($log);
		}
	}else{
		$log1 = fopen('log.txt', "a");
		fwrite($log1, 'error occured'.">>".$conn->error);
	}

}
?>