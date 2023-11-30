<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Perform any necessary processing, such as sending an email

    // Example: Sending a simple email
    $to = "pratik.941@gmail.com"; // Replace with your email address
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Send a response to the client
    http_response_code(200);
} else {
    // Not a POST request, redirect or handle accordingly
    http_response_code(400);
}
?>
