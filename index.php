<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panem Cinema - Beranda</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php
include 'includes/header.php';
?>

<body>
    <div class="hero-detail hero-banner-main"
        style="background-image: linear-gradient(to top, #0b0f19, rgba(11, 15, 25, 0.4)), url('assets/img/bannet_cf.jpg');">
        <div>
            <span class="text-orange" style="font-size: 0.8rem; letter-spacing: 2px;">ARSIP UNGGULAN</span>
            <h1 style="font-size: 3rem; margin: 10px 0;">The Hunger Games: Catching Fire</h1>
            <p style="max-width: 600px; color: #94a3b8;">Sebuah eksplorasi intim ke dalam catatan sejarah revolusi
                Panem.</p>
            <br>
            <a href="pages/detail.php" class="btn btn-primary">Lihat Detail</a>
        </div>
    </div>

    <h2 class="section-title">Sedang Tren di Panem</h2>
    <div class="movie-grid">
        <a href="pages/detail.php" class="movie-card">
            <img src="assets/img/the hunger games 2012.webp" alt="Poster The Hunger Games 2012" class="movie-poster">
            <div class="movie-info">
                <h4>The Hunger Games</h4>
                <p class="text-muted" style="font-size: 0.8rem;">2012 • Aksi • Sci-Fi</p>
            </div>
        </a>

        <a href="pages/detail.php" class="movie-card">
            <img src="assets/img/catchingfire.jpg" alt="Poster Catching Fire" class="movie-poster">
            <div class="movie-info">
                <h4>Catching Fire</h4>
                <p class="text-muted" style="font-size: 0.8rem;">2013 • Aksi • Sci-Fi</p>
            </div>
        </a>

        <a href="pages/detail.php" class="movie-card">
            <img src="assets/img/mockiingjay pt 1.webp" alt="Mockingjay Part 1" class="movie-poster">
            <div class="movie-info">
                <h4>Mockingjay Part 1</h4>
                <p class="text-muted" style="font-size: 0.8rem;">2014 • Drama • Sci-Fi</p>
            </div>
        </a>

        <a href="pages/detail.php" class="movie-card">
            <img src="assets/img/mockiingjay pt 2.webp" alt="Mockingjay Part 2" class="movie-poster">
            <div class="movie-info">
                <h4>Mockingjay Part 2</h4>
                <p class="text-muted" style="font-size: 0.8rem;">2015 • Aksi • Sci-Fi</p>
            </div>
        </a>

        <a href="pages/detail.php" class="movie-card">
            <img src="assets/img/theballad.webp" alt="Poster The Ballad of Songbirds & Snakes" class="movie-poster">
            <div class="movie-info">
                <h4>The Ballad of Songbirds & Snakes</h4>
                <p class="text-muted" style="font-size: 0.8rem;">2023 • Drama • Aksi</p>
            </div>
        </a>
    </div>

    <?php
    include 'includes/footer.php';
    ?>