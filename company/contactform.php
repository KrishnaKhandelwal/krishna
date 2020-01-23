<?php

    $name = $_POST['username'];
    $visitor_email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $email_from = 'krishnaaakhandelwall018@gmail.com';
        
    $email_subject = "Feedback Submission";

    $email_body = "username: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Feedback: $feedback.\n";

    $to = "krishnaakhandelwal018@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

    
    if ($_POST['SUBMIT']) {
    if (mail ($to, $subject, $body) { 
       $success = "Message successfully sent";
    } else {
        $success = "Message Sending Failed, try again";
    }

?>