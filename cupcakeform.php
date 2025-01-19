<?php

require_once('backend/cupcaketbl.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // die ($_SERVER['REQUEST_METHOD'] == 'POST');
    $fullname =  mysqli_real_escape_string($connect, $_POST["fullname"]);
    $email =  mysqli_real_escape_string($connect, $_POST["email"]);
    $contact =  mysqli_real_escape_string($connect, $_POST["contact"]);
    $quantity =  mysqli_real_escape_string($connect, $_POST["quantity"]);
    $addresss =  mysqli_real_escape_string($connect, $_POST["addresss"]);
    $theme =  mysqli_real_escape_string($connect, $_POST["theme"]);
    $date_to_delivered =  mysqli_real_escape_string($connect, $_POST["date_to_delivered"]);

    $cupcake = "INSERT INTO cupcaketbl (fullname, email, contact, quantity, addresss, theme, date_to_delivered) VALUES 
    ('$fullname', '$email', '$contact', '$quantity', '$addresss', '$theme', '$date_to_delivered')";

    if ($connect->query($cupcake) === TRUE) {
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
    <title>Cup Cake Form</Form></title>
    <link rel="stylesheet" href="orderformstyle.css">
</head>
<body>

<?php
$name = $_GET['name'];
$price = $_GET['price'];
$image = $_GET['image'];
?>
<div class="product-container">
        <img src="<?php echo $image ?>" class="product-image">
        <div class="product-details">
            <h2 class="product-name"><?php echo $name; ?></h2>
            <p class="product-price"><?php echo $price; ?></p>
        </div>
    </div>
    <div class="container">
        <h1>Cup Cake Form</h1>
        <form action="cupcakeform.php" method="POST">
            <input type="text" id="theme" name="theme" value="<?php echo $name?>"hidden> 
            <div class="form-group">
                <label for="fullname">Full Name:</label>
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
                <label for="quantity">quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
            </div>

            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea id="address" name="addresss" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="date to delivered">Date to be Delivered:</label>
                <textarea name="date to delivered" id="date to delivered" rows="5" required></textarea>
            </div>

            <button type="submit">Submit Order</button>
        </form>
        <a href="homepage.php"><button type="submit">Cancel</button></a>
        <div id="confirmationMessage"></div>
    </div>
    <script src="javascript/orderformscript.js"></script>
</body>
</html>