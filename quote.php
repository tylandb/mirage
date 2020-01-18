<?php
    $name = $POST_['name'];
    $email = $POST_['email'];
    $service = $POST_['service']
    $description = $POST_['description'];

    $email_from = 'Mirage Laser Design Site';
    $email_subject = 'New Message From Mirage Laser Design Quote';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Service: $service.\n".
                  "Message: $message.\n";

    $to ="chaserollier@gmail.com";
    $headers = "From: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>
