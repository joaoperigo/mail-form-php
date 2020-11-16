<?php
$to = "to:" . $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = "MIME-Version: 1.0\r\n";
$header .= "From: test<xxxx@outlook.com>";

mail($to, $subject, $message, $header);

echo "Email enviado com sucesso";

?>