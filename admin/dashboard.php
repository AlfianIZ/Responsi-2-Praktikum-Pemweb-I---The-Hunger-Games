<?php
session_start();

// Proteksi akses
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

require_once '../config/database.php';
require_once '../config/functions.php';

// Data untuk dashboard
$query_movies = "SELECT * FROM movies ORDER BY release_year ASC";
$result_movies = mysqli_query($conn, $query_movies);
$total_movies = mysqli_num_rows($result_movies);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <?php require_once '../includes/header.php'; ?>

    <main style="padding: 50px; min-height: 70vh;">
        <div style="margin-bottom: 30px;">
            <h1>Dashboard Admin</h1>
            <p class="text-muted">Selamat datang, <?= htmlspecialchars($_SESSION['full_name']); ?>. Pengawasan sistem untuk Arsip Panem Cinema.</p>
        </div>

        <div class="bg-dark-card border-dark" style="padding: 20px; border-radius: 8px;">
            <h3 style="margin-bottom: 15px;">Manajemen Film</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($total_movies > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result_movies)): ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($row['title']); ?></strong></td>
                            <td><?= htmlspecialchars($row['genre']); ?></td>
                            <td><?= $row['release_year']; ?></td>
                            <td class="text-orange"><?= formatRating($row['base_rating']); ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" style="color: #3b82f6;">Edit</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align: center; color: #94a3b8;">Belum ada arsip film.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php require_once '../includes/footer.php'; ?>

</body>
</html>