<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com"; // Replace with your actual email
    $subject = "New Flight Booking";

    // Collect form data
    $tripType = isset($_POST["tripType"]) ? $_POST["tripType"] : 'Not provided';
    $from = isset($_POST["from"]) ? $_POST["from"] : 'Not provided';
    $toPlace = isset($_POST["to"]) ? $_POST["to"] : 'Not provided';
    $departure = isset($_POST["departure"]) ? $_POST["departure"] : 'Not provided';
    $return = isset($_POST["return"]) ? $_POST["return"] : 'Not provided';

    $message = "
        <html>
        <head><title>Flight Booking Details</title></head>
        <body>
            <h2>Flight Booking Confirmation</h2>
            <p><strong>Trip Type:</strong> $tripType</p>
            <p><strong>From:</strong> $from</p>
            <p><strong>To:</strong> $toPlace</p>
            <p><strong>Departure Date:</strong> $departure</p>
            <p><strong>Return Date:</strong> $return</p>
        </body>
        </html>
    ";

    // Email Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@yourdomain.com" . "\r\n"; // Change to a valid email

    // Send Email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
