<?php

// Cannot use with github hosting

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['Subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "huntlayne@icloud.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have recieved an email from " .$name. ".\n\n" .$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");
}

