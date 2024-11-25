<?php
include_once("config.php");

// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Get form data and sanitize input
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check if fields are not empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    // Hash the password before storing it (for security purposes)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query
    $sql = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';

    try {
        // Prepare the SQL query using the database connection
        $sqlQuery = $connect->prepare($sql);

        // Bind the parameters to the SQL query
        $sqlQuery->bindParam(':username', $username);
        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':password', $hashedPassword);

        // Execute the query
        if ($sqlQuery->execute()) {
            echo "The user was added successfully!";
        } else {
            echo "There was an error adding the user.";
        }
    } catch (PDOException $e) {
        // Handle any errors with the database
        echo "Error: " . $e->getMessage();
    }
}
?>
