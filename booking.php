<!DOCTYPE html>
<html>
<head>
    <title>Book Vehicle Service</title>

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

        .form {
            width: 450px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border: 1px solid #ddd;
        }

        .form h1 {
            text-align: center;
            color: #1d3557;
        }

        .form label {
            display: block;
            margin-top: 15px;
        }

        .form input,
        .form select,
        .form textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .form textarea {
            height: 80px;
        }

        .form button {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
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

<div class="form">

    <h1>Book Your Vehicle Service</h1>

    <form action="save_booking.php" method="POST" onsubmit="return validateForm()">

        <label>Customer Name</label>
        <input type="text" id="customer_name" name="customer_name" required>

        <label>Phone Number</label>
        <input type="text" id="phone" name="phone" maxlength="10" required>

        <p id="phoneError" class="error"></p>

        <label>Vehicle Number</label>
        <input type="text" id="vehicle_number" name="vehicle_number" required>

        <label>Vehicle Type</label>

        <select name="vehicle_type" required>
            <option value="">Select Vehicle</option>
            <option value="Bike">Bike</option>
            <option value="Car">Car</option>
            <option value="Auto">Auto</option>
            <option value="Other">Other</option>
        </select>

        <label>Service Type</label>

        <select name="service_type" required>
            <option value="">Select Service</option>
            <option value="General Service">General Service</option>
            <option value="Oil Change">Oil Change</option>
            <option value="Tyre Service">Tyre Service</option>
            <option value="Vehicle Washing">Vehicle Washing</option>
            <option value="Brake Service">Brake Service</option>
        </select>

        <label>Service Date</label>
        <input type="date" id="service_date" name="service_date" required>

        <p id="dateError" class="error"></p>

        <label>Time Slot</label>

        <select name="time_slot" required>
            <option value="">Select Time</option>
            <option value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
            <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
            <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
            <option value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
            <option value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
        </select>

        <label>Message</label>
        <textarea name="message"></textarea>

        <button type="submit">Book Now</button>

    </form>

</div>

<script>

function validateForm() {

    var phone = document.getElementById("phone").value;
    var date = document.getElementById("service_date").value;

    var phoneError = document.getElementById("phoneError");
    var dateError = document.getElementById("dateError");

    phoneError.innerHTML = "";
    dateError.innerHTML = "";

    if (!/^[0-9]{10}$/.test(phone)) {

        phoneError.innerHTML = "Please enter a valid 10-digit phone number.";

        return false;
    }

    var today = new Date();
    today.setHours(0, 0, 0, 0);

    var selectedDate = new Date(date);

    if (selectedDate < today) {

        dateError.innerHTML = "Please select today or a future date.";

        return false;
    }

    alert("Booking details are valid. Your booking will be submitted.");

    return true;
}

</script>

</body>
</html>