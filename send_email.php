<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $tripType = $_POST['tripType'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $departure = $_POST['departure'];
    $return = isset($_POST['return']) ? $_POST['return'] : 'N/A';

    $toEmail = "karangpta3@gmail.com"; // Replace with your email
    $subject = "New Flight Booking Request";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $message = "Flight Booking Details:\n\n";
    $message .= "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Trip Type: $tripType\n";
    $message .= "From: $from\n";
    $message .= "To: $to\n";
    $message .= "Departure Date: $departure\n";
    $message .= "Return Date: $return\n\n";
    $message .= "Thank you for booking with us!";

    // Send email
    if (mail($toEmail, $subject, $message, $headers)) {
        echo "<script>alert('Your flight booking has been successfully completed!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error! Booking failed. Please try again.'); window.location.href='index.html';</script>";
    }
}
?>
