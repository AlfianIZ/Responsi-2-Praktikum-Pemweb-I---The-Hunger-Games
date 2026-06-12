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
            <form action="login.php" novalidate>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Coriolanus Snow" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="snow_archives" required>
                </div>
                <div class="form-group">
                    <label>Email Pendaftaran</label>
                    <input type="email" class="form-control" placeholder="citizen@capitol.gov" required>
                </div>
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Daftar Akun &rarr;</button>
            </form>
            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
                Sudah memiliki akses? <a href="login.php" class="text-orange">Masuk di sini</a>
            </p>
        </div>
    </div>
    </div>
    </div> <script src="../assets/js/script.js"></script>
</body>
</html>