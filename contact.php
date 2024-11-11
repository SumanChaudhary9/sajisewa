<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send email (you need a configured mail server)
        $to = "your-email@example.com";
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "All fields are required!";
    }
}
?>
