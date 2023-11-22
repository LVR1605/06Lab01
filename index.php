<?php

// Include the FormInfoClass file
include('FormInfoClass.php');

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

    // Display the entered data
    $formData->displayInfo();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
</head>
<body>
    <h1>Online Registration Form</h1>
    <form action="index.php" method="post">
        <label for="lastName">Last Name*:</label>
        <input type="text" name="lastName" required><br>

        <label for="firstName">First Name*:</label>
        <input type="text" name="firstName" required><br>

        <label for="middleInitial">Middle Initial:</label>
        <input type="text" name="middleInitial"><br>

        <label for="age">Age*:</label>
        <input type="text" name="age" required><br>

        <label for="contactNo">Contact No.*:</label>
        <input type="text" name="contactNo" required><br>

        <label for="email">E-mail*:</label>
        <input type="email" name="email" required><br>

        <label for="address">Address*:</label>
        <textarea name="address" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
 