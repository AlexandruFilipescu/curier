<?php

session_start();

$server = "localhost";  // 127.0.0.1   ::1
$username = "root";
$password = "";
$bd = "curier";
$baseURL = "http://curier.abc";

$conn = new mysqli($server, $username, $password, $bd);

if($conn->connect_error) {
    die("EROARE LA CONECTARE! " . $conn->connect_error);
}