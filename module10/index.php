<?php
include_once('config.php');

$sql = "SELECT * FROM users";

$getUsers = $connect->prepare($sql);

$getUsers-> execute();

$users = $getUsers->fetchALL();

echo var_dump($users);

?>