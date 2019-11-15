<?php
session_start();
include 'db_conn.php';
// i send a post request with ajax every 2 sec here to confirm
if (isset($_POST['MerchantRequestID'])) {
	$MerchantRequestID = $_POST['MerchantRequestID'];
	if (isPayed($MerchantRequestID)) {
		echo 'success';
	}else{
		// print_r(isCancelled($MerchantRequestID));
		if (count(isCancelled($MerchantRequestID))>0){
			$ResultDesc = isCancelled($MerchantRequestID)['ResultDesc'];
			$ResultDesc = explode(']', $ResultDesc)[1];
			echo $ResultDesc;
		}else {
			echo 'error';
		}
	}
}
function isPayed($MerchantRequestID){
	global $conn;
	$sql = "SELECT `MpesaReceiptNumber` FROM `payment` WHERE MerchantRequestID = '$MerchantRequestID'";
	return mysqli_num_rows($conn->query($sql)) > 0;
} function isCancelled($MerchantRequestID){
	global $conn;
	$sql = "SELECT `ResultDesc` FROM `cancelled` WHERE MerchantRequestID = '$MerchantRequestID'";
	$res = $conn->query($sql);
	return mysqli_fetch_assoc($res);
}

?>