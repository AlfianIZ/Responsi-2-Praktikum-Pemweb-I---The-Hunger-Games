<?php
session_start();
require_once '../config/database.php';

// Validasi ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

$id = (int) $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM movies WHERE id = $id");
$movie = mysqli_fetch_assoc($query);

if (!$movie) {
    echo "<p>Film tidak ditemukan.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film - <?= htmlspecialchars($movie['title']); ?> | Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<?php require_once '../includes/header.php'; ?>

<div class="hero-detail hero-banner-main" 
     style="background-image: linear-gradient(to top, #0b0f19, rgba(11, 15, 25, 0.4)), url('../assets/img/<?= htmlspecialchars($movie['hero_image']); ?>');">
     
    <div style="z-index: 10;">
        <span style="background: #ea580c; padding: 2px 8px; border-radius: 4px; font-size: 0.8rem;">
            <?= htmlspecialchars($movie['genre']); ?>
        </span>
        <h1 style="font-size: 3rem; margin: 10px 0;"><?= htmlspecialchars($movie['title']); ?></h1>
        <p style="max-width: 700px;"><?= htmlspecialchars($movie['synopsis']); ?></p>
    </div>
</div>

<div class="cast-grid">
    <?php
    $movie_id = $movie['id'];
    $cast_query = mysqli_query($conn, "SELECT * FROM characters WHERE movie_id = $movie_id");
    
    while ($cast = mysqli_fetch_assoc($cast_query)):
    ?>
        <div class="cast-card">
            <div class="cast-photo" style="width: 100%; height: 150px; background-color: #1f2937; display: flex; align-items: center; justify-content: center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#4b5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M20 21a8 8 0 0 0-16 0"></path>
                </svg>
            </div>
            <h5><?= htmlspecialchars($cast['character_name']); ?></h5>
        </div>
    <?php endwhile; ?>
</div>

    <div style="padding: 50px;">
        <h2><?= htmlspecialchars($movie['title']); ?></h2>
        <p>Genre: <?= htmlspecialchars($movie['genre']); ?> | Tahun: <?= $movie['release_year']; ?></p>
        <p><?= htmlspecialchars($movie['synopsis']); ?></p>

        <hr style="margin: 30px 0;">

        <?php if (isset($_SESSION['user_id']) && $_SESSION['role'] == 'user'): ?>
            <h3>Beri Ulasan Anda</h3>
            <form action="../actions/review_process.php" method="POST">
                <input type="hidden" name="movie_id" value="<?= $id; ?>">
                <div class="form-group">
                    <label>Rating (1-5)</label>
                    <input type="number" name="rating" min="1" max="5" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Ulasan</label>
                    <textarea name="review_text" class="form-control" required></textarea>
                </div>
                <button type="submit" name="kirim_ulasan" class="btn btn-primary">Kirim Ulasan</button>
            </form>
        <?php elseif (!isset($_SESSION['user_id'])): ?>
            <p>Silakan <a href="../auth/login.php">login</a> untuk memberi ulasan.</p>
        <?php endif; ?>

        <h3>Ulasan Pengguna</h3>
        <?php
        $reviews = mysqli_query($conn, "SELECT reviews.*, users.username FROM reviews JOIN users ON reviews.user_id = users.id WHERE movie_id = $id");
        while ($rev = mysqli_fetch_assoc($reviews)):
            ?>
            <div class="bg-dark-card" style="padding: 15px; margin-bottom: 10px; border-radius: 5px;">
                <strong><?= htmlspecialchars($rev['username']); ?></strong> - Rating: <?= $rev['rating']; ?>/5
                <p><?= htmlspecialchars($rev['review_text']); ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <?php require_once '../includes/footer.php'; ?>