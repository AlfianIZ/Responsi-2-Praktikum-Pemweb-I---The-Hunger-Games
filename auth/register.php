<?php
session_start();
// Jika sudah login, tendang ke index
if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="auth-container" style="padding: 40px 0;">
        <div style="text-align: center;">
            <h1>Panem Cinema</h1>
            <p class="text-muted">Registrasi Arsip Warga</p>
        </div>
        <div class="auth-card">
            
            <?php if(isset($_SESSION['error'])): ?>
                <div style="background-color: #7f1d1d; color: #fca5a5; padding: 10px; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <form action="../actions/auth_process.php" method="POST">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="full_name" class="form-control" placeholder="Coriolanus Snow" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="snow_archives" required>
                </div>
                <div class="form-group">
                    <label>Email Pendaftaran</label>
                    <input type="email" name="email" class="form-control" placeholder="citizen@capitol.gov" required>
                </div>
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Daftar Akun &rarr;</button>
            </form>
            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
                Sudah memiliki akses? <a href="login.php" class="text-orange">Masuk di sini</a>
            </p>
        </div>
    </div>
</body>
</html>