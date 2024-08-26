<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ahann12@aol.com"; 
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Name: " . $name . "\n\n";
    $fullMessage .= "Email: " . $email . "\n\n";
    $fullMessage .= "Subject: " . $subject . "\n\n";
    $fullMessage .= "Message: " . $message . "\n\n";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Thanks for your messsage! I will be in touch soon.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
