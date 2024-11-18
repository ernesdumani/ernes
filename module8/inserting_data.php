<?php
$host = "localhost";
$db = "db";
$user = "root";
$pass = "";

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "ernes";

    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $pdo -> exec($sql);

    echo "Bravo";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>