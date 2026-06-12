<?php
session_start();
require_once '../config/database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

if (isset($_POST['edit_film'])) {

    $id = (int) $_POST['movie_id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $release_year = (int) $_POST['release_year'];
    $synopsis = mysqli_real_escape_string($conn, $_POST['synopsis']);

    $update_query = "UPDATE movies 
                     SET title = '$title', 
                         genre = '$genre', 
                         release_year = $release_year, 
                         synopsis = '$synopsis' 
                     WHERE id = $id";

    if (mysqli_query($conn, $update_query)) {
        header("Location: ../admin/dashboard.php");
        exit;
    } else {

        echo "Gagal mengupdate arsip: " . mysqli_error($conn);
    }
}
?>