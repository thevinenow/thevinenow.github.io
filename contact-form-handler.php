<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['Email'];
    $message = $_POST['message'];

    $email_from = 'http://www.thevinenow.com/';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n".
                      "User Message: $message_email.\n";

    $to = "kaykyungahwoo@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject, $email_body, $headers);

    heater("Location: index.html");

 ?>
