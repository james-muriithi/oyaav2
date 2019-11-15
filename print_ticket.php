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

			$pdf=new exFPDF('L','mm',array(108,200));
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
			// // // contact
			// $y = $pdf->GetY();
			// $pdf->SetXY(15,$y+15);
			// $pdf->SetFont('coves','',24);

			// $pdf->Cell(29,12,'Contact : ',0,0,"R");
			// $pdf->SetFont('bahaus','',23);
			$pdf->setXY(8,$pdf->GetY()+6);
			$pdf->Cell(29,12,' '.$phone,0,"L");

			// // Event Date
			// $pdf->SetFont('coves','',16);
			// $y = $pdf->GetY();
			// $pdf->SetXY(25,$y+11);

			// $pdf->Cell(29,12,'Event Date : ',0,0,"R");
			// $pdf->SetFont('bahaus','',14);
			// $pdf->setX($pdf->GetX()+7);
			// $pdf->Cell(29,12,' '.$event_date,0,0,"C");

			// // Date
			// $pdf->SetFont('coves','',16);
			// $y = $pdf->GetY();
			// $pdf->SetXY(25,$y+11);

			// $pdf->Cell(29,12,'Booking Date: ',0,0,"R");
			// $pdf->SetFont('bahaus','',14);
			// $pdf->setX($pdf->GetX()+7);
			// $pdf->Cell(32,12,date("jS F Y", strtotime($booking_date)),0,0,"C");

			// $codeContents = 'url: '.$customer_name'Id No: '.$id_no.'Receipt No: '$receipt_no
			$codeContents = 'url:https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			// $codeContents .= ', event id:'.$event_id;
			$codeContents .= ';ticket no:'.$ticket_no;
			QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 3);


			$pdf->image( $tempDir.''.$filename.'.png',$pdf->GetPageWidth()-50,25,-76);

			// // table
			// $pdf->setXY(10,$pdf->GetY()+23);
			// $pdf->SetFont('coves','',14);
			// $table=new easyTable($pdf, '{20, 40, 35, 35,35,35}','align:C{CCCCCC};border:1; font-color:#fff;  paddingY:1.7;border-width:0.5;border-color:#fff;bgcolor:#4680ff');
			// $table->easyCell('Event #','font-size:14');
			// $table->easyCell('Event Name','font-size:14');
			// $table->easyCell('Payment Status','font-size:14');
			// $table->easyCell('Mpesa Receipt','font-size:14');
			// $table->easyCell('Phone #', 'font-size:14;');
			// $table->easyCell("Paid Amount", 'font-size:14');

			// $table->printRow();				
			
			// // table data
			// $table->rowStyle('align:{LLLL};bgcolor:#dddff0;font-color:#000');
			// $table->easyCell($event_id,'font-size:12');
			// $table->easyCell($event_name,'font-size:12');
			// $table->easyCell(($payment_status == 1)? 'Paid':'Unpaid', 'font-size:12;');
			// $table->easyCell($MpesaReceiptNumber, 'font-size:12;');
			// $table->easyCell($PhoneNumber, 'font-size:12;');
			// $table->easyCell((int)$Amount, 'font-size:12;align:R;paddingX:2;');
			// $table->printRow();


			// // discount
			// $table->rowStyle('bgcolor:#dddff0;font-color:#000');
			// $table->easyCell(" ",'border:R; colspan:4;bgcolor:#fff');
			// $table->easyCell("Discount", 'align:C;font-family:bahaus;font-size:18;font-color:#0000ff');
			// $pdf->SetFont('coves','',14);
			// $table->easyCell(0,"align:R;paddingX:2;");
			// $table->printRow();

			// // total paid
			// $table->rowStyle('bgcolor:#dddff0;font-color:#000');
			// $table->easyCell(" ",'border:R; colspan:4;bgcolor:#fff');
			// $table->easyCell("Total Paid", 'align:C;font-family:bahaus;font-size:18;font-color:#0000ff');
			// $pdf->SetFont('coves','',14);
			// $table->easyCell($Amount ,"align:R;paddingX:2;");
			// $table->printRow();

			// // balance
			// $table->rowStyle('bgcolor:#4680ff;font-color:#fff');
			// $table->easyCell(" ",'border:R; colspan:4;bgcolor:#fff');
			// $table->easyCell("Balance", 'align:C;font-family:coves;font-size:18;');
			// $pdf->SetFont('coves','',14);
			// $table->easyCell(0,"align:R;paddingX:2;");
			// $table->printRow();
			// // end table
			// $table->endTable();

			// // footer
			$pdf->setXY(8,$pdf->GetPageHeight()-10);
			$pdf->SetFont('bahaus','',23);
			$pdf->Cell(10,5,'#'.$ticket_no,0,0,"R");
			// $pdf->setDrawColor(234,67,53);
			// $pdf->line(10,$pdf->GetY(),$pdf->GetPageWidth()-9,$pdf->GetY());

			// // //footer
			// $pdf->image('images/oyaa.png',10,$pdf->GetY()+4,-180);
			// // $pdf->image('images/fitness1.png',90,$pdf->GetY()+3,-130);

			// // icons
			// $pdf->image('images/fb.png',$pdf->GetPageWidth()-55,$pdf->GetY()+5,-130,0,'PNG','https://www.facebook.com');
			// $pdf->image('images/twitter.png',$pdf->GetPageWidth()-45,$pdf->GetY()+5,-130,0,'PNG','https://www.twitter.com');
			// $pdf->image('images/whatsapp.png',$pdf->GetPageWidth()-35,$pdf->GetY()+5,-130,0,'PNG','https://wa.me/+254792699');
			// $pdf->image('images/youtube.png',$pdf->GetPageWidth()-25,$pdf->GetY()+5,-130,0,'PNG','https://www.youtube.com');
			
		 
			 $pdf->Output('D',$filename.'.pdf');
			
			 $_SESSION['success'] = "Your Ticket was successfully printed";
			 header('location:index.php');
		}else{
			$_SESSION['error'] = "Sorry, there is no such ticket.";
			header('location:index.php');
		}

	}
	
}else{
	header('location:index.php');
}
function getTicketInfo($CheckoutRequestID){
	global $conn;
	$sql = "SELECT * FROM tickets LEFT OUTER JOIN transactions ON tickets.CheckoutRequestID = transactions.CheckoutRequestID WHERE tickets.CheckoutRequestID = '$CheckoutRequestID'";
	$res = $conn->query($sql);

	$row = $res->fetch_assoc();
	return $row;
}
?>