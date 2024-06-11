<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $POST["message"];

    $to = "xolal5783@gmail.com";
    $subject = "New Message From Your Website";
    $body = "Name: $name\nEmail: $email\nMessage:$message"

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!"
    } else {
        echo "Oops! Something went wrong."
    }
}
?>