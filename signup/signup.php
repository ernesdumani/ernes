<?php
$host = 'localhost';
$dbname = 'user_management';  // Fixed typo 'user_managment' to 'user_management'
$username = 'root';
$password = '';

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        // Check if any field is empty
        if (empty($user) || empty($email) || empty($pass)) {
            echo "All fields are required";
            exit;
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }

        // Hash the password before saving it
        $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

        // Prepare SQL query to insert data into the users table
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(":username", $user, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $hashed_password, PDO::PARAM_STR);

        // Execute the query
        if ($stmt->execute()) {
            echo "Signup successful! You can now log in.";
        } else {
            echo "Something went wrong. Please try again!";
        }
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}
?>
