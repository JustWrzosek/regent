<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars(strip_tags(trim($_POST['first-name'])));
    $lastName = htmlspecialchars(strip_tags(trim($_POST['last-name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));
    $company = htmlspecialchars(strip_tags(trim($_POST['company'])));
    $phoneNumber = htmlspecialchars(strip_tags(trim($_POST['phone-number'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Email settings
    $to = "mrrodneydelacruz@gmail.com"; // Replace with your email address
    $subject = "New message from: $firstName $lastName";
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nTitle: $title\nCompany: $company\nPhone Number: $phoneNumber\n\nMessage:\n$message";
    $headers = "From: $email\r\n"; // Set the sender's email

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>