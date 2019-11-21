<?php
if(isset($_POST['submit'])){
    $to = "info@krackedgecreative.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $client_name = $_POST['client_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $client_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $client_name . "\n\n" . $_POST['message'];


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $client_name . ", we will contact you shortly.";
    header('Location: thankyou.html');
    // You cannot use header and echo together. It's one or the other.
    }
?>
