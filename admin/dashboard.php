<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<?php 
include '../includes/header.php'; 
?>

<main style="padding: 40px 50px; max-width: 1200px; margin: 0 auto; min-height: 80vh;">
    <div style="margin-bottom: 30px;">
        <h1>Dashboard Admin</h1>
        <p class="text-muted">Pengawasan sistem untuk Arsip Panem Cinema.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 40px;">
        <div class="bg-dark-card border-dark" style="padding: 20px; border-radius: 8px;">
            <p class="text-muted" style="font-size: 0.8rem; text-transform: uppercase;">Total Film</p>
            <h2>2</h2>
        </div>
        <div class="bg-dark-card border-dark" style="padding: 20px; border-radius: 8px;">
            <p class="text-muted" style="font-size: 0.8rem; text-transform: uppercase;">Total Ulasan</p>
            <h2>24.8k</h2>
        </div>
        <div class="bg-dark-card border-dark" style="padding: 20px; border-radius: 8px;">
            <p class="text-muted" style="font-size: 0.8rem; text-transform: uppercase;">Pengguna Aktif</p>
            <h2>3,115</h2>
        </div>
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
                <tr>
                    <td><strong>The Hunger Games</strong></td>
                    <td><span style="background: #374151; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">Aksi</span></td>
                    <td>2012</td>
                    <td class="text-orange">★ 4.8</td>
                    <td>
                        <a href="../pages/detail.php" style="margin-right: 10px; color: #94a3b8;">Lihat</a>
                        <a href="edit.php" style="color: #3b82f6;">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Catching Fire</strong></td>
                    <td><span style="background: #374151; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">Sci-Fi</span></td>
                    <td>2013</td>
                    <td class="text-orange">★ 4.9</td>
                    <td>
                        <a href="../pages/detail.php" style="margin-right: 10px; color: #94a3b8;">Lihat</a>
                        <a href="edit.php" style="color: #3b82f6;">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php 
// Memanggil footer modular
include '../includes/footer.php'; 
?>