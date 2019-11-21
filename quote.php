<?php
if(isset($_POST['submit'])){
    $to = "info@krackedgecreative.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $client_name = $_POST['client_name'];
    $business = $_POST['business'];
    $category = $_POST['category'];
    $phone_number = $_POST['phone_number'];
    $service = $_POST['service'];
    $package = $_POST['package'];
    $additional_request = $_POST['additional_request'];

    $subject = "Quotation Request";
    $subject2 = "Copy of Quotation Request";


    $message = "Name:".$client_name . "\nBusiness Name: ".$business."\nBusiness Category: ".$category."\nEmail: ".$from."\nPhone number: ".$phone_number."\n\nQuotation Request of the following service: ".$service ."\n". "With the following package: ".$package. "\n\n"."Additional request/inquiry: ".$additional_request;
    $message2 = "Greetings ".$client_name.",\nHere is a copy of your quotation request:\n\n"."Name:".$client_name . "\nBusiness Name: ".$business."\nBusiness Category: ".$category."\nEmail: ".$from."\nPhone number: ".$phone_number."\n\nQuotation Request of the following service: ".$service ."\n". "With the following package: ".$package. "\n\n"."Additional request/inquiry: " .$additional_request;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $client_name . ", we will contact you shortly.";
    header('Location: thankyou.html');
    // You cannot use header and echo together. It's one or the other.

    }
?>
