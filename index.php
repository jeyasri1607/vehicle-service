
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Service Booking System</title>

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

        .home {
            text-align: center;
            padding: 80px 20px;
            background-color: #dbeafe;
        }

        .home h1 {
            color: #1d3557;
            font-size: 40px;
        }

        .home p {
            font-size: 18px;
        }

        .button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            margin-top: 15px;
        }

        .services {
            text-align: center;
            padding: 40px;
        }

        .card {
            display: inline-block;
            width: 200px;
            padding: 20px;
            margin: 10px;
            background-color: white;
            border: 1px solid #ddd;
        }

        .card h3 {
            color: #1d3557;
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


<div class="home">

    <h1>Vehicle Service Booking System</h1>

    <p>
        Book your vehicle service easily and quickly.
    </p>

    <a href="booking.php" class="button">
        Book Service
    </a>

</div>


<div class="services">

    <h2>Our Services</h2>

    <div class="card">
        <h3>General Service</h3>
        <p>Complete vehicle checkup and service.</p>
    </div>

    <div class="card">
        <h3>Oil Change</h3>
        <p>Quick and reliable oil change service.</p>
    </div>

    <div class="card">
        <h3>Tyre Service</h3>
        <p>Tyre checking and maintenance.</p>
    </div>

    <div class="card">
        <h3>Vehicle Washing</h3>
        <p>Clean and fresh vehicle washing.</p>
    </div>

</div>

</body>
</html>
```
