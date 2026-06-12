<?php
session_start();
require_once '../config/database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: ../auth/login.php");
    exit;
}

if (isset($_POST['kirim_ulasan'])) {
    $movie_id = (int)$_POST['movie_id'];
    $user_id = $_SESSION['user_id'];
    $rating = (int)$_POST['rating'];
    $review_text = mysqli_real_escape_string($conn, $_POST['review_text']);

    $query = "INSERT INTO reviews (movie_id, user_id, rating, review_text) 
              VALUES ($movie_id, $user_id, $rating, '$review_text')";
    
    mysqli_query($conn, $query);
    header("Location: ../pages/detail.php?id=$movie_id");
    exit;
}
?>