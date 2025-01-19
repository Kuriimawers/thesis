<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "cakeydb";

$connect = new mysqli($host, $username, $password);

// Check connection to MySQL server
if ($connect->connect_error) {
    die("<div class='alert alert-danger' role='alert'>Connection to MySQL server failed: " . $connect->connect_error . "</div>");
}

echo '<div class="alert alert-success" role="alert">Connected to MySQL server successfully</div>';

// Check if the database exists
$db_check_query = "SHOW DATABASES LIKE '$dbname'";
$db_check_result = $connect->query($db_check_query);

if ($db_check_result->num_rows > 0) {
    // If the database exists, select it
    $connect->select_db($dbname);
    echo '<div class="alert alert-success" role="alert">Database connected successfully</div>';
} else {
    // If the database does not exist, create it
    $create_db_query = "CREATE DATABASE $dbname";
    if ($connect->query($create_db_query) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Database created successfully</div>';
        $connect->select_db($dbname);
    } else {
        echo '<div class="alert alert-danger" role="alert">Error creating database: ' . $connect->error . '</div>';
    }
}

// Optional: Close the connection
//$connect->close();
?>