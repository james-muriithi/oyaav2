<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Africa/Nairobi');
if (isset($_GET['ticket']) && !empty($_GET['ticket'])) {
	require('db_conn.php');
	include 'fpdf/fpdf.php';
	include 'fpdf/exfpdf.php';
	include 'fpdf/easyTable.php';
	include 'libs/phpqrcode/qrlib.php';
	
	if (isset($_SESSION['order_ref'])) {
			// header('location:index.html');
	}else{
		$CheckoutRequestID = trim($_GET['ticket']);
		 
		$sql = "SELECT * FROM tickets where CheckoutRequestID = '$CheckoutRequestID'";
		$res = $conn->query($sql);
		if (mysqli_num_rows($res)>0) {

			$TicketInfo = getTicketInfo($CheckoutRequestID);
			extract($TicketInfo);
			//qr code
			$tempDir = 'temp/';
			$filename = $username;

			$pdf=new exFPDF('L','mm',array(95,200));
			$pdf->AddPage();
			$pdf->SetAutoPageBreak(false);
			$pdf->SetFillColor(159,2,2);
			$pdf->Rect(0,0,$pdf->GetPageWidth(),20,'F');


			$pdf->AddFont('bahaus','','bauhausregular.php');
			$pdf->AddFont('coves','','Coves-Bold.php');
			$pdf->AddFont('covesl','','Coves-Light.php');
			$pdf->AddFont('aquatico','','Aquatico-Regular.php');
			$pdf->AddFont('moonb','','Moon-Bold.php');
			$pdf->AddFont('moonl','','Moon-Light.php');

			// logo
			$pdf->SetFont('coves','',17);
			$pdf->setXY(27, 3);
			$pdf->setTextColor(255, 255, 255);
			$pdf->Cell(19,12,"This is your Ticket",0,0,"R");

			$pdf->setXY(16,$pdf->GetY()+5);
			$pdf->SetFont('coves','',10);
			$pdf->Cell(19,12,"Present it at the event",0,0,"R");

			// $pdf->image('images/logo.png',64,4,-170);
			$pdf->image('images/oyaa5.png',$pdf->GetPageWidth()/1.7,2,-140);
			$pdf->setDrawColor(234,67,53);
			$pdf->line(1,20,$pdf->GetPageWidth()-1,20);

			// date
			$pdf->SetFont('bahaus','',30);
			$pdf->setXY($pdf->GetPageWidth()-28, 4.5);
			$pdf->Cell(19,12,"Tickets",0,0,"R");

			// body
			
			$pdf->SetFillColor(249, 249, 249);
			$pdf->Rect(0,20,$pdf->GetPageWidth(),$pdf->GetPageHeight(),'F');


			$pdf->SetFont('moonb','',14);

			$pdf->setTextColor(0,0,0);
			$y = $pdf->GetY();
			$pdf->SetXY(7,$y+18);

			// // event name
			$event_name = (empty($event_name)) ? "Mombasa Twerk Night": $event_name;
			$pdf->MultiCell($pdf->GetPageWidth()-70,7,$event_name." - Azura Lounge.",0,"L");

			// // // name
			$pdf->SetFont('coves','',13);
			$pdf->setTextColor(13, 13, 13);
			// // $y = $pdf->GetY();
			$pdf->SetXY(9,$y+30);
			$pdf->MultiCell($pdf->GetPageWidth()-75,7,"Happening live at Azura Lounge form 8pm till dawn!",0,"L");
			$pdf->Ln(1);
			$pdf->SetFont('moonb','',11);
			$pdf->Cell(29,7,date("jS F Y", strtotime($booking_date)),0,0,'L');

			$pdf->SetFont('bahaus','',15);
			// $pdf->SetFont('coves','',24);
			// 
			$pdf->SetXY(7,$pdf->GetY()+13);

			$pdf->Cell(29,7,'ISSUED TO:',0,"L");
			$pdf->SetFont('coves','',13);

			// $pdf->SetFont('bahaus','',23);
			$pdf->setXY(9,$pdf->GetY()+5);
			$pdf->Cell(29,12,ucwords($username),0,"L");

			$pdf->setXY(8,$pdf->GetY()+6);
			$pdf->Cell(29,12,' '.$phone,0,"L");

			// $codeContents = 'url: '.$customer_name'Id No: '.$id_no.'Receipt No: '$receipt_no
			$codeContents = 'url:https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			// $codeContents .= ', event id:'.$event_id;
			$codeContents .= ';ticket no:'.$ticket_no;
			QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 3);


			$pdf->image( $tempDir.''.$filename.'.png',$pdf->GetPageWidth()-50,25,-76);

			// // footer
			$pdf->setXY($pdf->GetPageWidth()- 40,$pdf->GetPageHeight()-20);
			$pdf->setTextColor(159,2,2);
			$pdf->SetFont('bahaus','',20);
			$pdf->Cell(10,5,'Ticket #'.$ticket_no,0,"L");
			
		 
			 $pdf->Output('D',$filename.'.pdf');
			
			 $_SESSION['success'] = "Your Ticket was successfully printed";
			 echo '<script>window.location.href= "index.php"</script>';
		}else{
			$_SESSION['error'] = "Sorry, there is no such ticket.";
			echo '<script>window.location.href= "index.php"</script>';
		}

	}
	
}else{
	echo '<script>window.location.href= "index.php"</script>';
}
function getTicketInfo($CheckoutRequestID){
	global $conn;
	$sql = "SELECT * FROM tickets INNER JOIN transactions ON tickets.CheckoutRequestID = transactions.CheckoutRequestID WHERE tickets.CheckoutRequestID = '$CheckoutRequestID'";
	$res = $conn->query($sql);

	if (mysqli_num_rows($res) == 0) {
		$_SESSION['error'] = "Sorry, there is no such ticket.";
		echo '<script>window.location.href= "index.php"</script>';
		die();
	}
	$row = $res->fetch_assoc();
	return $row;
}
?>