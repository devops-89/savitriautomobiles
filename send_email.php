<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $district = htmlspecialchars(trim($_POST['district']));
    $village = htmlspecialchars(trim($_POST['village']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $model_number = htmlspecialchars(trim($_POST['model_number']));
    
    // Email details
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Form Submission";
    $body = "Name: $name\nDistrict: $district\nVillage: $village\nPhone Number: $phone\nModel Number Details: $model_number";
    $headers = "From: no-reply@example.com"; // Optional, set a sender email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
