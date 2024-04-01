<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // You can perform validation here, such as checking if the username or email already exists in the database
    
    // For demonstration purposes, let's just echo the entered data
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    // For security purposes, do not echo the password. You may hash it and store it securely in a database.
    echo "Password: " . $password;
}
?>