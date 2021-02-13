<?php
// ANCHOR - Database connection
$server = "localhost";
$user = "root";
$password = "";
$database = "stet";
$conn = mysqli_connect($server, $user, $password, $database);
// FIXME - Database connect error
if (!$conn) {
    die("connect failed: " . mysqli_connect_error());
    exit;
}
