<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "tsega599@gmail.com"; // Replace with your email address
    $subject = "New Message from " . $name;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send. Please try again.";
    }
}
?>
