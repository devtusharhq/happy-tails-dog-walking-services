<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['walker-name']);
    $email = htmlspecialchars($_POST['walker-email']);
    $phone = htmlspecialchars($_POST['walker-phone']);

    // You can process this data further, for example, save to a database or send an email.

    // For now, let's show a simple confirmation message
    echo "<h2>Thank you for registering as a Dog Walker!</h2>";
    echo "<p>We have received the following details:</p>";
    echo "<ul>";
    echo "<li><b>Name:</b> " . $name . "</li>";
    echo "<li><b>Email:</b> " . $email . "</li>";
    echo "<li><b>Phone:</b> " . $phone . "</li>";
    echo "</ul>";
    echo "<p>We will contact you shortly with more details.</p>";

    // In a real-world scenario, you would also save this data to a database here.
} else {
    // If the form is not submitted, display the form (which is the usual case)
?>
