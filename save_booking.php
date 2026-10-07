<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "vehicle_service";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$customer_name = $_POST["customer_name"];
$phone = $_POST["phone"];
$vehicle_number = $_POST["vehicle_number"];
$vehicle_type = $_POST["vehicle_type"];
$service_type = $_POST["service_type"];
$service_date = $_POST["service_date"];
$time_slot = $_POST["time_slot"];
$message = $_POST["message"];

$booking_status = "Confirmed";

$sql = "INSERT INTO bookings
(customer_name, phone, vehicle_number, vehicle_type, service_type, service_date, time_slot, message, booking_status)
VALUES
('$customer_name', '$phone', '$vehicle_number', '$vehicle_type', '$service_type', '$service_date', '$time_slot', '$message', '$booking_status')";

if (mysqli_query($conn, $sql)) {

    header("Location: success.php");
    exit();

} else {

    echo "Booking failed: " . mysqli_error($conn);
}

mysqli_close($conn);

?>