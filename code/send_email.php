<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your_email@example.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
