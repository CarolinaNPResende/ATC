<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

    $to = "formassim1@gmail.pt";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$visitor_email,$headers);

    header("Location: index.html");

  ?>
