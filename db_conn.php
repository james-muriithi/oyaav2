<?php

$host = 'localhost';
 $db = 'oyaacoke_oyaa';
 $x = '&;j=b0bkXRug';
 $user = 'oyaacoke_james';
 $conn = new mysqli($host,$user,$x,$db);
 if (!$conn) {
 	# code...
 	echo "error in connecting to database!";
 }

?>