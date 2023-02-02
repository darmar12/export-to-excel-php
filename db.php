<?php
$DBHost = "localhost";
$DBLogin = 'root';
$DBPassword = 'root';
$DBName = "export_test";
$conn = mysqli_connect($DBHost, $DBLogin, $DBPassword, $DBName) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>