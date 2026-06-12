<?php
session_start();
// Jika sudah login, langsung arahkan ke halaman yang sesuai
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../index.php");
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="auth-container">
        <div style="text-align: center;">
            <h1>Panem Cinema</h1>
            <p class="text-muted">Arsip Kritik Modern</p>
        </div>
        <div class="auth-card">
            <h3 style="margin-bottom: 20px; border-bottom: 2px solid #ea580c; display: inline-block; padding-bottom: 5px;">Masuk Anggota</h3>
            
            <?php if(isset($_SESSION['error'])): ?>
                <div style="background-color: #7f1d1d; color: #fca5a5; padding: 10px; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['success'])): ?>
                <div style="background-color: #14532d; color: #86efac; padding: 10px; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
                    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>

            <form action="../actions/auth_process.php" method="POST">
                <div class="form-group">
                    <label>Email atau Username</label>
                    <input type="text" name="login_id" class="form-control" placeholder="Masukkan kredensial Anda" required>
                </div>
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Akses Arsip &rarr;</button>
            </form>
            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
                Penduduk baru di distrik? <a href="register.php" class="text-orange">Buat Akun</a>
            </p>
        </div>
    </div>
</body>
</html>