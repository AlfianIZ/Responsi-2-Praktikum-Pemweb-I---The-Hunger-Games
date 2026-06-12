<?php
$host = "localhost";
$username = "root";
$password = "alfi123";
$database = "the_hunger_games_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}