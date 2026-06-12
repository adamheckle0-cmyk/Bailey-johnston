<?php
mb_internal_encoding("UTF-8");

$to = 'admin@baileyjohnston.co.uk';
$subject = 'Bailey & Johnston - Enquiry Form';

$name = "";
$email = "";
$telephone = "";
$message = "";
// new data
$survey_type=""; // options
$property_value= ""; // num
$how_found=""; // string

if( isset($_POST['name']) ){
    $name = $_POST['name'];

    $body .= "Name: ";
    $body .= $name;
    $body .= "\n\n";
}
if( isset($_POST['subject']) ){
    $subject = $_POST['subject'];
}
if (isset($_POST['survey_type'])) {
    $body .= "";
    $body .= "Survey Type: ";
    $body .= $_POST['survey_type'];
    $body .= "\n\n";
}
if (isset($_POST['property_value'])) {
    $body .= "";
    $body .= "Property Value: ";
    $body .= $_POST['property_value'];
    $body .= "\n\n";
}
if (isset($_POST['how_found'])) {
    $body .= "";
    $body .= "How Found: ";
    $body .= $_POST['how_found'];
    $body .= "\n\n";
}
if( isset($_POST['email']) ){
    $email = $_POST['email'];

    $body .= "";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n\n";
}
if( isset($_POST['telephone']) ){
    $telephone = $_POST['telephone'];

    $body .= "";
    $body .= "Telephone: ";
    $body .= $telephone;
    $body .= "\n\n";
}
if( isset($_POST['message']) ){
    $message = $_POST['message'];

    $body .= "";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'From: ' .$email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mb_send_mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
}
else{
    echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
}