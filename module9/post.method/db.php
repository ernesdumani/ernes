<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "table_1";

try{
    $connect = new PDO("mysql:host=$server;dbname=$dbname",  $username, $password);

}
catch(PDOException $e){
    echo "something went wrong!!";
}
?>