<?php
$conn = mysqli_connect("localhost", "root", "1221", "event_management");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>