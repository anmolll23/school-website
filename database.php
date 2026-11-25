
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "schooldb";

$conn = mysqli_connect("localhost", "root", "", "school_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
