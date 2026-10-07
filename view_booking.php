<?php

$result = null;

if (isset($_POST["search"])) {

    $conn = mysqli_connect("localhost", "root", "", "vehicle_service");

    if (!$conn) {
        die("Database connection failed");
    }

    $phone = $_POST["phone"];

    $sql = "SELECT * FROM bookings WHERE phone='$phone'";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Booking</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #f2f6ff;
        }

        nav {
            background-color: #1d3557;
            padding: 20px;
        }

        nav h2 {
            color: white;
            display: inline;
            margin-right: 50px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
        }

        .box {
            width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border: 1px solid #ddd;
        }

        .box h1 {
            text-align: center;
            color: #1d3557;
        }

        .box input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 10px;
        }

        .box button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #2563eb;
            color: white;
            border: none;
        }

        .details {
            margin-top: 25px;
            padding: 15px;
            background-color: #eef4ff;
        }

        .details p {
            margin: 10px;
        }
    </style>
</head>

<body>

<nav>

    <h2>VehicleCare</h2>

    <a href="index.php">Home</a>

    <a href="services.php">Services</a>

    <a href="booking.php">Book Service</a>

    <a href="view_booking.php">View Booking</a>

    <a href="contact.php">Contact</a>

</nav>


<div class="box">

    <h1>View Your Booking</h1>

    <form method="POST">

        <label>Enter Phone Number</label>

        <input type="text" name="phone" required>

        <button type="submit" name="search">
            Search Booking
        </button>

    </form>


    <?php

    if ($result) {

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

    ?>

    <div class="details">

        <p><b>Customer Name:</b>
            <?php echo $row["customer_name"]; ?>
        </p>

        <p><b>Phone:</b>
            <?php echo $row["phone"]; ?>
        </p>

        <p><b>Vehicle Number:</b>
            <?php echo $row["vehicle_number"]; ?>
        </p>

        <p><b>Vehicle Type:</b>
            <?php echo $row["vehicle_type"]; ?>
        </p>

        <p><b>Service:</b>
            <?php echo $row["service_type"]; ?>
        </p>

        <p><b>Service Date:</b>
            <?php echo $row["service_date"]; ?>
        </p>

        <p><b>Time Slot:</b>
            <?php echo $row["time_slot"]; ?>
        </p>

        <p><b>Message:</b>
            <?php echo $row["message"]; ?>
        </p>

        <p><b>Status:</b>
            <?php echo $row["booking_status"]; ?>
        </p>

    </div>

    <?php

            }

        } else {

            echo "<p>Booking not found.</p>";

        }
    }

    ?>

</div>

</body>
</html>