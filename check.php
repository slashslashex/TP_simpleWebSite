<?php
session_start();
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';
$subject = "=?utf-8?B?".base64_encode('Test message')."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

if (strlen($message) < 10)
{
    $_SESSION['msg'] = 'Message must be more than 10 characters!';
}
else
{
    $_SESSION['msg'] = 'Message successfully sent!';
    mail('test@test.com', $subject, $message, $headers);
}
header('Location: contacts.php');
//print_r($_POST);
?>