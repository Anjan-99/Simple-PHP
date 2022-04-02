<?php
//this is the main config file
$DB_HOST = ""; // Database Host ex.sql0000.main-hosting.eu
$DB_USER = ""; // Database Username 
$DB_PASS = ""; // Database Password
$DB_NAME = ""; // Database Name
$conn = mysqli_connect($DB_HOST, "$DB_USER", "$DB_PASS", "$DB_NAME");
if (!isset($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}
