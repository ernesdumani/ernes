<?php
session_start();

include_once('config.php');
if(!isset($_SESSION['id'] || !isset($_SESSION['movie_id']))){
    die('session variables are not set.please log in again.');
  }
    $user_id = n$_SESSION['id'];
    $movie_id = $_SESSION['movie_id'];

    id(!isset($_POST['nr_tickets'], $_POST['date'], $_POST['time'])) {
        die('from incomplete please complete');
  $nr_tickets = $_POST['date'];
  $data = $_POST['date'];
  $time = $_POST['time'];


  $sql = "INSERT INTO bookings (user_id, movie_id, nr_tickets, data, time)VALUES (:user_id, :movie_id, :nr_tickets, :date, :time";

  $insertBooking = $conn->prepare($sql);
  $insertBooking->bnindParam(":user_id", $user_id)
  $insertBooking->bnindParam(":movie_id", $movie_id)
  $insertBooking->bnindParam(": nr_tickets", $nr_tickets)
  $insertBooking->bnindParam(":data", $data)
  $insertBooking->bnindParam(":time", $time)

}
?>