<?php
// HYDROPI_CONNECT.PHP
    // Set database login details
    $servername = "localhost";
    $username = "serenityadmin";
    $password = "Serenity2019!";
    $dbname = "hydropi";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>