<?php
session_start();
$conn = mysqli_connect("localhost", "root", "matin0099", "susers");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>