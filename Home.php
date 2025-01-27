<?php
// Start session
session_start();
include 'navbar.php'; // Include navigation bar

// Database connection
$conn = new mysqli('localhost', 'root', '', 'anzar');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Vaccination</title>
    <link rel="stylesheet" href="home.css">
    <style>
        /* Add basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .hero {
            height: 300px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: black;
        }

        .hero p {
            font-size: 1.2em;
            color: green;
        }

        .vaccine-bar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            text-align: center;
        }

        .vaccine-bar div {
            flex: 1;
            margin: 10px;
            padding: 15px;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .vaccine-bar h3 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }

        .vaccine-bar p {
            font-size: 0.9em;
            color: #555;
        }

        .vaccine-bar a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .contact {
            padding: 20px;
            background: #333;
            color: white;
            text-align: center;
        }

        .contact a {
            color: #FFD700;
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #222;
            color: white;
        }
        
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Child Vaccination Management System</h1>
        <p>Your Trusted Platform for Certified Child Vaccination</p>
        <!-- Vaccine Bar Section -->
    <div class="vaccine-bar">
        <div>
            <h3>Vaccines for Children</h3>
            <p class="time">Opning time 9:00am to 6:00pm</p>
            <p>Protect your child with essential vaccines recommended by experts.</p>
            <a href="babycare.php">Book For Children</a>
        </div>
        <div>
            <h3>Vaccines for Adults</h3>
            <p class="time">Opning time 9:00am to 6:00pm</p>
            <p>Stay healthy and safe with our range of vaccines for adults.</p>
            <a href="babycare.php">Book For Adults</a>
        </div>
    </div>
    </div>

    

    <!-- Contact Section -->
    <div id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:support@childvaccination">support@childvaccination</a></p>
        <p>Phone: +1 (800) 123-4567</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Child Vaccination. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
