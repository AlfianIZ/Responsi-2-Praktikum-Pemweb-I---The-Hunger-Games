<?php
session_start();

// Proteksi akses admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

require_once '../config/database.php';

// Cek ID film
if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$movie_id = (int)$_GET['id'];
$query = "SELECT * FROM movies WHERE id = $movie_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 0) {
    header("Location: dashboard.php");
    exit;
}

$movie = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <?php require_once '../includes/header.php'; ?>

    <div style="padding: 50px; max-width: 800px; margin: 0 auto;">
        <h1>Edit Rekam Film</h1>
        <p class="text-muted" style="margin-bottom: 30px;">Modifikasi metadata untuk arsip sinematik ini.</p>

        <div class="bg-dark-card border-dark" style="padding: 30px; border-radius: 8px;">
            <form action="../actions/movie_process.php" method="POST">
                <input type="hidden" name="movie_id" value="<?= $movie['id']; ?>">

                <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px;">Identitas Film</h3>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($movie['title']); ?>" required>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label>Genre</label>
                        <input type="text" name="genre" class="form-control" value="<?= htmlspecialchars($movie['genre']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Rilis</label>
                        <input type="number" name="release_year" class="form-control" value="<?= $movie['release_year']; ?>" required>
                    </div>
                </div>

                <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Sinopsis</h3>
                <div class="form-group">
                    <label>Sinopsis Lengkap</label>
                    <textarea name="synopsis" class="form-control" rows="5" required><?= htmlspecialchars($movie['synopsis']); ?></textarea>
                </div>

                <div style="margin-top: 30px; text-align: right;">
                    <a href="dashboard.php" class="btn btn-outline" style="margin-right: 10px;">Batal</a>
                    <button type="submit" name="edit_film" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <?php require_once '../includes/footer.php'; ?>

</body>
</html>