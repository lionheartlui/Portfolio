<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST["message"];
$phone = $_POST["phone"]
$site = $_POST["website"]

$to      = 'rebollosluigi@gmail.com';

mail($to, $message, $name, $email) or die('error');
?> 