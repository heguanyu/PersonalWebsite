<?php
$binfo = $_GET['bInfo'];
$cinfo = $_GET['cInfo'];
$pName = $_GET['itemName'];

$to = 'heguanyu9037@gmail.com';
$subject = 'Someone want to buy!';

$message="Some one want to buy ".$pName."!\r\n Bargaining Information: ".$binfo."\r\n Contact Infomation: ".$cinfo."\r\n";

$headers = 'From: postmaster@guanyuhe.com' . "\r\n" .
				'Reply-To: donot-reply@guanyuhe.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
echo $message;
?>