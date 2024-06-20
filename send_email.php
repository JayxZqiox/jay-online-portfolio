<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'jaycurayag12@gmail.com';
    $subject = 'Contact Form Submission';
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: \n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message.';
    }
} else {
    echo 'Invalid request method.';
}
?>
