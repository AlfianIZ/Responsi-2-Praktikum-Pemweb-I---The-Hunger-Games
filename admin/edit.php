<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Film - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<?php 
// Memanggil header modular
include '../includes/header.php'; 
?>

<main style="padding: 40px 50px; max-width: 900px; margin: 0 auto; min-height: 80vh;">
    <h1>Edit Rekam Film</h1>
    <p class="text-muted" style="margin-bottom: 30px;">Modifikasi metadata dan karakter untuk arsip sinematik ini. Hanya dapat diedit, tidak dapat dihapus.</p>

    <div class="bg-dark-card border-dark" style="padding: 30px; border-radius: 8px;">
        <form action="dashboard.php" method="POST" novalidate>
            <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px;">Identitas Film</h3>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" value="The Hunger Games" required>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Genre</label>
                    <select class="form-control" required>
                        <option value="">Pilih Genre...</option>
                        <option selected>Aksi</option>
                        <option>Sci-Fi</option>
                        <option>Drama Distopia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tahun Rilis</label>
                    <input type="number" class="form-control" value="2012" required>
                </div>
            </div>

            <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Sinopsis & Narasi</h3>
            <div class="form-group">
                <label>Sinopsis Lengkap</label>
                <textarea class="form-control" rows="5" required>Katniss Everdeen secara sukarela menggantikan adik perempuannya di Hunger Games, pertarungan mematikan yang disiarkan televisi.</textarea>
            </div>

            <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Karakter (Pemeran)</h3>
            <p class="text-muted" style="font-size: 0.85rem; margin-bottom: 15px;">Edit nama karakter yang terlibat dalam arsip ini.</p>
            
            <div class="form-group">
                <label>Karakter Utama</label>
                <input type="text" class="form-control" value="Katniss Everdeen" required>
            </div>
            <div class="form-group">
                <label>Karakter Pendukung 1</label>
                <input type="text" class="form-control" value="Peeta Mellark" required>
            </div>
            <div class="form-group">
                <label>Antagonis</label>
                <input type="text" class="form-control" value="President Snow" required>
            </div>

            <div style="margin-top: 30px; text-align: right;">
                <a href="dashboard.php" class="btn btn-outline" style="margin-right: 10px;">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</main>

<?php 
// Memanggil footer modular
include '../includes/footer.php'; 
?>