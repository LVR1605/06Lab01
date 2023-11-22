<?php

include('FormInfoClass.php');
include('database.php'); // Include the database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create an object of FormInfoClass
    $formData = new FormInfoClass(
        $_POST['lastName'],
        $_POST['firstName'],
        $_POST['middleInitial'],
        $_POST['age'],
        $_POST['contactNo'],
        $_POST['email'],
        $_POST['address']
    );

    // Connect to the MySQL database
    $mysqli = new mysqli("localhost", "root", "", "registration_form");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Save data to the database
    $formData->saveToDatabase($mysqli);

    // Display the entered data
    $formData->displayInfo();

    // Close the database connection
    $mysqli->close();
}

?>
