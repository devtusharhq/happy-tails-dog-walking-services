<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dogName = $_POST['dog-name'];
    $walkTime = $_POST['walk-time'];
    $address = $_POST['address'];

    // Insert into database (not shown here)
    // Example: $conn->query("INSERT INTO bookings (dog_name, walk_time, address) VALUES ('$dogName', '$walkTime', '$address')");

    echo "Booking successful for $dogName at $walkTime. Address: $address";
}
?>
