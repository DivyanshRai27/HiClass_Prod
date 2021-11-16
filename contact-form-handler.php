<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'jazz@hiclassjanitorial.com';
    $email_subject = "New message";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Subject: $subject,\n".
                            "User Message: $message.\n";
                            
    $to = "hiclassjanitorialservices@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>