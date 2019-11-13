<?php

$host = 'localhost';
 $db = 'oyaa';
 $password = '';
 $user = 'root';
 $conn = new mysqli($host,$user,$password,$db);
 if (!$conn) {
 	# code...
 	echo "error in connecting to database!";
 }

?>