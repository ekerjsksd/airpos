<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = $_POST;

    $to = 'karangpta3@gmail.com'; // Replace with your email address
    $subject = 'New Flight Booking';
    $message = '';

    foreach ($formData as $key => $value) {
        $message .= "$key: $value\n";
    }

    $headers = 'From: webform@yourdomain.com' . "\r\n" .
               'Reply-To: webform@yourdomain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully';
    } else {
        http_response_code(500); // Internal Server Error
        echo 'Failed to send email';
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Method not allowed';
}
?>
