<?php
require_once('backend/customcake.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // die ($_SERVER['REQUEST_METHOD'] == 'POST');
    $fullname =  mysqli_real_escape_string($connect, $_POST["fullname"]);
    $email =  mysqli_real_escape_string($connect, $_POST["email"]);
    $contact =  mysqli_real_escape_string($connect, $_POST["contact"]);
    $cakeflavors =  mysqli_real_escape_string($connect, $_POST["cakeflavors"]);
    $cakesize =  mysqli_real_escape_string($connect, $_POST["cakesize"]);
    $cakeshapes =  mysqli_real_escape_string($connect, $_POST["cakeshapes"]);
    $sugarlevel =  mysqli_real_escape_string($connect, $_POST["sugarLevel"]);
    $toppings =  mysqli_real_escape_string($connect, $_POST["toppings"]);
    $suggestions =  mysqli_real_escape_string($connect, $_POST["suggestions"]);
    $layers =  mysqli_real_escape_string($connect, $_POST["layers"]);
    $colors =  mysqli_real_escape_string($connect, $_POST["colors"]); 
    $themes =  mysqli_real_escape_string($connect, $_POST["themes"]);
    $addresss =  mysqli_real_escape_string($connect, $_POST["addresss"]);
    $date_to_delivered =  mysqli_real_escape_string($connect, $_POST["date_to_delivered"]);

    $custom = "INSERT INTO customtbl (fullname, email, contact, cakeflavors, cakesize, cakeshapes, sugarlevel, toppings, suggestions, layers, colors, themes, addresss, date_to_delivered) VALUES 
    ('$fullname', '$email', '$contact', '$cakeflavors', '$cakesize', '$cakeshapes', '$sugarlevel', '$toppings', '$suggestions', '$layers', '$colors', '$themes', '$addresss', '$date_to_delivered')";

    if ($connect->query($custom) === TRUE) {
        echo '<div class="alert alert-success" role="alert">New record created successfully.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $connect->error . '</div>';
    }
}

$message = isset($_SESSION["message"]) ? $_SESSION["message"] : '';
unset($_SESSION["message"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form</title>
    <link rel="stylesheet" href="customstyle.css">
</head>
<body>
    <div class="container">
        <h1>Customize Cake Form</h1>
        <form action="customform.php" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="contact" required>
            </div>

            <div class="form-group">
                <label for="cakeflavors">Cake Flavors:</label>
                <select id="cakeflavors" name="cakeflavors" required>
                    <option value="">Select Flavors</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Ube">Ube</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Mocha">Mocha</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sizee" name="cakesize">Cake Size:</label>
                <select id="sizee" name="cakesize" required>
                    <option value="">Select Size</option>
                    <option value="6x5">6x5</option>
                    <option value="7x5">7x5</option>
                    <option value="8x5">8x5</option>
                    <option value="10x5">10x5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cakeshapes">Cake Shapes:</label>
                <select id="cakeshapes" name="cakeshapes" required>
                    <option value="">Select Shapes</option>
                    <option value="Round">Round</option>
                    <option value="Square">Square</option>
                    <option value="Rectangle">Rectangle</option>
                    <option value="Letters">Letters</option>
                    <option value="Numbers">Numbers</option>
                </select>
            </div>
            <!-- Sugar Level -->
            <div class="form-group">
                <label for="sugarLevel">Sugar Level:</label>
                <select id="sugarLevel" name="sugarLevel" required>
                    <option value="">Select Sugar Level</option>
                    <option value="50%">50%</option>
                    <option value="99%">99%</option>
                </select>
            </div>

            <!-- Toppings -->
            <div class="form-group">
                <label for="toppings">Toppings:</label>
                <input type="text" id="toppings" name="toppings" placeholder="Enter toppings" required>
            </div>

            <!-- Suggestions -->
            <div class="form-group">
                <label for="suggestions">Suggestions:</label>
                <textarea id="suggestions" name="suggestions" rows="3" placeholder="Any suggestions?" required></textarea>
            </div>

            <!-- Layers of Cake -->
            <div class="form-group">
                <label for="layers">Layers of Cake:</label>
                <input type="number" id="layers" name="layers" min="1" max="10" required>
            </div>

            <!-- Colors -->
            <div class="form-group">
                <label for="colors">Colors:</label>
                <input type="text" id="colors" name="colors" placeholder="Enter colors" required>
            </div>

            <!-- Themes -->
            <div class="form-group">
                <label for="themes">Themes:</label>
                <input type="text" id="themes" name="themes" placeholder="Enter themes" required>
            </div>
            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea id="address" name="addresss" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="date to delivered">Date to be Delivered:</label>
                <textarea name="date to delivered" id="date to delivered" rows="5" required></textarea>
                </select>
            </div>

            <button type="submit">Submit Order</button>
        </form>
        <a href="homepage.php"><button type="submit" id="cancel">Cancel</button></a>
        <div id="confirmationMessage"></div>
    </div>
    <script src="javascript/customformscript.js"></script>
</body>
</html>